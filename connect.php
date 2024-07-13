<?php
require_once "lib/database.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$errorMsg = '';
	if (empty($_POST['first_name'])) {
		$errorMsg .= 'Please enter your first name.<br />';
	}

	if (empty($_POST['last_name'])) {
		$errorMsg .= 'Please enter your last name.<br />';
	}

	if (empty($_POST['email'])) {
		$errorMsg .= 'Please enter your valid email.<br />';
	}

	if (empty($_POST['mobile'])) {
		$errorMsg .= 'Please enter your valid mobile.<br />';
	}
	if (!empty($errorMsg)) {
		$errMsg = 'Please fix the following errors to proceed:<br />';
		$_SESSION['sessErrorMsg'] = $errMsg . $errorMsg;
		header("Location: contact.php");
		exit(); // Make sure to call exit() after header() to stop further execution
	}

	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$query = !empty($_POST['query']) ? $_POST['query'] : '';
	$status = 'Pending';
	$createdAt = date("Y-m-d H:i:s");

	// Prepare query
	$query = "INSERT INTO contact_us (first_name, last_name, email, mobile, query, status, created_at) VALUES ('$firstName','$lastNamer','$email','$mobile','$query','$status','$createdAt')";
	$query_run = mysqli_query($conn, $query);
	if ($query_run) {
		$successMsg = "Congratulations! Your query has been successfully submitted with us. Someone from our team will definitely connect with you within 24 hours.";
		$_SESSION['sessSuccessMsg'] = $successMsg;
		header("Location: contact.php");
		exit(); // Make sure to call exit() after header() to stop further execution
	} else {
		$errMsg = 'Please fix the following errors to proceed:<br />';
		$_SESSION['sessErrorMsg'] = $errMsg . 'Unable to execute the query.';
		header("Location: contact.php");
		exit(); // Make sure to call exit() after header() to stop further execution
	}

	// Close statement and connection
	$stmt->close();
	$conn->close();
}

?>