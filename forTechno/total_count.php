<?php

require_once 'db.php';

if(!$connectDb){
    die("Connection Failed");
}

$query = "SELECT * FROM employee";
$result = mysqli_query($connectDb, $query) or die(mysqli_error());
$rows = mysqli_num_rows($result);
echo $rows;
?>