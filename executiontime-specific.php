<?php
	
	include("dbconnect.php");
	$level = $_REQUEST['level'];
	$query = "SELECT * FROM log where `level`=$level ORDER BY executiontime ASC;";
	//echo $query;
	$res = mysqli_query($dbc, $query);
?>	
	<table class="table-bordered" id="ranktable">
		<thead>
			<tr>
				<th>Sl No.</th>
				<th>Name</th>
				<th>Username</th>
				<th>Execution time (sec)</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$i = 1;
			while($row=mysqli_fetch_array($res)) {
				echo "<tr>";
				echo "<td>".$i."</td>";
				$query2 = "SELECT name from user_details where `username`='".$row['username']."';";
				$res2 = mysqli_query($dbc, $query2);
				$res2 = mysqli_fetch_array($res2);
				echo "<td>".$res2['name']."</td>";
				echo "<td>".$row['username']."</td>";
				echo "<td>".$row['executiontime']."</td>";
				echo "</tr>";
				$i++;
			}
		?>
		</tbody>
	</table>
