<?php
    $dbHost = "localhost";
    $dbName = "crud"; 
    $dbPassword = '';
    $dbUserName = 'root';

    $con = mysqli_connect($dbHost,$dbUserName,$dbPassword,$dbName);

    if($con->connect_error){
        die("connection failed");
    }

?>