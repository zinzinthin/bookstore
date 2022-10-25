<?php 
session_start();
require_once("admin/config/config.php");
if (isset($_SESSION['cart']) && isset($_GET['cart_id'])) {

	$id=$_GET['cart_id'];
	$qty=$_GET['qty'];
	$price=$_GET['price'];

	if (($_GET['qty_btn']=='increase')) {
		$_SESSION['cart'][$id]++;
		$data['qty']=$qty+1;
		$data['total']=($qty+1)*$price;
	}
	elseif (($_GET['qty_btn']=='decrease') && ($qty > 1)) {

		$_SESSION['cart'][$id]--;
		$data['qty']=$qty-1;
		$data['total']=($qty-1)*$price;
		
	}
	$cart=0;
	$total=0;
    foreach($_SESSION['cart'] as $id => $qty) {
    $sql="SELECT cover, book_price FROM booklist WHERE book_id='$id'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	$total += $row['book_price'] * $qty;
    $cart += $qty;
    }

    $data['cart']=$cart;
    $data['total_result']=$total;
    echo json_encode($data);

}else{
	if (isset($_GET['remove'])) {
		$id=$_GET['id'];
		unset($_SESSION['cart'][$id]);
		header('location:cart_view.php');
	}
}

 ?>