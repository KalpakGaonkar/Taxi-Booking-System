<!DOCTYPE html>
<html>
	<head><title>TaxiBooking</title></head>
	<link rel="stylesheet" href="cssViewMyRides.css">
	<?php
		session_start();
		$connection = new mysqli('localhost','root','','takaso');
	?>
	<body class="body" background="bg.jpg">	
		<div class="page1">
			<div class="heading">
				<div class="left-header">
					<a class="header-anchor" id="site-name" href="../welcomeHomePage/welcomeHomePage.php">Takaso</a>
				</div>
				<div class="middle-header">
					<a class="header-anchor" href="../welcomeAboutUs/welcomeAboutUs.php">About us</a>
					<a class="header-anchor" href="../welcomeContact/welcomeContact.php">Contact</a>
				</div>
				<div class="right-header">
					<a class="header-anchor" href="">Welcome 
					<?php 
						$username=strval($_SESSION['login_user']);
						echo("$username");
					?>
					</a>
				</div>
				<div class="dropdown">
					<button class="dropbtn">More</button>
					<div class="dropdown-content">
						<a href="../welcomeHomePage/welcomeHomePage.php">Home</a>
						<a href="../homePage/homePage.php">Logout</a>
					</div>
				</div>
			</div>
			<div class="table-container">
					<?php 
						$find_id= "SELECT user_id FROM user WHERE user_username = '{$username}'";
						$result1 = mysqli_query($connection, $find_id) or die(mysqli_error($connection));
						if($row1=mysqli_fetch_assoc($result1)){
							$found_id= $row1["user_id"];
						}

						$query="SELECT * FROM payment WHERE user_id=$found_id";
						$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
						if(mysqli_num_rows($result)>0){
							echo '<table class="table">';
							echo '<thead class="table-head">';
							echo '<tr class="table-row">';
							echo "<th class='table-element-head'>TransactionID</th>";
							echo "<th class='table-element-head'>UserID</th>";
							echo "<th class='table-element-head'>Amount</th>";
							echo "<th class='table-element-head'>Date</th>";
							echo "<th class='table-element-head'>Source</th>";
							echo "<th class='table-element-head'>Destination</th>";
							echo "<th class='table-element-head'>VehicleNo</th>";
							echo "</thead>";
							echo '<tbody>';
							while($row=mysqli_fetch_assoc($result)){
								echo "<tr>";
									echo "<td class='table-element'>" . $row["transaction_id"] . "</td>";
									echo "<td class='table-element'>" . $row["user_id"] . "</td>";
									echo "<td class='table-element'>" . $row["amount"] . "</td>";
									echo "<td class='table-element'>" . $row["date"] . "</td>";
									echo "<td class='table-element'>Block " . $row["source"] . "</td>";
									echo "<td class='table-element'>Block " . $row["destination"] . "</td>";
									echo "<td class='table-element'>" . $row["vehicle_registration_no"] . "</td>";
								echo "</tr>";
							}
							echo '</tbody>';
							echo '</table>';
						}
						else{
							echo "<br><br><br><br><br><br>";
							echo "<h1 class='text1'>You haven't travelled with us yet!<h1>";
							echo "<br><br>";
							echo "Book a ride today :)";
						}
					?>
				</div>
		</div>
	</body>
</html>