<!DOCTYPE html>
<html>
	<head><title>TaxiBooking</title></head>
	<link rel="stylesheet" href="cssWelcomeHomePage.css">
	<body class="body">	
		<div class="page1">
			<div class="heading">
				<div class="left-header">
					<a class="header-anchor" id="site-name" href="welcomeHomePage.php">Takaso</a>
				</div>
				<div class="middle-header">
					<a class="header-anchor" href="../welcomeAboutUs/welcomeAboutUs.php">About us</a>
					<a class="header-anchor" href="../welcomeContact/welcomeContact.php">Contact</a>
				</div>
				<div class="right-header">
					<a class="header-anchor" href="">Welcome 
					<?php 
						session_start();
						$username=$_SESSION['login_user'];
						echo("$username");
					?>
					</a>
				</div>
				<div class="dropdown">
					<button class="dropbtn">More</button>
					<div class="dropdown-content">
						<a href="../viewMyRides/viewMyRides.php">View my rides</a>
						<a href="../homePage/homePage.php">Logout</a>
					</div>
				</div>
			</div>
			<div class="header">
				
				<div class="mySlides fade">
					<img src="img1.jpg" class="cab3-img">
				</div>
				<div class="mySlides fade">
					<img src="img2.jpg" class="cab3-img">
				</div>
				<div class="mySlides fade">
					<img src="img3.jpg" class="cab3-img">
				</div>
				
				<div class="overlap">
					<h1 class="header-title">With us,</h1>
					<h1 class="header-subtitle">Nowhere is far!</h1>
				</div>
			</div>
			
			<div class="btn">
				<a class="button btn" href="../bookingPage/bookingPage.php">BOOK NOW</a>
			</div>
		</div>
		<div class="more">
			<h3>KNOW MORE ABOUT US</h3>
		</div>
		<div class="header-down-arrow">
			<img src="downarrow.png" width="50">
		</div>
		
		<div style="text-align: center; width: 100%; position: absolute; z-index: 10; top: 1500px;">JUST LIKE THAT</div>
		
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	
		<video autoplay loop muted style="position: absolute; top: 700px; left: 220px;" width="70%" controls>
			<source src="NycTraffic.mp4" type="video/mp4">
			Your browser does not support HTML5 video.
		</video>
		<div class="video-text"><h1 style="font-size: 40px;">Helping you move the world</h1></div>
		
		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}    
			  slides[slideIndex-1].style.display = "block";  
			  setTimeout(showSlides, 2000); // Change image every 2 seconds
			}

			// When the user scrolls down 100px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
				document.getElementById("myBtn").style.display = "block";
			  } 
			  else {
				document.getElementById("myBtn").style.display = "none";
			  }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			  document.documentElement.scrollTop = 0; 
			}

			
		</script>
	</body>
</html>