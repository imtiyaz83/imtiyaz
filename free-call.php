<?php
require_once "lib/database.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$errorMsg = '';
	if (empty($_POST['service'])) {
		$errorMsg .= 'Please select a service from drop down.<br />';
	}

	if (empty($_POST['name'])) {
		$errorMsg .= 'Please enter your name.<br />';
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
		header("Location: free-call-with-imtiyaz.php");
		exit(); // Make sure to call exit() after header() to stop further execution
	}

	$service = $_POST['service'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$query = !empty($_POST['query']) ? $_POST['query'] : '';
	$status = 'Pending';
	$createdAt = date("Y-m-d H:i:s");

	// Prepare query
	$query = "INSERT INTO booking_calls (service_code, name, email, mobile, query, status, created_at) VALUES ('$service','$name','$email','$mobile','$query','$status','$createdAt')";
	$query_run = mysqli_query($conn, $query);
	if ($query_run) {
		$successMsg = "Congratulations! You have successfully booked your one-on-one call with us. Someone from our team will definitely connect with you within 24 hours.";
		$_SESSION['sessSuccessMsg'] = $successMsg;
		header("Location: free-call-with-imtiyaz.php");
		exit(); // Make sure to call exit() after header() to stop further execution
	} else {
		$errMsg = 'Please fix the following errors to proceed:<br />';
		$_SESSION['sessErrorMsg'] = $errMsg . 'Unable to execute the query.';
		header("Location: free-call-with-imtiyaz.php");
		exit(); // Make sure to call exit() after header() to stop further execution
	}

	// Close statement and connection
	$stmt->close();
	$conn->close();
}

?>