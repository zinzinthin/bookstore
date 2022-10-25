<?php
session_start();
  require_once("config/config.php");

  $id = $_GET['id'];
  $sql = "DELETE FROM categories WHERE category_id = $id";
  $result=mysqli_query($conn, $sql);
if (!$result) {
	
	$_SESSION['delete_cat_msg']=true;
}
  header("location: category_list.php");
?>