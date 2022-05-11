<?php 
    require "DBconnection.php";
    $fullName = $_POST['fullName'];
    $passengerEmail = $_POST['passengerEmail'];
    $passengerPassword = $_POST['passengerPassword'];
    $number = $_POST['number'];
    $passengerID = substr(uniqid(rand(), true), 6, 6);
    
    $query= $connectDb->prepare("INSERT INTO passengerinfo (`passengerName`, `phoneNumber`, `email`, `password`, `passengerId`) 
    values(?, ?, ?, ?, ?)");
    $query->bind_param("ssssi",$_POST['fullName'], $_POST['number'], $_POST['passengerEmail'], $_POST['passengerPassword'], $passengerID);
    $result = $query->execute();
    
    if (!$result){
      die('could not insert into program '.$connectDb->error); //pwede gawinggg message box if possible
    }else{
      header("Location: signin-user.html");
    }
    die();
    
    
    
   
    
    



?>