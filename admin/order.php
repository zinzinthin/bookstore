<?php require_once("config/config.php");?>
<?php require_once('header.php'); ?>
<?php
  $sql = "SELECT * FROM order_table";
  $orders = mysqli_query($conn, $sql);
?>

<ul class="nav flex-column mb-3 mt-2">

	<?php while($order = mysqli_fetch_assoc($orders)) { 
    $user_id=$order['user_id'];
    $sql="SELECT email from  user_account WHERE user_id='$user_id'";
    $email=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($email);
     ?>
     
    <?php if($order['status']) { ?>
      <li class="nav-item row mt-2 ml-3 mr-3 p-3 border delivered">
    <?php } else { ?>
      <li class="nav-item row mt-2 ml-3 mr-3 p-3 border">
    <?php } ?>

      <div class="col-4">
        <b><p><?php echo $order['customer_name'] ?></p></b>
        <p><?php echo $row['email']; ?></p>
        <p><?php echo $order['phone'] ?></p>
        <p>
          <?php echo $order['address'] ?>
        </p>

        <?php if($order['status']) { ?>
          * <a href="order_status.php?id=<?php echo $order['order_id'] ?>&status=0">Undo</a>
          <div class="mt-1">Delivered date : <?php echo $order['modified_date'] ?></div>
        <?php } else { ?>
          * <a href="order_status.php?id=<?php echo $order['order_id'] ?>&status=1">Mark as Delivered</a>
            <div class="mt-1">Order date : <?php echo $order['created_date'] ?></div>
        <?php } ?>
      </div>

      <div class="col-8" style="border-left: 1px dotted #ccc;">
        <?php
          $order_id = $order['order_id'];
          $q = "SELECT order_items.*, booklist.book_name FROM order_items LEFT JOIN booklist ON order_items.book_id = booklist.book_id WHERE order_items.order_id = $order_id";
          $items = mysqli_query($conn, $q) or die(mysqli_error($conn));
          while($item = mysqli_fetch_assoc($items)) {
        ?>
        <b>
          <a href="<?php echo $item['book_id'] ?>" class="detail">
            <?php echo $item['book_name'] ?>
          </a>
          (<?php echo $item['qty'] ?>)<br>
        </b>
        <?php } ?>
      </div>
    </li>
  <?php } ?>
</ul>

</body>
</html>
<script type="text/javascript">

  $(document).ready(function(){

   $('.detail').click(function(){
      var id=$(this).attr('href');
      $.ajax({
          type:'GET',
          url:"book_detail.php",
          data:{card_id:id},
          success: function(data) {
            $('.nav').html(data);
          }
        });
      return false;
    });
  });
</script>