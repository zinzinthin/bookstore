<?php
  require_once("config/config.php");

  $name = $_POST['name'];
  $remark = $_POST['remark'];

  $sql = "INSERT INTO categories (name, remark, created_date, modified_date) VALUES ('$name', '$remark', now(), now())";

  mysqli_query($conn, $sql);

  header("location: category_list.php");
?>
