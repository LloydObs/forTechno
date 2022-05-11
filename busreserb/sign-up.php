<?php 
    require "DBconnection.php";

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
// -------Form Validation of Full Name ------
		if (!empty($_POST['fullName'])) {
		
			$fullname = htmlspecialchars($_POST['fullname']);
			if (!preg_match ("/^[a-zA-z]*$/", $fullname) ) {  
    			$ErrMsg = "Only alphabets and whitespace are allowed.";  
             	echo $ErrMsg;  
				
			} else {  
    			echo $fullName;  
			}
		} else{
			$errMsg = "Error! You didn't enter your full name.";  
             echo $errMsg; 
		}
			
// -------- Form Validation of Email --------
		if (!empty($_POST['passengerEmail'])) {

			$passengerEmail = trim(htmlspecialchars($_POST['passengerEmail']));
			$passengerEmail = filter_var($passengerEmail, FILTER_VALIDATE_EMAIL);

			if ($passengerEmail === false) {
				exit('Invalid Email');
				
			} 
			} else{
			$errMsg = "Error! You didn't enter an email.";  
             echo $errMsg; 
		}
		
//-------- Form Validation of Password -----
			if (!empty($_POST['passengerPassword'])) {
			$passengerPassword = strlen($_POST['passengerPassword']);
			$length = strlen ($passengerPassword);  
  
			if ($length > 16) {  
    			$ErrMsg = "Maximum Password length should be 16 characters.";  
            echo $ErrMsg;  
			} else {  
				echo $passengerPassword;  
			} 
			} else{
			$errMsg = "Error! You didn't enter a password.";  
             echo $errMsg; 
		}
			
//-------- Form Validation of Number -------
		if (!empty($_POST['number'])) {
	
			$number = $_POST['number'];
			$number = filter_var($number, FILTER_VALIDATE_INT);

			if ($number === false) {
				exit('Invalid Integer');
			}

	} else{
			$errMsg = "Error! You didn't enter your number.";  
             echo $errMsg; 
		}
	} else {

	exit('Invalid Request');

}
	

	$query= $connectDb->prepare("insert into passengerinfo (passengerName, phoneNumber, email, password) 
	values(?, ?, ?, ?)");
	$query->bind_param("ssss",$_POST['fullName'], $_POST['number'], $_POST['passengerEmail'], $_POST['passengerPassword']);
	$result = $query->execute();
	if (!$result){
		die('could not insert into program '.$connectDb->error);
	}else{
  	header("Location: main page.html");
  	die();
	}
    
   
    
    



?>