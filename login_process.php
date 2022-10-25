<?php
session_start();
require_once("admin/config/config.php");

  	$password = md5($_POST['password']);

	$sql = "SELECT user_id FROM user_account WHERE email = '".$_POST['useremail']."' AND password = '".$password."'";
	$row = mysqli_query($conn, $sql);
	$result = mysqli_num_rows($row);
	
	if($result) {
		$row=mysqli_fetch_assoc($row);
		$_SESSION['user_id'] =$row['user_id'];
		header('Location: book_order_form.php');

	} else {
		$_SESSION['msg'] = "Email or password doesn't match.";
		header('Location: cart_view.php');
	}
?>
