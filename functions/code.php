<?php

session_start();
include('../config/dbcon.php');

if(isset($_POST['contact_us_btn'])) 
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$contact_us_query = " INSERT INTO contact_us (name, email, subject, message) VALUES ('$name','$email','$subject','$message') ";

	$contact_us_query_run = mysqli_query($con, $contact_us_query);

	if ($contact_us_query_run) 
	{
		$_SESSION['message'] = "Message Sent!!";
		header('Location: ../contact_us.php');
	}
	else
	{
		$_SESSION['message'] = "Something Went Wrong!!";
		header('Location: ../contact_us.php');
	}
}

?>