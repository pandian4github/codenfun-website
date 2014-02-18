<?php
	include("dbconnect.php");
	$username = $_REQUEST['username'];
	$level = $_REQUEST['level'];
	$timetocomplete = $_REQUEST['timetocomplete'];
	$attempts = $_REQUEST['attempts'];
	$executiontime = $_REQUEST['executiontime'];
	$programsize = $_REQUEST['programsize'];

	//echo "hi";

	$query = "SELECT * FROM log where `username`='$username' AND `level`=$level;";
	//echo $query;
	$res = mysqli_query($dbc, $query) or die("Error retrieving from log database");
	$count = mysqli_num_rows($res);

	if($count == 0) {
		
		echo "Y";

		$query = "INSERT INTO log(`username`, `level`, `timetocomplete`, `attempts`, `executiontime`, `programsize`) values('$username', $level, $timetocomplete, $attempts, $executiontime, $programsize);";
		$res = mysqli_query($dbc, $query) or die("Error inserting into log database");

		echo $query;

		$query = "SELECT username, AVG(timetocomplete), AVG(executiontime), AVG(programsize) from log GROUP BY username;";
		$res = mysqli_query($dbc, $query) or die("Error retrieving from log database");

		while($row = mysqli_fetch_array($res)) {
			$user = $row['username'];
			$avgexecutiontime = $row['AVG(executiontime)'];
			$avgprogramsize = $row['AVG(programsize)'];
			$avgtimetocomplete = $row['AVG(timetocomplete)'];


			$query2 = "SELECT * from log where `username`='$user';";
			$res2 = mysqli_query($dbc, $query2) or die("Error retrieving from log database");
			$levelscompleted = mysqli_num_rows($res2);

			$query2 = "DELETE FROM standings where `username`='$user';";
			echo $query2;
			$res2 = mysqli_query($dbc, $query2) or die("Error retrieving from log database");

			$query2 = "INSERT INTO standings(`username`, `levelscompleted`, `avgexecutiontime`, `avgprogramsize`, `avgtimetocomplete`) values('$username', $levelscompleted, $avgexecutiontime, $avgprogramsize, $avgtimetocomplete);";
			echo $query2;
			$res2 = mysqli_query($dbc, $query2) or die("Error retrieving from log database");

		}

		echo "Y";
	}
?>