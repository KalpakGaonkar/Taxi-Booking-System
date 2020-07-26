<?php  
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

if($username=="admin" && $password == '1234'){
$_SESSION['login_user']=$username;
header('Location: dashboard.php');
}
}

?>