<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "kaung@123";
    $dbname = "postlist";

    // Create connection
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    mysqli_select_db($conn, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";

    $sql = "CREATE TABLE `postlist`.`postlist` (
        id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255),
        content text NULL,
        is_published boolean,
        created_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        updated_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)
      ";
    if(mysqli_query($conn, $sql)) {
        echo "table created successfully";
    } else {
        //echo "somthing went wrong!";
    }
