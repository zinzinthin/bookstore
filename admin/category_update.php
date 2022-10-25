<?php
  require_once("config/config.php");
  if (isset($_GET['cat_update'])) {

  $edit_id = $_GET['edit_id'];
  $name = $_GET['name'];
  $remark = $_GET['remark'];

  $sql = "UPDATE categories SET name='$name', remark='$remark', modified_date=now() WHERE category_id = $edit_id";
  mysqli_query($conn, $sql);

  header("location: category_list.php");
}
?>