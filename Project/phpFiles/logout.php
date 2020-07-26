<?php
session_start();
unset($_SESSION["u_login"]);

header("Location:login.php");
?>