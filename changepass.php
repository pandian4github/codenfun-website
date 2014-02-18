<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		header("location:login.php");
	}
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
			<center><h3>Change password</h3></center>
			<br/>
			
			<form class="form-horizontal" id="entryform" method="post" action="dochangepass.php">

				<div class="control-group">
					<label class="control-label" for="oldpass">Current password</label>
					<div class="controls">
						<input type="password" id="oldpass" name="oldpass"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="newpass">New password</label>
					<div class="controls">
						<input type="password" id="newpass" name="newpass"/>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-primary" name="submit">Submit
					</div>
				</div>

			</form>

		<?php
		if(isset($_SESSION['oldpasswrong'])) {
			if($_SESSION['oldpasswrong'] == 1) {
				$_SESSION['oldpasswrong'] = 0;
					echo "<script type='text/javascript'> alert('Incorrect current password. Try again.'); </script>";
			}
		}
		if(isset($_SESSION['loginfailure'])) {
			if($_SESSION['loginfailure'] == 1) {
				$_SESSION['loginfailure'] = 0;
				echo "<script type='text/javascript'> alert('Invalid username-password combination. Try again.'); </script>";
			}
		}
		?>

		</div>
	</center>
	<?php
		include("footer.php");
	?>
</body>
</html>
