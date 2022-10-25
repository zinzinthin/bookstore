<?php
  require_once("config/config.php");

  $book_name = $_POST['book_name'];
  $author = $_POST['author'];
  $summary = $_POST['summary'];
  $price = $_POST['price'];
  $category_id = $_POST['category_id'];

  $tmp = $_FILES['cover_photo']['tmp_name'];
  $cover_img = $_FILES['cover_photo']['name'];
  $target_dir="cover/";
  

  if($cover_img) {
  	if (getimagesize($tmp)) {
  		 move_uploaded_file($tmp,$target_dir.$cover_img);
  	}else{
  		$cover="no-cover.gif";
  	}
   
  }else{
    $cover="no-cover.gif";
  }
  
   echo $sql = "INSERT INTO booklist (cover,book_name,  summary,book_price,author, category_id, created_date, modified_date) VALUES ('$cover','$book_name','$summary','$price','author', '$category_id', now(), now())";

  mysqli_query($conn, $sql);
  header("location: index.php");
?>
