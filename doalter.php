<?php
	session_start();

	include("dbconnect.php");

	$name = $_REQUEST['name'];
	$username = $_SESSION['username'];
	$gender = $_REQUEST['gender'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];

	$query = "UPDATE user_details set `name`='$name', `gender`='$gender', `email`='$email', `phone`='$phone' where `username`='$username';";
	$res = mysqli_query($dbc, $query) or die("Error in updating database");

	$_SESSION['updatesuccess'] = 1;
	header("location:index.php");
?>