<?php
session_start();
  require_once("config/config.php");

  $id = $_GET['id'];
  $sql = "DELETE FROM booklist WHERE book_id = $id";
  $result=mysqli_query($conn, $sql);
if (!$result) {
	
	$_SESSION['delete_msg']=true;
}
  header("location: index.php");

?>