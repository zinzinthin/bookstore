<?php require_once('admin/config/config.php'); ?>
<?php 
session_start();
if (isset($_POST['register_submit'])) {

	$password=$_POST['password'];
	$cfm_password=$_POST["cfm_password"];

	if ($password==$cfm_password) {

		if (strlen($password)>=8) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=md5($password);
		$sql="INSERT INTO user_account(account_name,email,password) VALUES ('$name','$email','$password')";
        $result=mysqli_query($conn,$sql);
       	if ($result) {
       		$user_id = mysqli_insert_id($conn);
       		$_SESSION['success_register']=true;
       		$_SESSION['user_id']=$user_id;
       		header('location:book_order_form.php');
       	}else{
       		$_SESSION['msg']="Email name already exist";
       		header('location:cart_view.php');
       	}
        
		}else{
			$_SESSION['msg']="Password must be at least 8 character.";
		    header('location:cart_view.php');}

    }else{//password is not equal

		$_SESSION['msg']="Confirm password is incorrect.";
		header('location:cart_view.php');}

}

?>