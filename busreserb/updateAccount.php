<?php
    require "DBconnection.php";
    session_start();
    ob_start();

    if(isset($_POST['Submit'])){

        $passengerPassword = $_SESSION["passengerPassword"];

        $query = "UPDATE `passengerinfo` SET `passengerName`='$_POST[fullName]',`phoneNumber`='$_POST[phoneNumber]',`email`='$_POST[passengerEmail]', `password` = '$_POST[passengerPassword]' where `password`='$passengerPassword'";
        $query_run = mysqli_query($connectDb,$query);

        if(!$query_run){
            die('could not insert into program '.$connectDb->error);
                }else{
                    header("Location: signin-user.html");
                }
                die(); 

    }

    






?>