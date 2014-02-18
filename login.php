<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Code N Fun</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>

<body>
	<?php
		include("sitelayout.php");
	?>
	<br/>
	<center>
		<div class="row-fluid" id="main-content">
			<br/>
			<center><h3>Login</h3></center>
			<br/>
			
			<form class="form-horizontal" id="entryform" method="post" action="checklogin.php">

				<div class="control-group">
					<label class="control-label" for="username">Username</label>
					<div class="controls">
						<input type="textbox" id="username" name="username"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="password">Password</label>
					<div class="controls">
						<input type="password" id="password" name="password"/>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-primary" name="submit">Login
					</div>
				</div>

			</form>

		<?php
		if(isset($_SESSION['loginfailure'])) {
			if($_SESSION['loginfailure'] == 1) {
				$_SESSION['loginfailure'] = 0;
				echo "<script type='text/javascript'> alert('Invalid username-password combination. Try again.'); </script>";
			}
		}
		?>

		</div>
	</center>
</body>
</html>
