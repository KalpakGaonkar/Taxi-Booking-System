<?php
include("db_connect.php");
include("session.php");
include("file1.php");
	$add1 = $_POST['padd'];
	$add2 = $_POST['dadd'];
	$date1 = $_POST['date'];
	$time1 = $_POST['time'];
	$cars1 = $_POST['cars'];
	
	$amt = 333;
	
	$uid = "SELECT User_ID from user where u_login=$login_session";
	$conn = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($conn, 'taxi');
	$add_query = "INSERT INTO payment (Amount, Date1, time1, Source, Destination, userID) VALUES('$amt', '$date1', '$time1', '$add1', '$add2', '$uid')";
	$add_result = mysqli_query($conn,$add_query);
	if($add_result)
	{
	    echo "EMPLOYEE RECORD SUCCESSFULLY ADDED";
	}
	else
	{
	    die('QUERY FAILED'.mysqli_error($conn));
	}
?>