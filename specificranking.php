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
	$(document).ready(function() {
		<?php
			$level = $_REQUEST['level'];
		?>

	});
	</script>
	<script type="text/javascript">

		function loadranking(e) {
	//		alert(e+".php");
			var level = <?php echo $level; ?>;
			$("#ranklist").load(e+".php?level="+level);
		}

		$(document).ready(function() {
			var level = <?php echo $level; ?>;
			$("#ranklist").load("timetocomplete-specific.php?level="+level);
		});
	</script>

</head>

<body>
	<?php
		include("sitelayout.php");
		$level = $_REQUEST['level'];
	?>
	<br/>
	<center>
		<div class="row-fluid" id="main-content">

			<center><h3>Ranking for level <?php echo $level; ?></h3></center>
			<div class="row-fluid">
				<div class="span3" id="verticaltabs">
					<center><h4>Specific ranking</h4></center>

					<div class="btn-group-vertical">
						<button type="button" id="timetocomplete-specific" onclick="loadranking(this.id)" class="btn btn-danger btn-block">&nbsp Time to complete &nbsp </button><br/>
						<button type="button" id="programsize-specific" onclick="loadranking(this.id)" class="btn btn-info btn-block">Program size</button><br/>
						<button type="button" id="executiontime-specific" onclick="loadranking(this.id)" class="btn btn-danger btn-block">Execution time</button><br/>
					</div>
					<br/>
					<br/>
					<form action="specificranking.php" method="post">
						Change level : <input type="textbox" name="level" id="leveltextbox"/> 
						<button class="btn btn-success" type="submit">Show</button>
					</form>
						
					<hr>
					<center><h4>Overall ranking</h4></center>
					
					<a class="btn btn-success" href="rankings.php">Overall</a>

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
