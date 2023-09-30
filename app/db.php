<?php

    $host = 'db';
    $user = 'app_financas';
    $pass = 'admin';
    $database = 'financas';  
    // establishing connection
    $conn = mysqli_connect($host,$user,$pass,$database);   
    // for displaying an error msg in case the connection is not established
    if (!$conn) {                                             
        die("Connection failed: " . mysqli_connect_error());     
    }
?>