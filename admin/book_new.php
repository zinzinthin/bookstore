<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>New Book</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>New Book</h1>

<form action="book_add.php" method="post" enctype="multipart/form-data">
  
<label for="book_name">Book Name</label>
  <input type="text" name="book_name" id="book_name" required>

  <label for="author">Author</label>
  <input type="text" name="author" id="author" required>

  <label for="summary">Summary</label>
  <textarea name="summary" id="summary"></textarea>

  <label for="price">Price</label>
  <input type="text" name="price" id="price" required>

  <label for="categories">Category</label>
  <select name="category_id" id="categories" required>
    <option value="">-- Choose --</option>
    <?php
     require_once("config/config.php");
    $sql="SELECT category_id, name FROM categories";
    $categories = mysqli_query($conn,$sql);
      while($category = mysqli_fetch_assoc($categories)) {
    ?>
    <option value="<?php echo $category['category_id'] ?>" >
      <?php echo $category['name'] ?>
    </option>
    <?php } ?>
  </select>

  <br><br>
  
  
  <label for="cover">Change Cover</label>
  <input type="File" name="cover_photo" id="cover">

  <br><br>
  <input type="submit" value="Add Book">
  <a href="index.php">Back</a>
</form>

<script src="../js/jquery.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script>
$(function() {
  $("form").validate({
    rules: {
      "book_name": "required",
      "author": "required",
      "category_id": "required",
      "price": "required"
    },
    messages: {
      "book_name": "Please provide book name",
      "author": "Please provide author name",
      "category_id": "Please choose a category",
      "price": "Please provide book price"
    }
  });
});
</script>
</body>
</html>