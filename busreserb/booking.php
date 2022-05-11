<?php
    require "DBconnection.php";
    ob_start();
    session_start();
    if(isset($_POST['dropdown']) && isset($_POST['dropdown1']) && isset($_POST['bookingDate']) && isset($_POST['passengerCount']) && isset($_POST['amount'])){
        $origin = $_POST['dropdown'];
        $destination = $_POST['dropdown1'];
        $bookingDate = date('Y-m-d', strtotime($_POST['bookingDate']));
        $passengerCount = $_POST['passengerCount'];
        $amount = $_POST['amount'];
        $busSerialNumber = substr(uniqid(rand(), true), 7, 7);
        $_SESSION["serialNo"] = $busSerialNumber;
        $fare = $_POST['fare'];
        #$_SESSION['passengerEmail'] = $passengerEmail;
        $passengerPassword = $_SESSION["passengerPassword"];

        $query2 = "SELECT `passengerId` FROM `passengerinfo` where `password` = '$passengerPassword'";
        
        $query2run = mysqli_query($connectDb, $query2);

        if(mysqli_num_rows($query2run) > 0)
        {
            while($row = mysqli_fetch_assoc($query2run)) {

                $change = ($amount - ($fare *  $passengerCount));
                $query = $connectDb->prepare("INSERT INTO bookinginfo (`origin`, `destination`, `bookingDate`, `passengercount`, `amount`, `passengerId`, `serialNo`, `fare`, `passengerChange`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $query->bind_param("sssiiiiii", $_POST['dropdown'], $_POST['dropdown1'], $bookingDate, $_POST['passengerCount'], $_POST['amount'], $row["passengerId"], $busSerialNumber, $_POST['fare'], $change);
    #$query->execute();\
                $result = $query->execute();
                if (!$result){
                    die('could not insert into program '.$connectDb->error);
                }else{
                    header("Location: output.php");
                }
                die(); 
        }

        
    } 
}   
    
    
?>