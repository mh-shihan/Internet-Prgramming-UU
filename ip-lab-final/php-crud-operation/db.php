<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ip_lab_final";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if($connection->connect_error){
        die( "Connection failed: " . $connection->connect_error); 
    }

    // Create database
    $createTable = "
    CREATE TABLE IF NOT EXISTS student  (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        stu_id VARCHAR(100) NOT NULL UNIQUE
    )";

    $connection->query($createTable);

?>
