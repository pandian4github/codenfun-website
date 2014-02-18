<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Code N Fun</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="aboutus.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>

<body>
	<?php
		include("sitelayout.php");
	?>
	<br/>
		<div class="row-fluid" id="main-content">

			<center><h3>About us</h3></center>

			<p>
				This game is developed as the Final Year Project of Ashwin Karthi, Pandian and Satheeshsankar under the guidance of Professor Dr. T. V. Geetha, HOD Department of Computer Science, College of Engineering, Guindy, Anna University.
			</p>

			<div class="row-fluid">

				<div class="span6" id="members">
					<center>
						<h3>Members</h3>
						<b>N.Ashwin Karthi</b><br/>
						ashwinkarthi.n@gmail.com
						<br/><br/>
						<b>R.Pandian</b><br/>
						pandian4mail@gmail.com
						<br/><br/>
						<b>K.P.Satheesh Sankar</b><br/>
						kpsatheeshsankar@gmail.com
					</center>
				</div>

				<div class="span6" id="mentor">
					<center>
						<h3>Mentor</h3>
						<div class="row-fluid">
							<div class="span4">
								<img src="images/mentor.png"/>
							</div>

							<div class="span8">
								<br/>
								<b> Prof. Dr. T.V.Geetha</b>,
								<br/>Head of the Dept, 
								<br/>Computer Science and Engineering, 
								<br/>College of Engineering, Guindy.
								<br/><b>Mail</b> : tvgeedir@cs.annauniv.edu
								<br/>
							</div>

						</div>
					</center>
				</div>
			</div>

		</div>

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
