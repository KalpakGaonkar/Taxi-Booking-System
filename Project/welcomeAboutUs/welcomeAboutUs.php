<!DOCTYPE html>
<html>
	<head><title>About us</title></head>
	<link rel = "stylesheet" type = "text/css" href = "cssWelcomeAboutUs.css" />
	<body>
		<div class="heading">
			<div class="left-header">
				<a class="header-anchor" id="site-name" href="../welcomeHomePage/welcomeHomePage.php">Takaso</a>
			</div>
			<div class="middle-header">
				<a class="header-anchor" id="aboutspecial" href="welcomeAboutUs.php">About us</a>
				<a class="header-anchor" href="../welcomeContact/welcomeContact.php">Contact</a>
			</div>
			<div class="right-header">Welcome 
				<?php 
					session_start();
					$username=$_SESSION['login_user'];
					echo("$username");
				?>
			</div>
			<div class="dropdown">
				<button class="dropbtn">More</button>
				<div class="dropdown-content">
					<a href="../welcomeHomePage/welcomeHomePage.php">Home</a>
					<a href="../viewMyRides/viewMyRides.php">View my rides</a>
					<a href="../homePage/homePage.php">Logout</a>
				</div>
			</div>
		</div>
		<div class="page">
			<img src="cab.jpg" class="img">
			<img src="founder.jpg" class="founder1">
			<img src="founder2.jpg" class="founder2">
			<div class="content">
				<h1 class="heading-about">             WHO ARE WE?</h1>
				<p class="about-us-content"><br><br><br>
				Takaso taxi services was originally found in 1987 in Tokyo, Japan. Within a span of 10 years, Takaso started providing transportation to 11 cities in Japan</p>
				<p class="about-us-content">In 2013, Rimono Takahari took this company global. Now on this present day, Takaso gives speed to 73 cities worldwide.</p> 
			</div>
		</div>
		
	</body>
</html>