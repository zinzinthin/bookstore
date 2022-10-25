<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Register to Book Store Administration</h1>
	<?php 
    if (isset($_SESSION['msg_admin'])) {
	echo "<span class='message'>".$_SESSION['msg_admin']."</span>";
    unset($_SESSION['msg_admin']);
     }?> 
    <form action="register_process.php" method="post">
	<label for="name">Admin Name</label>
	<input type="text" name="name">
	<label for="passowrd">Password</label>
	<input type="password" name="password">
	<label for="confirm passowrd">Confirm Password</label>
	<input type="password" name="c_password"><br><br>
	<input type="submit" name="register" value="Register">
	<a href="login.php">Login</a>
	
</form>      
<script src="../js/jquery.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script>
$(function() {
	$("form").validate({
		rules: {
			"name": "required",
			"password":"required",
			"c_password":"required"
		},
		messages: {
			"name": "Please provide admin name",
			"password":"Password must contain at least 8 characters!",
			"c_password":"Comfirm password required"
		}
	});
  
});
</script>
</body>
</html>