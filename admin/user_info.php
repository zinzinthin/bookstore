<?php require_once("config/config.php");?>
<?php require_once('header.php'); ?>
<?php
$sql = "SELECT order_table.user_id,
user_account.account_name,
user_account.email,
order_table.order_id,
order_table.customer_name,
order_table.phone,
order_table.address 
FROM user_account 
LEFT JOIN order_table 
ON user_account.user_id=order_table.user_id
GROUP BY user_account.user_id";
   $user_info = mysqli_query($conn, $sql);
?>
<ul class="nav flex-column mb-3 mt-2">

	<?php while($user=mysqli_fetch_assoc($user_info)) { ?>

   <li class="nav-item row mt-2 ml-3 mr-3 border p-3">
    <div class="col-6">
       
       <p class="row">
          <label class="col-4">Account Name</label>: 
          <span class="col-7 "><?php echo $user['account_name'];?>
      </span></p>
      <p class="row">
          <label class="col-4">Order Name</label>: 
          <span class="col-7"><?php echo $user['customer_name'];?>
      </span></p>
      <p class="row">
          <label class="col-4">Email</label>: 
          <span class="col-7"><?php echo $user['email'];?>
      </span></p>
      <p class="row">
          <label class="col-4">Phone</label>: 
          <span class="col-7"><?php echo $user['phone'];?>
      </span></p>
      <p class="row">
          <label class="col-4">Address</label>: 
          <span class="col-7"><?php echo $user['address']; ?>
      </span></p> 
       
    </div>

     <div class="col-6" style="border-left: 1px dotted #ccc;">
        <?php 
        if (!empty($user['user_id'])) {
          $id=$user['user_id'];
          $sql="SELECT booklist.book_id,booklist.book_name,order_items.qty 
           FROM booklist,order_table,order_items
           WHERE booklist.book_id=order_items.book_id
           AND order_items.order_id=order_table.order_id
           AND order_table.user_id='$id'
           ";
          /*$sql="SELECT book_id,book_name 
              FROM booklist
              WHERE book_id IN (SELECT book_id 
              FROM order_items 
              WHERE  order_id IN (SELECT order_id 
              FROM order_table WHERE user_id='$id'
              GROUP BY order_table.user_id))";*/
        $user_order=mysqli_query($conn,$sql);
        while ( $info = mysqli_fetch_assoc($user_order)) { ?>
          <b>
          <a href="<?php echo $info['book_id'] ?>" class="detail">
            <?php echo $info['book_name'] ?>
          </a>
          (<?php echo $info['qty'] ?>)<br> 
          </b>

          <?php } } ?>
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