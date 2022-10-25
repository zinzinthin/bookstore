<?php 
 $cart = 0;
  if(isset($_SESSION['cart'])) {
    foreach($_SESSION['cart'] as $qty) {
      $cart += $qty;
    }
}
$_SESSION['qty']=$cart;
 ?>

<!DOCTYPE html>
<html>
<head>

	<title>Book Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jquery.js"></script>
	<script src="js/search_box.js"></script>
	<script src="js/click_event.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="admin/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>

<body>
	<?php require_once('carousel.php') ?>

	<nav class="navbar navbar-expand-sm p-0">
	
	<ul class="navbar-nav w-50">
			
		<li class="nav-item">
			<a href="index.php?category=0" class="nav-link pl-4 pr-4" id="home"><img src="css/image/menu.png"></a></li>

		<li class="nav-item">
			<a href="#" class="nav-link pl-4 pr-4 text-white">Contact Us</a></li>

		<li class="nav-item ">
			<a href="#" class="nav-link pl-4 pr-4 text-white">About Us</a></li>

	</ul>

	<span class="search-box">
        <input type="text" class="search_input" autocomplete="off" placeholder="Search ..." />

        <div class="result"></div>
    </span>

    <ul class="navbar-nav justify-content-end w-50">

        <li class="nav-item">
        	<a href="cart_view.php" class="nav-link pl-4 pr-4">
			<span class="badge badge-pill bg-success float-right text-white add_cart"> <?php echo $cart; ?> </span>
			<img src="css/image/shopping.png" class="cart_img"></a>
		</li>
   
		<li class="nav-item"><a href="#" class="nav-link pl-4 pr-4" data-toggle="modal" data-target="#login_modal">
			<img src="css/image/login.png" title="Login"></a>
		<?php require_once('login_modal.php') ?>	
		</li>
 
		<li class="nav-item"><a href="#" class="nav-link pl-4 pr-4">
		<img src="css/image/help.png"></a></li>

</ul>
</nav>








