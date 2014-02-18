<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Code N Fun</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="contactus.css">
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
			<center><h3> Contact us </h3></center>
			<br/>
			<form class="form-horizontal" action="sendmessage.php" id="contactusform" method="post">

				<div class="control-group">
					<label class="control-label" for="name">Your name</label>
					<div class="controls">
						<input type="textbox" id="name" name="name" placeholder="Your Name"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="email">Email id</label>
					<div class="controls">
						<input type="textbox" id="email" name="email" placeholder="Your Email id"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="email">Subject</label>
					<div class="controls">
						<input type="textbox" id="subject" name="subject" placeholder="Subject of the message"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="email">Message</label>
					<div class="controls">
						<textarea class="span20" id="message" name="message" rows="10" placeholder="Enter your message"></textarea>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-primary" name="submit">Send message
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
