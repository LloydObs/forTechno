<?php
    require "dbConnection.php";
    session_start();
    
    if(isset($_POST['adminName']) && isset($_POST['adminPassword'])){
        
        $adminUsername = $_POST['adminName'];
        $adminPassword = $_POST['adminPassword'];

        $query = ("select * from admininfo where adminUsername='".$adminUsername."' and adminPassword = '".$adminPassword."' limit 1");
        $result = mysqli_query($connectDb, $query);
        if(mysqli_num_rows($result) === 1){    
            echo "yey gumagana"; 
            }else{
            echo "haha bobo";
            }
            
        
        
    }
?> 