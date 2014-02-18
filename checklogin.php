<?php
	session_start();

	include("dbconnect.php");

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$query = "SELECT * FROM user_details where `username`='$username' AND `password`='$password';";
	$res = mysqli_query($dbc, $query);
	$count = mysqli_num_rows($res);

	if($count > 0) {
		$_SESSION['username'] = $username;
		header("location:index.php");
	}
	else {
		$_SESSION['loginsuccess'] = 0;
		$_SESSION['loginfailure'] = 1;
		header("location:login.php");
	}

?>