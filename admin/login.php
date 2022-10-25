<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Login to Book Store Administration</h1>
	<?php 
    if (isset($_SESSION['info'])) {
	echo "<span class='message'>".$_SESSION['info']."</span>";
    unset($_SESSION['info']);
     }?>
<form action="login_process.php" method="post">
	<label for="name">Admin Name</label>
	<input type="text" name="name"><br>
	<label for="passowrd">Password</label>
	<input type="password" name="password"><br><br>
	<input type="submit" name="login" value="Login">
	<a href="register.php">Create an account</a>
</form>
</body>
</html>