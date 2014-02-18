<?php
	session_start();

	include("dbconnect.php");

	$username = $_SESSION['username'];
	$oldpass = $_REQUEST['oldpass'];
	$newpass = $_REQUEST['newpass'];

	$query = "SELECT * FROM user_details where `username`='$username' AND `password`='$oldpass';";
	$res = mysqli_query($dbc, $query);
	$count = mysqli_num_rows($res);

	if($count > 0) {
		$query = "UPDATE user_details set `password`='$newpass' where `username`='$username';";
		$res = mysqli_query($dbc, $query) or die("Error while changing password");
		$_SESSION['passchanged'] = 1;
		header("location:index.php");
	}
	else {
		$_SESSION['oldpasswrong'] = 1;
		header("location:changepass.php");
	}

?>