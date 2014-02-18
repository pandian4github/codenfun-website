<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Code N Fun</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="common.css">
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
			<center><h3>Create an account</h3></center>
			<br/>
			
			<form class="form-horizontal" id="entryform" method="post" action="dosignup.php">

				<div class="control-group">
					<label class="control-label" for="name">Name</label>
					<div class="controls">
						<input type="textbox" id="name" name="name"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="username">Choose an username</label>
					<div class="controls">
						<input type="textbox" id="username" name="username"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="password">Choose a password</label>
					<div class="controls">
						<input type="password" id="password" name="password"/>
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
						<input type="textbox" id="email" name="email"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="name">Phone</label>
					<div class="controls">
						<input type="textbox" id="phone" name="phone"/>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-primary" name="submit">Signup
					</div>
				</div>

			</form>

		</div>
	</center>
</body>
</html>
