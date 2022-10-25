<?php 
session_start();
require_once("config/config.php");
$sql = "SELECT * FROM categories";
$categories = mysqli_query($conn, $sql);

?>

<?php require_once("header.php"); ?>

<ul class="list">
	<?php while($category = mysqli_fetch_assoc($categories)) { ?>
		<li title="<?php echo $category['remark'] ?>">
			[ <a href="category_del.php?id=<?php echo $category['category_id'] ?>"
					class="delete" onClick="return confirm('Are you sure want to delete it?')">Delete</a> ]&nbsp;
			[ <a href="category_edit.php?id=<?php echo $category['category_id'] ?>">Edit</a> ]&nbsp;&nbsp;
			<?php echo $category['name']; ?>
		</li>
	<?php } ?>
</ul>

<a href="category_new.php" class="new_category">New Category</a>
<?php 
//session check

if(isset($_SESSION['delete_cat_msg'])) { 
   ?>
<script type="text/javascript">
  $(document).ready(function(){
    alert("Cannot delete this category because it has book list.!");
  });
</script>
<?php
unset($_SESSION['delete_cat_msg']); 
}?>