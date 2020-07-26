<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'taxi');
session_start();
$user_check=$_SESSION['login_user'];
$query = "SELECT u_login FROM user WHERE u_login='$user_check'";
$ses_sql=mysqli_query($connection, "SELECT u_login FROM user WHERE u_login='$user_check'");
$row=mysqli_fetch_assoc($ses_sql);
$login_session = $row['u_login'];
if(!isset($login_session)){
	mysqli_close($connection);
	header('Location: file1.php');
}
session_destroy();
?>