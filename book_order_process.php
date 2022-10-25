<?php
  session_start();
  require_once("admin/config/config.php");

  if (isset($_SESSION['user_id'])) {

    $user_id=$_SESSION['user_id'];
    $name = $_POST['ship_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

  echo $sql ="INSERT INTO order_table (user_id,customer_name,phone, address, status, created_date, modified_date) VALUES ('$user_id','$name','$phone','$address', 0, now(), now())";
  mysqli_query($conn, $sql);
  $order_id = mysqli_insert_id($conn);

  foreach($_SESSION['cart'] as $book_id => $qty) {
    mysqli_query($conn, "INSERT INTO order_items (order_id, book_id, qty) VALUES ($order_id,$book_id, $qty)");
  }

  unset($_SESSION['cart']);
  $_SESSION['order_success'] = true;

  header("location: index.php");

  }else{
    header('location:cart_view.php');
  }

?>