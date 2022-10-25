<?php
  session_start();
  require_once("admin/config/config.php");

  if(empty($_SESSION['cart']) || (count($_SESSION['qty'])==0) ) {
    header("location: index.php");
    exit();
  }
 ?>
<?php require_once('header.php'); ?>
<?php require_once('sidebar.php') ?>
<script src="js/cart.js"></script>
 <div id="container-design" class="col-9">

	<h2 class="text-primary m-3 ">View Cart</h2>

	<table class="table">
		<thead>
			<tr height="50px" class="bg-color3">
				<th>No</th>
				<th>Book Cover</th>
				<th>Update Quantity</th>
				<th>Unit Price($)</th>
				<th>Price($)</th>
				<th>Remove</th>
			</tr>
		</thead>
	<?php
		$no=0;
		$total = 0;
		foreach($_SESSION['cart'] as $id => $qty) {$no+=1;
		$sql="SELECT cover, book_price FROM booklist WHERE book_id='$id'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		$total += $row['book_price'] * $qty; ?>
		<tbody>
			<tr>
         		<td><?php echo $no.'.' ?></td>
         		<td><img src="admin/cover/<?php echo $row['cover'] ?>" class="cover img-fluid">
         		</td>
         		<td class="pt-5">
         			<form class="cart_qty">
         				<a href="<?php echo $id ?>" class="value_decrease btn bg-success text-white">-</a>
    					<span id="qty<?php echo $id ?>"  class="qty btn bg-primary text-white disabled"><?php echo $qty ?></span>
         				<a href="<?php echo $id ?>" class="value_increase btn bg-success text-white">+</a>
         					
         			</form>
         		</td>
         		<td class="pt-5"><span id="price<?php echo $id ?>"><?php echo $row['book_price']; ?></span>
         		</td>
         		
         		<td class="pt-5 text-primary">
         			<span id="total_price<?php echo $id ?>" class="total_price"><?php echo $row['book_price']*$qty; ?>
         			</span>
         		</td>
         		<td class="pt-5">
					<a href="cart_quantity_update.php?remove&id=<?php echo $id ?>" class="remove btn" onclick="return confirm('Are you sure want to remove it?')">&#x274C;</a>
				</td>
         	</tr>
    <?php } ?> 
			<tr>
				<td colspan="2"><a href="index.php" class="shopping btn bg-success text-white ml-5 pl-3 pr-3">Continue Shopping</a>
				</td>
				<td>
					<div>
  						<a  href="#" class="btn btn-primary pl-3 pr-3" data-toggle="modal" data-target="#login_modal">Order Now</a>  
						<?php require_once('login_modal.php') ?>
					</div>

				</td>
				
				<td>Total Price = </td>
				<td><span class="allprice btn bg-primary text-white disabled"><?php echo $total; ?></span></td>
				<th><a href="cart_delete.php" class="clear_cart btn bg-danger text-white" onclick="return confirm('Are you sure want to clear your cart?')">Clear Cart</a></th>
			</tr>
	</tbody>	
	</table>
</div>
 
</div> <!-- for content body  -->
<?php require_once('footer.php') ?>

<?php 
if(isset($_SESSION['msg'])) { 
	$msg=$_SESSION['msg']; ?>

<script type="text/javascript">
  $(document).ready(function(){
  	var msg = " <?php echo $msg;?> Please try again. ";
    alert(msg);
  });
</script>

<?php 
}
unset($_SESSION['msg']);


?>
