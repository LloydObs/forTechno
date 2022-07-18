<?php 
	require_once 'db.php';
	
	$id=$_GET['emp_id'];
	$query = "DELETE FROM employee WHERE emp_id=$id"; 
	$result = mysqli_query($connectDb, $query) or die ( mysql_error());
	header("Location: home_employee.php"); 
 ?>