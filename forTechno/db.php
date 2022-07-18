<?php
	define('serverDatabase','localhost');
    define('serverName','root');
    define('serverPassword','');
    define('databaseName','payroll_s');

    $connectDb = mysqli_connect(serverDatabase, serverName, serverPassword, databaseName);

    if($connectDb == false){
        die('Connection Failed'.$connectDb->connect_error);
    }




?>