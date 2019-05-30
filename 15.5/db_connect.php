<?php
    $server = "localhost";
    $un = "root";
    $password = "";
    $dbname =  "stickies";
    
    $connection = new mysqli($server, $un, $password, $dbname);

    if($connection ->connect_error)
    {
        die("Connection failed: " . $connection->connect_error);
    }
    //print("Connected to database");
    
    
?>