<?php
  session_start();
  $id = $_GET['book_id'];

  if(isset($_SESSION['cart'])) {
    $_SESSION['cart'][$id]=(array_key_exists($id, $_SESSION['cart']))? $_SESSION['cart'][$id]+1 : 1;
  	}
  else{
    $_SESSION['cart'][$id]=1;
  }
  $cart=0;
    foreach($_SESSION['cart'] as $qty) {
      $cart += $qty;}
      echo $cart;

    
?>

