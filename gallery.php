<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Code N Fun</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="gallery.css">
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

			<center><h3>Gallery</h3></center>

			<div id="myCarousel" class="carousel slide">  
  			<!-- Carousel items -->  
  				<div class="carousel-inner">  
	    			<div class="active item"><img src="images/gal1.png"/></div>  
    				<div class="item"><img src="images/gal2.png"/></div>  
  				</div>  
  			
	  			<!-- Carousel nav -->  
  				<a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>  
  				<a class="carousel-control right" href="#myCarousel" data-slide="next"></a>  
			</div> 

			<center><h4> Few snapshots of the game</h4></center> 
	
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
