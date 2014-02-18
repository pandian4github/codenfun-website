<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Code N Fun</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="rankings.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">

		function loadranking(e) {
	//		alert(e+".php");
			$("#ranklist").load(e+".php");
		}

		$(document).ready(function() {
			$("#ranklist").load("nooflevels-overall.php");
		});
	</script>

</head>

<body>
	<?php
		include("sitelayout.php");
	?>
	<br/>
	<center>
		<div class="row-fluid" id="main-content">

			<center><h3>Ranking</h3></center>
			<div class="row-fluid">
				<div class="span3" id="verticaltabs">
					<center><h4>Overall ranking</h4></center>

					<div class="btn-group-vertical">
						<button type="button" id="nooflevels-overall" onclick="loadranking(this.id)" class="btn btn-info btn-block">&nbsp Number of levels &nbsp</button><br/>
						<button type="button" id="timetocomplete-overall" onclick="loadranking(this.id)" class="btn btn-danger btn-block">Time to complete</button><br/>
						<button type="button" id="programsize-overall" onclick="loadranking(this.id)" class="btn btn-info btn-block">Program size</button><br/>
						<button type="button" id="executiontime-overall" onclick="loadranking(this.id)" class="btn btn-danger btn-block">Execution time</button><br/>
					</div>
					<br/>
					<br/>
						
					<hr>
					<center><h4>Specific level ranking</h4></center>
					
					<form class="form-horizontal" method="post" action="specificranking.php">
						Level : <input type="textbox" id="leveltextbox" width="5" name="level"/>
						<button type="submit" class="btn btn-success" >Specific level</button>
					</form>

				</div>
				<div class="span9" id="ranklist">
				</div>
			</div>

		</div>
	</center>

	<?php
		include("footer.php");
	?>
	<?php
		if(isset($_SESSION['signupsuccess'])) {
			if($_SESSION['signupsuccess'] == 1) {
				$_SESSION['signupsuccess'] = 0;
				echo "<script type='text/javascript'> alert('Thanks for signing up. You may now login.'); </script>";
			}
		}
	?>
</body>
</html>
