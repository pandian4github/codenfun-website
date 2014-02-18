<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Code N Fun</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>

<body>
	<?php
		include("sitelayout.php");
	?>
	<br/>
	
		<div class="row-fluid" id="main-content">

			<center><h3>Welcome !</h3></center>
			<p>
				<p>
					Hello everyone, 
				</p>
				
				<p>
					Welcome to the online arena of CodeNFun. Indulge yourself into programming game and know where you stand. Race against time and be the fastest person to clear a level. Learn the basics of programming and data structures and have fun at the same time. 
				</p>

				<p>
					You will be able to see your current ranking across all the programmers in the world. You can also see the ranking based on specific programming metrics.
				</p>

				<p>
					Start coding. Play the game. Have fun. <b>Happy coding !</b>
				</p>

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
		if(isset($_SESSION['passchanged'])) {
			if($_SESSION['passchanged'] == 1) {
				$_SESSION['passchanged'] = 0;
				echo "<script type='text/javascript'> alert('Password changed successfully.'); </script>";	
			}
		}
		if(isset($_SESSION['loggedout'])) {
			if($_SESSION['loggedout'] == 1) {
				$_SESSION['loggedout'] = 0;
				echo "<script type='text/javascript'> alert('Logged out successfully'); </script>";
			}
		}
		if(isset($_SESSION['updatesuccess'])) {
			if($_SESSION['updatesuccess'] == 1) {
				$_SESSION['updatesuccess'] = 0;
				echo "<script type='text/javascript'> alert('Profile successfully'); </script>";
			}
		}
	?>
</body>
</html>