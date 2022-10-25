<?php 
//session check

if(isset($_SESSION['success_register'])) { 
  //register successfull ?>
<script type="text/javascript">
  $(document).ready(function(){
    alert("Register successful !");
  });
</script>
<?php
unset($_SESSION['success_register']); 
}?>

<?php if(isset($_SESSION['order_success'])) {
//for order success ?>
  <script>
    $(document).ready(function() {
      alert("Your order has been submitted. We'll deliver the items soon.");
    });
  </script> 
  <?php 
  unset($_SESSION['order_success']);
  unset($_SESSION['user_id']);
  } ?>

  <?php if(isset($_SESSION['no_cart'])) {
//for no cart ?>
  <script>
    $(document).ready(function() {
      alert("Login successful.Add cart to order!");
    });
  </script> 
  <?php 
  unset($_SESSION['no_cart']);
} ?>
