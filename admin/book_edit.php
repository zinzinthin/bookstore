<?php
  require_once("config/config.php");

  $id = $_GET['id'];
  $sql = "SELECT * FROM booklist WHERE book_id = $id";
  $book = mysqli_query($conn, $sql);
  $book = mysqli_fetch_assoc($book);
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Edit Book</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Edit Book</h1>

<form action="book_update.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $book['book_id'] ?>">

  <label for="book_name">Book Name</label>
  <input type="text" name="book_name" id="book_name" value="<?php echo $book['book_name'] ?>" required>

  <label for="author">Author</label>
  <input type="text" name="author" id="author" value="<?php echo $book['author'] ?>" required>

  <label for="summary">Summary</label>
  <textarea name="summary" id="summary"><?php echo $book['summary'] ?></textarea>

  <label for="price">Price</label>
  <input type="text" name="price" id="price" value="<?php echo $book['book_price'] ?>" required>

  <label for="categories">Category</label>
  <select name="category_id" id="categories" required>
    <option value="">-- Choose --</option>
    <?php
    $sql="SELECT category_id, name FROM categories";
    $categories = mysqli_query($conn,$sql);
      while($category = mysqli_fetch_assoc($categories)) {
    ?>
    <option value="<?php echo $category['category_id'] ?>"
          <?php if($category['category_id'] == $book['category_id']) echo "selected" ?> >
      <?php echo $category['name'] ?>
    </option>
    <?php } ?>
  </select>

  <br><br>
  
  <?php if(!empty($book['cover'])) { ?>
  <img src="cover/<?php echo $book['cover'] ?>" alt="" height="150">
  <?php } else { ?>
  <img src="cover/no-cover.gif" alt="" height="150">
  <?php } ?>
  
  <label for="cover">Change Cover</label>
  <input type="file" name="cover" id="cover">

  <br><br>
  <input type="submit" value="Update Book">
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