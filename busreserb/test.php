<?php
    session_start();
    require "DBconnection.php";
    
    if(isset($_POST['passengerEmail'])){
        $passengerEmail = $_POST['passengerEmail'];  

        $query = ("select email, passengerId from passengerinfo where email='$passengerEmail' and passengerId = ''");
        $result = $connectDb->query($query);

        if($result->mysqli_num_rows > 0){
                echo "$passengerId";
            }else{
            echo "may mali ata";
            } 
    }
    
?>