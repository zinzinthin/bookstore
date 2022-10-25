<?php
  require_once("config/config.php");

  $id = $_GET['id'];
  $status = $_GET['status'];

  $sql = "UPDATE order_table SET status=$status, modified_date=now() WHERE order_id=$id";
  mysqli_query($conn, $sql);

  header("location: order.php");
?>