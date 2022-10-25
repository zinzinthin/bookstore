<?php session_start();

if (!isset($_SESSION['authority'])) {
   header('location:login.php');
   exit();
 }
?>
<?php require_once("config/config.php");?>
<?php require_once('header.php'); ?>
<?php
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
  $page_no = $_GET['page_no'];
  } else {
    $page_no = 1;
        }

  $total_records_per_page = 6;
  $offset = ($page_no-1) * $total_records_per_page;
  $previous_page = $page_no - 1;
  $next_page = $page_no + 1;
  $adjacents = "2"; 

  $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `booklist`");
  $total_records = mysqli_fetch_array($result_count);
  $total_records = $total_records['total_records'];
  $total_no_of_pages = ceil($total_records / $total_records_per_page);
  $second_last = $total_no_of_pages - 1; // total page minus 1

  $sql = "SELECT booklist.*, categories.name FROM booklist LEFT JOIN categories ON booklist.category_id = categories.category_id ORDER BY booklist.created_date DESC LIMIT $offset, $total_records_per_page";
  $books= mysqli_query($conn, $sql);

?>

  <ul class="list">
  <?php while($book = mysqli_fetch_assoc($books)) { ?>
    <li>
      <?php if(!empty($book['cover'])) { ?>
      <img src="cover/<?php echo $book['cover'] ?>" alt="" align="right">
      <?php } else { ?>
      <img src="cover/no-cover.gif" alt="" align="right" height="140">
      <?php } ?>

      <b><?php echo $book['book_name'] ?></b>
      <i>by <?php echo $book['author'] ?></i>
      <small>(in <?php echo $book['name'] ?>)</small>
      <span>$<?php echo $book['book_price'] ?></span>
      <div><?php echo $book['summary'] ?></div>

      [ <a href="book_delete.php?id=<?php echo $book['book_id'] ?>" 
            class="delete" onClick="return confirm('Are you sure want to delete it?')">Delete</a> ]&nbsp;
      [ <a href="book_edit.php?id=<?php echo $book['book_id'] ?>">Edit</a> ]
    </li>
  <?php } ?>
</ul>

<a href="book_new.php" class="new_book">New Book</a>
<hr>
<div class="page_number">
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>
<?php require_once("pagination.php"); ?> 
</body>
</html>
<?php 
//session check

if(isset($_SESSION['delete_msg'])) { 
   ?>
<script type="text/javascript">
  $(document).ready(function(){
    alert("Cannot delete this book because it has order.!");
  });
</script>
<?php
unset($_SESSION['delete_msg']); 
}?>