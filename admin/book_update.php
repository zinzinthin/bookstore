<?php
  require_once("config/config.php");

  $id = $_POST['id'];
  $book_name = $_POST['book_name'];
  $author = $_POST['author'];
  $summary = $_POST['summary'];
  $price = $_POST['price'];
  $category_id = $_POST['category_id'];
  
  $cover = $_FILES['cover']['name'];
  $tmp = $_FILES['cover']['tmp_name'];
  $new_path="cover/$cover";

  if (getimagesize($tmp)) {
   
   move_uploaded_file($tmp,$new_path);
    
    $sql = "UPDATE booklist SET cover='$cover',book_name='$book_name',summary='$summary',book_price='$price',author='$author',category_id='$category_id',modified_date=now() WHERE book_id = $id";
  
   } else {
    
      $sql = "UPDATE booklist SET book_name='$book_name',summary='$summary',book_price='$price',author='$author',category_id='$category_id',modified_date=now() WHERE book_id = $id";
  
   }

  mysqli_query($conn, $sql);

  header("location: index.php");
?>
