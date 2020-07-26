<!DOCTYPE html>
<html>
	<head><title>BookingPage</title><link rel="stylesheet" href="cssBookingPage.css"></head>
	<?php
		$connection = new mysqli('localhost', 'root', '', 'takaso');
		session_start();		
	?>
	<body>
		<div class="heading">
			<div class="left-header">
				<a class="header-anchor" id="site-name" href="../welcomeHomePage/welcomeHomePage.php">Takaso</a>
			</div>
			<div class="middle-header">
				<a class="header-anchor" href="../welcomeAboutUs/welcomeAboutUs.php">About us</a>
				<a class="header-anchor" href="../welcomeContact/welcomeContact.php">Contact</a>
			</div>
			<div class="right-header">
				<a class="header-anchor">Welcome 
				<?php 
					$username=$_SESSION['login_user'];
					echo("$username");
				?>
				</a>
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
		<div class="align_container">
			<div class="container">
				<h1 class="meet_the_fleet">Meet the Fleet</h1>
				<form action="#" method="post">
					<select name="cars" style="width: 540px;border-width: 1px; border-color: lightgrey; border-radius: 5px; border-style: solid; height: 40px;">
						<option value="mini">Mini</option>
						<option value="pool">Pool</option>
						<option value="sedan">Sedan</option>
						<option value="suv">SUV</option>
						<option value="luxury">Luxury</option>
					</select>
					<br><br>
					<input name="this_type" type="submit" value="Select">
				</form>
				<?php 
					if(isset($_POST['this_type'])){
						$selected_val = $_POST['cars'];
						echo "<h2>You have selected: $selected_val </h2>";
						$_SESSION['car_type'] = $selected_val;
					}
				?>
				<div id="modal_book" class="book">
					<form class="book_ride" method="post" action="">
						<h4 class="book_ride_label">PICKUP LOCATION: </h4><input placeholder="Enter location" name="source" type="text" style="width: 540px;border-width: 1px; border-color: lightgrey; border-radius: 5px; border-style: solid; height: 40px;">
						<h4 class="book_ride_label">DROP LOCATION: </h4><input placeholder="Enter location" name="destination" type="text" style="width: 540px;border-width: 1px; border-color: lightgrey; border-radius: 5px; border-style: solid; height: 40px;">
						<br><br>
						<input type="submit" name="submit_button" class="type_choose" value="SEARCH">
					</form>
				</div>
				<div class="choose_ride">
					<?php
						$source = $destination = $id = $fname = $lname = $uname = $location = $contact = $amount = "";
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$result = [];
							
							function test_input($data) {
								$data = trim($data);
								$data = stripslashes($data);
								$data = htmlspecialchars($data);
								return $data;
							}
							if(isset($_POST['submit_button'])){
								if($_POST['submit_button']){
									$source = test_input($_POST["source"]);
									$destination 	= test_input($_POST["destination"]);	
									
									if($source!="" && $destination!=""){
										$query = "SELECT * FROM `driver` ORDER BY abs(driver_location-$source) LIMIT 1";
										$result = mysqli_query($connection, $query) or die(mysqli_error($connection));	
										$row=mysqli_fetch_array($result);

										$id=$row[0];
										$fname=$row[1];
										$lname=$row[2];
										$uname=$row[3];
										$location=$row[4];
										$contact=$row[5];

										if($_SESSION['car_type'] == 'mini'){
											$base_value=50;
										}
										else if($_SESSION['car_type'] == 'pool'){
											$base_value=20;
										}
										else if($_SESSION['car_type'] == 'sedan'){
											$base_value=80;
										}
										else if($_SESSION['car_type'] == 'suv'){
											$base_value=200;
										}
										else if($_SESSION['car_type'] == 'luxury'){
											$base_value=1000;
										}

										$amount=abs($destination-$source)*($base_value);

										$_SESSION['did']= "$id";
										$_SESSION['amount']= "$amount";
										$_SESSION['fname']= "$fname";
										$_SESSION['lname']= "$lname";
										$_SESSION['location']= "$location";
										$_SESSION['contact']= "$contact";
										$_SESSION['source']= "$source";
										$_SESSION['destination']= "$destination";

										echo "<h3 class='display'>Your location: Block {$source} <br>";
										echo "Your destination: Block {$destination} <br>";
										echo "Driver's name: {$fname} {$lname} <br>";
										echo "Driver's id: {$id}<br>";
										echo "Driver's location: Block {$location} <br>";
										echo "Driver's contact number: {$contact} <br>";
										echo "Total amount: {$amount}<br></h3>";

										echo "<form class='confirmation' method='post'><input type='submit' name='confirm_button' class='type_choose' value='CONFIRM'></form>";

									}
								}
							}
							if(isset($_POST['confirm_button'])){
								if($_POST['confirm_button']){
									$id=$_SESSION['did'];
									$query1="SELECT Registration_number FROM vehicle WHERE driver_id= '{$id}'";
									$res1=mysqli_query($connection,$query1) or die(mysqli_error($connection));
									if($row1=mysqli_fetch_assoc($res1)){
										$found_rn= $row1["Registration_number"];
									}

									$find_id= "SELECT user_id FROM user WHERE user_username = '$username'";
									$res2=mysqli_query($connection,$find_id) or die(mysqli_error($connection));
									if($row2=mysqli_fetch_assoc($res2)){
										$found_id= $row2["user_id"];
									}

									$amount=$_SESSION['amount'];
									$fname=$_SESSION['fname'];
									$lname=$_SESSION['lname'];
									$location=$_SESSION['location'];
									$contact=$_SESSION['contact'];

									$source=$_SESSION['source'];
									$destination=$_SESSION['destination'];
									$now_date = date('Y-m-d');

									$insert_query = "INSERT INTO payment (user_id, amount, `date`, source, destination, vehicle_registration_no) VALUES ('$found_id', '$amount', '$now_date', '$source', '$destination', '$found_rn')";
									$res3=mysqli_query($connection,$insert_query) or die(mysqli_error($connection));
									if($res3){
								        echo "<h1>Ride confirmed<h1>";
								        echo "<h3 class='display'>Your location: Block {$source} <br>";
										echo "Your destination: Block {$destination} <br>";
										echo "Driver's name: {$fname} {$lname} <br>";
										echo "Driver's location: Block {$location} <br>";
										echo "Driver's contact number: {$contact} <br>";
										echo "Total amount: {$amount}<br></h3>";

										$update_query = "UPDATE driver SET driver_location = '$destination' WHERE driver_id = '$id'";
										$res3=mysqli_query($connection,$insert_query) or die(mysqli_error($connection));
								    }
								    else{
								        die('QUERY FAILED'. mysqli_error ($connection));
								    }	

								    

									/*
									#$now_date="SELECT TO_CHAR(SYSDATE,'MM-DD-YYYY') FROM DUAL";
									$now_date="SELECT CURDATE()";
									$res = mysqli_query ($connection, "SELECT Registration_number FROM `vehicle` WHERE `driver_id`= {$id}");
									$veh_no = mysqli_fetch_assoc ($res);
									echo "$veh_no";
									$insert_query = "INSERT INTO payment (user_id, amount, `date`, source, destination, vehicle_registration_no) VALUES ('$username', '$amount', '$now_date', '$source', '$destination', '$veh_no[0]')";
									$add_result = mysqli_query ($connection, $insert_query);
									if($add_result){
								        echo "Ride confirmed";
								    }
								    else{
								        die('QUERY FAILED'. mysqli_error ($connection));
								    }										
									echo($now_date);	*/					
								}
							}
						}
					?>
			</div>
		</div>
	</body>	
</html>