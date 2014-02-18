<?php
	session_start();

	include("dbconnect.php");

	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$gender = $_REQUEST['gender'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];

	$query = "INSERT INTO user_details(`name`, `username`, `password`, `gender`, `email`, `phone`) values('$name', '$username' ,'$password', '$gender', '$email', '$phone');";
	echo $query;
	$res = mysqli_query($dbc, $query) or die("Error in inserting into database");

	$_SESSION['signupsuccess'] = 1;
	header("location:index.php");
?>