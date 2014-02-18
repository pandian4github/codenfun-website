
<!--
	The default template including the side links and title bars etc.
-->

<div class="row-fluid" id="toprow">
	<div class="span3"><br/><center><img width="250" height="150" src="images/dept.png"></center></div>
	<div class="span6" id="centertitle"><br/><center><h1>Code N Fun</h1></center></div>
	<div class="span3"><br/><center><img width="250" height="150" src="images/ceg3.png" id="ceg"></center></div>
</div>
<br/>

<br/>
<div class="navbar navbar-inverse">  
  <div class="navbar-inner">  
    <div class="container" id="navbar">  
    <!--navigation does here-->  
		<ul class="nav">  
  			<li class="active">  
    			<a class="brand" href="#">CodeNFun</a>  
  			</li>  
  			<li><a href="index.php">Home</a></li>  
  			<li><a href="aboutgame.php">About the game</a></li>  
  			<li><a href="gallery.php">Gallery</a></li>  
  			<li><a href="aboutus.php">About us</a></li>  
  			<li><a href="rankings.php">View rankings</a></li>  
  			<li><a href="contactus.php">Contact us</a></li> 
  			
  			<li class="dropdown">  
    			<a href="#"  
          			class="dropdown-toggle"  
          			data-toggle="dropdown">  
          			Account  
          			<b class="caret"></b>  
 	  			</a>  
    			<ul class="dropdown-menu">  
    				<?php
    					if(isset($_SESSION['username'])) {
    						echo "<li><a href='editprofile.php'>Edit profile</a></li>  
  								<li><a href='changepass.php'>Change password</a></li>
  								<li><a href='logout.php'>Signout</a></li>";
    					}
    					else {
    						echo "<li><a href='signup.php'>Create an account</a></li>  
  								<li><a href='login.php'>Sign in</a></li>";
    					}
    				?>
    			</ul> 	 
		   	</li>
		</ul>  
  </div>  
</div>   
