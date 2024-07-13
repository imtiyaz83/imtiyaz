<?php
    session_start();
    $servername = "localhost"; // Replace with your server name
    $username = "root"; // Replace with your database username # imtiyaazkhan
    $password = "ikhan"; // Replace with your database password # n5MkKpN6KhPR
    $dbname = "ikhan"; // Replace with your database name # imtiyaazkhan

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";

    // Close the connection when done
    //$conn->close();
?>
