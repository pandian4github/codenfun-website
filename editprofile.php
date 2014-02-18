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
	<link rel="stylesheet" type="text/css" href="editprofile.css">
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
			
			<center><h3>Edit profile</h3></center>
			
			
			<?php
				include("dbconnect.php");
				$username = $_SESSION['username'];
				$query = "SELECT * FROM user_details where `username`='$username';";
				$res = mysqli_query($dbc, $query);
				$res = mysqli_fetch_array($res);

			?>

			<form class="form-horizontal" id="entryform" method="post" action="doalter.php">

				<div class="control-group">
					<label class="control-label" for="name">Name</label>
					<div class="controls">
						<input type="textbox" id="name" name="name" value="<?php echo $res['name']; ?>"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="username">Choose an username</label>
					<div class="controls">
						<input type="textbox" id="username" readonly="true" name="username" value="<?php echo $res['username']; ?>"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="gender">Gender</label>
					<div class="controls">
						<select name="gender" id="gender" class="span3">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
				</div>
		
				<div class="control-group">
					<label class="control-label" for="name">Email id</label>
					<div class="controls">
						<input type="textbox" id="email" name="email" value="<?php echo $res['email']; ?>"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="name">Phone</label>
					<div class="controls">
						<input type="textbox" id="phone" name="phone" value="<?php echo $res['phone']; ?>"/>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-primary" name="submit">Submit
					</div>
				</div>

			</form>

		</div>
	</center>
	<?php
		include("footer.php");
	?>
</body>
</html>
