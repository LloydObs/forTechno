<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>pasaheroes.com/signinsignup</title>
<link rel="stylesheet" href="signup.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
	
	
	<div class="left">
		<a href="main page signed in.html"><button>HOME</button></a>
        <div class="left_text">
			<div class="logo">
				<img src="logowhite.png" alt="Logo">
				<h1>PASAHEROES</h1>
				<h2>YOUR DREAM TRAVEL STARTS HERE</h2>
			</div>
		</div>
	</div>
	
	<div class="right">	
        <p> Edit your account </p>
		<div class="inputs">
			<form method="post">	
				<?php
				session_start();
				ob_start();
				
	$conn = mysqli_connect("localhost", "root","", "pasaheroesdb");
	if ($conn-> connect_error){
		die("Connection failed:". $conn-> connect_error);
	}
	$passengerPassword = $_SESSION["passengerPassword"];
	$sql = "SELECT passengerId, passengerName, phoneNumber, email, password from passengerinfo WHERE password = '$passengerPassword' LIMIT 1";
	$result = $conn-> query($sql);
	
	if($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			
			$passengerId = $row['passengerId'];
			$_SESSION["passengerId"] = $passengerId;
			$passengerName = $row['passengerName'];
			$phoneNumber = $row['phoneNumber'];
			$email = $row['email'];
			$password = $row['password'];
                                    
							
			
								echo '<br><label class="passNo">Passenger Number</label><br/>';
								echo '<i class="fa fa-id-card-o fa-lg fa-fw" aria-hidden="true"></i>';
								echo "<input type='text' value=' $passengerId' id = 'passNo' name = 'passNo' placeholder='Passenger Number'  required disabled>";

								echo '<br><label class="name">Full Name</label><br/>';
								echo '<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>';
								echo "<input type='text' value='$passengerName' id = 'fullName' name = 'fullName' placeholder='Full Name'  required>";

								echo '<br><label class="number">Phone Number</label><br/>';
								echo '<i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>';
								echo "<input type='text' value='$phoneNumber'  id = 'phoneNumber' name = 'phoneNumber' placeholder='Phone Number'  required>";

								echo '<br><label class="email">Email Address</label><br/>';
								echo '<i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>';
								echo "<input type='text' value='$email'  id = 'passengerEmail' name = 'passengerEmail' placeholder='Email Address'  required>";

								echo '<br><label class="password">Password</label><br/>';
								echo '<i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>';
								echo "<input type='text' value='$password' id = 'passengerPasword' name = 'passengerPassword' placeholder='Password'  required>";
		}
		echo "</table>";
	}
	else{
		echo " 0 result";
	}
	$conn-> close();
	
	?>
				
				<div class="input_buttons">
					<button type="submit" id = "Submit" name = "Submit" formaction = "updateAccount.php">Save changes </button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
