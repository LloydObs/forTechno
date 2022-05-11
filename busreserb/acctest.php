<?php
	session_start();
	require "DBconnection.php";
	if(isset($_POST['passengerEmail'])){
		$passengeremail = $_SESSION['passengerEmail'];
		$query = "SELECT * from passengerinfo where passengerEmail = '$_SESSION[passengerEmail]' ";
		$query_run = mysqli_query($connectDb, $query);
		$row = mysqli_fetch_array($query_run);
	}

?>


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
			<form action = "updateAccount.php" method="post">	

				<br><label class="passNo">Passenger Number</label><br/>
				<i class="fa fa-id-card-o fa-lg fa-fw" aria-hidden="true"></i>
				<input type="text" id = "passNo" name = "passNo" placeholder="Passenger Number" values = "<?php echo $row['passengerId']?>"  required>

                <br><label class="name">Full Name</label><br/>
				<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
				<input type="text" id = "fullName" name = "fullName" placeholder="Full Name"  values = "<?php echo $row['passengerName']?>" required>
		
				<br><label class="number">Phone Number</label><br/>
				<i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>
				<input type="text"  id = "phoneNumber" name = "phoneNumber" placeholder="Phone Number"  values = "<?php echo $row['phoneNumber']?>" required>

				<br><label class="email">Email Address</label><br/>
				<i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
				<input type="text"  id = "passengerEmail" name = "passengerEmail" placeholder="Email Address" values = "<?php echo $row['email']?>" required>
		
				<br><label class="password">Password</label><br/>
				<i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
				<input type="password" id = "passengerPasword" name = "passengerPassword" placeholder="Password" values = "<?php echo $row['password']?>"  required>
				
				<div class="input_buttons">
					<button type="submit" id = "Submit" name = "Submit">Save changes </button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>