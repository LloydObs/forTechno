<?php
    require "DBconnection.php";
    session_start();
    ob_start();
    if(isset($_POST['submit'])){

        $passengerPassword = $_SESSION['passengerPassword'];
        
        $query = "SELECT passengerinfo.passengerName, passengerinfo.passengerId, 
                 bookinginfo.origin, bookinginfo.destination, bookinginfo.bookingDate, bookinginfo.passengercount, bookinginfo.amount, bookinginfo.serialNo, bookinginfo.passengerChange
                 FROM passengerinfo
                 INNER JOIN bookinginfo ON passengerinfo.passengerId=bookinginfo.passengerId
                 WHERE passengerinfo.password = '$passengerPassword'
                 ORDER by bookinginfo.bookingDate DESC
                 LIMIT 1";

        /*SELECT passengerinfo.passengerName, passengerinfo.passengerId, 
        bookinginfo.origin, bookinginfo.destination, bookinginfo.bookingDate, bookinginfo.passengercount, bookinginfo.amount,
        bookinginfo.serialNo, bookinginfo.passengerChange 
        FROM passengerinfo 
        INNER JOIN bookinginfo ON passengerinfo.passengerId=bookinginfo.passengerId 
        WHERE passengerinfo.password = '123123123' 
        ORDER by bookinginfo.bookingDate DESC 
        LIMIT 1;

        SELECT passengerinfo.passengerName, passengerinfo.passengerId, 
        bookinginfo.origin, bookinginfo.destination, max(bookinginfo.bookingDate), bookinginfo.passengercount, bookinginfo.amount,
        bookinginfo.serialNo, bookinginfo.passengerChange 
        FROM passengerinfo 
        INNER JOIN bookinginfo ON passengerinfo.passengerId=bookinginfo.passengerId 
        WHERE passengerinfo.password = '123123123' 
        ORDER by bookinginfo.bookingDate
        LIMIT 1


        
        
        $query = "SELECT `passengerinfo.passengerName`, `passengerinfo.passengerId`,
                 `bookinginfo.origin`, `bookinginfo.destination`, `bookinginfo.bookingDate`, 
                 `bookinginfo.passengercount`, `bookinginfo.amount`, `bookinginfo.serialNo`
                  FROM `passengerinfo` 
                  INNER JOIN `bookinginfo` ON `passengerinfo.passengerId`=`bookinginfo.passengerId`
                  WHERE `passengerinfo.password` = '$passengerPassword'
                  ORDER BY bookinginfo.bookingDate DESC
                  LIMIT 1";
        */
        $result = mysqli_query($connectDb, $query);

        if($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                $passengerName = $row['passengerName'];
                $passengerId = $row['passengerId'];
                $passengerOrigin = $row['origin'];
                $passengerDestination = $row['destination'];
                $passengerBookingDate = $row['bookingDate'];
                $passengerCount = $row['passengercount'];
                $passengerAmount = $row['amount'];
                $passengerSerialNo = $row['serialNo'];

                    echo "Result: <input type = 'text' value ='$passengerName'/>";
                    echo "Result: <input type = 'text' value ='$passengerId'/>";
                    echo "Result: <input type = 'text' value ='$passengerOrigin'/>";
                    echo "Result: <input type = 'text' value ='$passengerDestination'/>";
                    echo "Result: <input type = 'text' value ='$passengerBookingDate'/>";
                    echo "Result: <input type = 'text' value ='$passengerCount'/>";
                    echo "Result: <input type = 'text' value ='$passengerAmount'/>";
                    echo "Result: <input type = 'text' value ='$passengerSerialNo'/>";

            }
        }
    }
    
?>

