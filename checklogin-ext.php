<?php
	session_start();

	include("dbconnect.php");

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$query = "SELECT * FROM user_details where `username`='$username' AND `password`='$password';";
	$res = mysqli_query($dbc, $query);
	$count = mysqli_num_rows($res);

	if($count > 0) {
		echo "Y";
		$query = "SELECT * FROM standings where `username`='$username';";
		$res = mysqli_query($dbc, $query);
		$res = mysqli_fetch_array($res);
		echo $res['levelscompleted'];
	}
	else {
		echo "N";
	}

?>