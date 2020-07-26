<!DOCTYPE html>
<html>
	<head><title>TaxiBooking</title></head>
	<script type="text/javascript" src="../phpFiles/loginToBooking.php"></script>
	<script>
		function jsfunction(){
			document.getElementById('modal-wrapper2').style.display='block';
		}
	</script>
	<?php
		session_start();
		$_SESSION['message'] = $_SESSION['login_user'] = "";
		$mysqli = new mysqli('localhost','root','','takaso');

		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			if($_POST['rpassword'] == $_POST['rconfirm_password']) {
				$fname = mysqli_real_escape_string($mysqli,$_POST['rfname']);
				$lname = mysqli_real_escape_string($mysqli,$_POST['rlname']);
				$full_name = $fname . " " . $lname; 
				$number = mysqli_real_escape_string($mysqli,$_POST['rnumber']);
				$email = mysqli_real_escape_string($mysqli,$_POST['remailID']);
				$username = mysqli_real_escape_string($mysqli,$_POST['rusername']);
				$password = mysqli_real_escape_string($mysqli,$_POST['rpassword']);
				$confirm_password = mysqli_real_escape_string($mysqli,$_POST['rconfirm_password']);
				
				$sql="INSERT INTO user (user_full_name, user_username, user_email_id, user_password, user_contact) VALUES ('$full_name','$username','$email','$password','$number')";		
				$add_result=mysqli_query($mysqli, $sql);

				if($add_result){
					$_SESSION['login_user']= $username;		
					$SESSION['message'] = "registration successful";
					header("location: ../welcomeHomePage/welcomeHomePage.php");
				}
				else{
					$_SESSION['message'] = "<div style='color: red;'>*User could not be added!</div>";
					echo "<script> window.onload = function() {
						jsfunction();
					}; </script>";
					echo "$username";
				}
			}
			else{
				$_SESSION['message']="<div style='color: red;'>*Passwords don't match</div>";
				echo "<script> window.onload = function() {
					jsfunction();
				}; </script>";
			}
		}
	?>
	<link rel="stylesheet" href="csshomePage.css">
	<body class="body">	
		<div class="page1">
			<div class="heading">
				<div class="left-header">
					<a class="header-anchor" id="site-name" href="homePage.php">Takaso</a>
				</div>
				<div class="middle-header">
					<a class="header-anchor" href="../aboutUs/aboutUs.php">About us</a>
					<a class="header-anchor" href="../contact/contact.php">Contact</a>
				</div>
				<div class="right-header">
					<a class="header-anchor" style="cursor: pointer;" id="loginbutton" onclick="document.getElementById('modal-wrapper').style.display='block';document.getElementById('modal-wrapper2').style.display='none';document.getElementById('modal-wrapper1').style.display='none';">Login</a>
					<a class="header-anchor" style="cursor: pointer;" onclick="document.getElementById('modal-wrapper2').style.display='block';document.getElementById('modal-wrapper1').style.display='none';document.getElementById('modal-wrapper').style.display='none';">Sign up</a>
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
				<a class="button btn" onclick="document.getElementById('modal-wrapper1').style.display='block';document.getElementById('modal-wrapper').style.display='none';document.getElementById('modal-wrapper2').style.display='none';">BOOK NOW</a>
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
		<div class="video-text"><h1 style="font-size:40px;">Helping you travel the world</h1></div>
		
		
		<div id="modal-wrapper" class="modal">
			<div class="login-box">
				<img src="avatar.png" class="avatar">
				<h1>Login Here</h1>
				<form method="post" action="../phpFiles/login.php"> 
					<p>Username</p>
					<input type="text" name="username" placeholder="Enter Username">
					<p>Password</p>
					<input type="password" name="password" placeholder="Enter Password">
					<input type="submit" name="submit" value="Login" style="background-color: green; padding: 5px; border-radius: 6px;">
					<a href="#">Forgot Password</a>    
				</form>
				<h4 id="invalidity" style="color: red; display: none;">Incorrect email ID or password</h4>
			</div>
		</div>

		<div id="modal-wrapper1" class="modal">
			<div class="login-box">
				<img src="avatar.png" class="avatar">
				<h1>Login Here</h1>
				<form method="post" action="../phpFiles/loginToBooking.php"> 
					<p>Username</p>
					<input type="text" name="username" placeholder="Enter Username" required>
					<p>Password</p>
					<input type="password" name="password" placeholder="Enter Password" required>
					<input type="submit" name="submit" value="Login" style="background-color: green; padding: 5px; border-radius: 6px;">
					<a href="#">Forgot Password</a>    
				</form>
				<h4 id="invalidity" style="color: red; display: none;">Incorrect email ID or password</h4>
			</div>
		</div>
		
		<div id="modal-wrapper2" class="modal2">
			<div class="login-box2">
				<img src="avatar.png" class="avatar2">
				<h1 id="Signup">Sign up Here</h1>
				<form name="registration" method="post" action="">
					<div><?= $_SESSION['message'] ?></div>
					<p>Full Name</p>
					<input pattern="[A-Za-z]+" type="text" name="rfname" id="first" placeholder="First Name" required><input pattern="[A-Za-z]+" type="text" name="rlname" id="last" placeholder="Last Name" required>
					<p>Phone Number</p>
					<input pattern="[0-9]+" type="text" name="rnumber" placeholder="Enter Phone No" required>
					<p>Email ID</p>
					<input pattern="[A-Za-z]+" type="text" name="remailID" placeholder="Enter email ID" required>
					<p>Username</p>
					<input pattern="[a-z]+" type="text" name="rusername" placeholder="Enter Username" required>
					<p>Password</p>
					<input pattern="[A-Za-z0-9]+" type="password" name="rpassword" placeholder="Enter Password" required>
					<p>Confirm Password</p>
					<input pattern="[A-Za-z0-9]+" type="password" name="rconfirm_password" placeholder="Re-enter Password" required>
					<input type="submit" name="rsubmit_btn" value="Sign up" style="background-color: green; padding: 5px; border-radius: 6px;">
					<a href="#">Forgot Password</a>
				</form>
			</div>
		</div>
		
		<script>
			var modal = document.getElementById('modal-wrapper');
			var modal1 = document.getElementById('modal-wrapper1');
			var modal2 = document.getElementById('modal-wrapper2');
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
				else if(event.target == modal2) {
					modal1.style.display = "none";
				}
				else if(event.target == modal2) {
					modal2.style.display = "none";
				}
			}
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
			
			function showHint(str) {
			    if (str.length == 0) {
			        document.getElementById("txtHint").innerHTML = "";
			        return;
			    } else {
			        var xmlhttp = new XMLHttpRequest();
			        xmlhttp.onreadystatechange = function() {
			            if (this.readyState == 4 && this.status == 200) {
			                document.getElementById("txtHint").innerHTML = this.responseText;
			            }
			        };
			        xmlhttp.open("GET", "../phpFiles/gethint.php?q=" + str, true);
			        xmlhttp.send();
			    }
			}

			function jsfunction(){
				document.getElementById('modal-wrapper2').style.display='block';
			}
		</script>
	</body>
</html>