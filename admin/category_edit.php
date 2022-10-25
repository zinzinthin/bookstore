<?php require_once("header.php"); ?>
<?php
  require_once("config/config.php");

  $id = $_GET['id'];
  $sql =  "SELECT * FROM categories WHERE category_id = $id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<form action="category_update.php" method="GET">
  <input type="hidden" name="edit_id" value="<?php echo $row['category_id'] ?>">

  <label for="name">Category Name</label>
  <input type="text" name="name" id="name" value="<?php echo $row['name'] ?>">

  <label for="remark">Remark</label>
  <textarea name="remark" id="remark"><?php echo $row['remark'] ?></textarea>

  <br><br>
  <input type="submit" value="Update Category" name="cat_update">
  <a href="category_list.php" class="back">Back</a>
</form>
<script src="../js/jquery.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script>
$(function() {
	$("form").validate({
		rules: {
			"name": "required"
		},
		messages: {
			"name": "Please provide category name"
		}
	});
});
</script>
</body>
</html>
