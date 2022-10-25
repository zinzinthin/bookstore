<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="admin/css/bootstrap.min.css"> 

<?php session_start();

if (isset($_SESSION['cart'])) { 

if(isset($_SESSION['success_register'])) { ?>
<script type="text/javascript">
  $(document).ready(function(){
    alert("Register successful !");
  });
</script>
<?php
unset($_SESSION['success_register']); 
} ?>
<form action="book_order_process.php" class="w-50 m-5 needs-validation novalidate" method="post">
  <h4 class="mb-3">Please Fill Your Shipping Information</h4>

   <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="ship_name" required>
    </div>

    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone" pattern='09[0-9]{9}' required>
    </div>

    <div class="form-group">
      <label for="Address">Address:</label>
        <textarea rows="5" class="form-control" name="address" required>
        </textarea>     
    </div>

  <div>
  <a href="cart_view.php" class="btn btn-danger mr-2">Cancle</a> 
  <input type="submit" name="order" onclick="return confirm('Are you sure want to order this books?')" class="btn btn-primary" value="Order Now">  
  </div>

</form>

<?php 
}else{
  $_SESSION['no_cart']=true;
  header('location:index.php');
}

 ?> 