<?php
    require_once "config.php";
    
    // Create connection
    //print_r(array(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME));
    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";

    // Close the connection when done
    //$conn->close();
?>
