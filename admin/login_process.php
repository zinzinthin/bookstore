<?php
session_start();
require_once("config/config.php");

  	$password = md5($_POST['password']);

	$sql = "SELECT * FROM admin WHERE name = '".$_POST['name']."' AND password = '".$password."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result);
	
	if($row) {
		$_SESSION['authority'] ="1";
		header('Location: index.php');

	} else {
		$_SESSION['info'] = "Username or password doesn't match";
		header('Location: login.php');
	}
?>
