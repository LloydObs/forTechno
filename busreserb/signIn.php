<?php
    require "DBconnection.php";
    session_start();
    
    if(isset($_POST['passengerEmail']) && isset($_POST['passengerPassword'])){
        $passengeremail = $_SESSION['passengerEmail'];
        
        $passengerEmail = $_POST['passengerEmail'];
        $passengerPassword = $_POST['passengerPassword'];

        $query = ("select email, password from passengerinfo where email='$passengerEmail' and password = '$passengerPassword'");
        $result = mysqli_query($connectDb, $query);
        if(mysqli_num_rows($result) === 1){
            $_SESSION["passengerPassword"] = $_POST['passengerPassword'];    
            header("Location: main-page-signed-in.html"); 
            }else{
                header("Location: signin-user.html");
            }
        



            
        
        
    }









?>