<?php
	require('../phpFiles/db_connect.php');
	session_start();
	
	// define variables and set to empty values
	$username = $password = "";
	
	function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = test_input($_POST["username"]);
		$password = test_input($_POST["password"]);		

		
		
		// CHECK FOR THE RECORD FROM TABLE
		$query = "SELECT * FROM `user` WHERE user_username='$username' and user_password='$password'";
		 
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);

		if ($count == 1){
			//echo "Login Credentials verified";
			$_SESSION['login_user']=$username;
			header('Location: ../welcomeHomePage/welcomeHomePage.php');
		}
		else{
			header('Location: ../homePage/homePage.php');
		}
	}
?>

