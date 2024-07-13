<?php
require_once "lib/database.php";
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errorMsg = '';
        if (empty($_POST['name'])) {
            $errorMsg .= 'Please enter your name.<br />';
        }

        if (empty($_POST['email'])) {
            $errorMsg .= 'Please enter your valid email.<br />';
        }
        if (!empty($errorMsg)) {
            $errMsg = 'Please fix the following errors to proceed:<br />';
            $_SESSION['sessErrorMsg'] = $errMsg . $errorMsg;
            header("Location: index.php");
            exit(); // Make sure to call exit() after header() to stop further execution
        }
        $query = "select email from subscribers where email = '".$_POST['email']."'";
        $queryExecute = mysqli_query($conn, $query);
        if (!empty($queryExecute->num_rows)) {
            $errMsg = 'Please fix the following errors to proceed:<br />';
            $_SESSION['sessErrorMsg'] = $errMsg . 'You already have been subscribed for this newsletter.';
            header("Location: index.php");
            exit(); // Make sure to call exit() after header() to stop further execution
        }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $createdAt = date("Y-m-d H:i:s");

        // Prepare query
        $query = "INSERT INTO subscribers (name, email, created_at) VALUES ('$name','$email','$createdAt')";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $successMsg = "Congrats, You have successfully subscribed to the newsletter.";
            $_SESSION['sessSuccessMsg'] = $successMsg;
            header("Location: index.php");
            exit(); // Make sure to call exit() after header() to stop further execution
        } else {
            $errMsg = 'Please fix the following errors to proceed:<br />';
            $_SESSION['sessErrorMsg'] = $errMsg . 'Unable to execute the query.';
            header("Location: index.php");
            exit(); // Make sure to call exit() after header() to stop further execution
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
?>