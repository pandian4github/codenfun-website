<?php
	
	include("dbconnect.php");
	$query = "SELECT * FROM standings ORDER BY avgtimetocomplete ASC;";
	//echo $query;
	$res = mysqli_query($dbc, $query);
?>	
	<table class="table-bordered" id="ranktable">
		<thead>
			<tr>
				<th>Sl No.</th>
				<th>Name</th>
				<th>Username</th>
				<th>Average time taken (sec)</th>
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
				echo "<td>".$row['avgtimetocomplete']."</td>";
				echo "</tr>";
				$i++;
			}
		?>
		</tbody>
	</table>
