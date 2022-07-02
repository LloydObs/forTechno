<?php
    define('serverDatabase','localhost');
    define('serverName','root');
    define('serverPassword','');
    define('databaseName','alcalasavesdb');

    $connectDb = mysqli_connect(serverDatabase, serverName, serverPassword, databaseName);

    if($connectDb == false){
        die('Connection Failed'.$connectDb->connect_error);
    }

    // gooodluck future lloyd sa pagaayos neto dahil atm tinatamad ako amg code at kumokpya lang ako so gl :<<
?>
