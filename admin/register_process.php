<?php session_start(); ?>
<?php require_once('config/config.php') ?>
<?php 
$count=mysqli_query($conn,"SELECT COUNT(*) FROM admin");
$count=mysqli_fetch_array($count);
if (($count[0]==0)) {//don't have admin

	$password=$_POST['password'];
	$c_password=$_POST["c_password"];

	if ($password==$c_password) {

		if (strlen($password)>=8) {
		$name=$_POST['name'];
		$password=md5($password);
		$sql="INSERT INTO admin(name,password) VALUES ('$name','12345678')";
        mysqli_query($conn,$sql);
        $_SESSION['authority']="1";	//for index.php
        header('location:index.php');
		}else{
			$_SESSION['msg_admin']="Password must be at least 8 character.";
		    header('location:register.php');}

    }else{//password is not equal

		$_SESSION['msg_admin']="Confirm password is incorrect!";
		header('location:register.php');}

}else{

	$_SESSION['msg_admin']="Admin account already exist.Please login";
	header('location:register.php');
}

?>