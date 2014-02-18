<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Code N Fun</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="aboutgame.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>

<body>
	<?php
		include("sitelayout.php");
	?>
	<br/>
	
		<div class="row-fluid" id="main-content">

			<center><h3>About game</h3></center>
			
			<p>
				CodeNFun is a game developed with the intent of teaching the basic programming concepts and data structures to students.
			</p>
		
			<p> 
				The player will the play the role of the game's protagonist Nefario and help him to overthrow a plot to bomb the city. Through the game the player will learn about the various programming concepts and slowly build on to learn about data structures.
			</p>

			<p>
				Through the levels of the game the player will encounter different hurdles. Each hurdle is associated with a programming concept. The player will be learning the programming concept based on which the solution for the hurdle can be obtained. The player's performance will be recorded and he will rated against the performance of other players. By playing this game, you will be able to learn the basic data structures and evaluate yourself.
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
	?>
</body>
</html>
