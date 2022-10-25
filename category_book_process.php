<?php 
session_start();
require_once('admin/config/config.php');

//for category id
if (isset($_GET['category'])) {
$category_id=$_GET['category'];
$_SESSION['category_id']=$category_id;
}
elseif (isset($_SESSION['category_id'])) {
$category_id=$_SESSION['category_id'];
}else{
  $category_id=0;
}

//for limited number of  books
require_once('page_no.php');

//for category name
$name="SELECT name from categories where category_id='$category_id'";
$category= mysqli_query($conn, $name);
$category_name=mysqli_fetch_assoc($category);

//select books from database
if ($category_name) {
$name=$category_name['name'];
$sql = "SELECT book_id,cover,book_name,book_price FROM booklist where category_id=? ORDER BY booklist.created_date DESC LIMIT $offset, $total_records_per_page";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("i",$category_id); 
}else{
  $name="All books";
  $sql = "SELECT book_id,cover,book_name,book_price FROM booklist ORDER BY booklist.created_date DESC LIMIT $offset, $total_records_per_page";
    $stmt = $conn->prepare($sql);
}
  
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($book_id,$cover,$book_name,$book_price);
echo '<h2 class="text-primary p-3">'.$name.'</h2>';
echo '<div class=" row ml-3 overflow-hidden">';

    while ($stmt->fetch()) { 

      echo '<div class="card bg-primary col-2 m-2" id="'.$book_id.'" >';

      if (isset($cover)) {
       echo '<img class="card-img-top img-fluid cover mx-auto d-block" src="admin/cover/'.$cover.'" alt="Cover image" title="Detail">';
      }else{
        echo '<img class="card-img-top img-fluid cover" src="admin/cover/no-cover.gif" alt="Cover image" title="Detail">';
      }
    
       echo '<div class="card-body p-1">
        <p class="card-text">'.$book_name.'</p>
        <h6 class="card-title text-white">Price : $' .$book_price.'</h6>
        <a href="'.$book_id.'" class="btn btn-success add-to-card">Add Card</a>
      </div>
    </div>';//book

}

echo '</div>';//booklist

echo '<div class="page_count">
     <span class="page_number text-primary">
     <strong>Page '.$page_no.' of '.$total_no_of_pages.'</strong> 
     </span>';
     
require_once('admin/pagination.php');

echo '</div>';//page_count div
?>

<script type="text/javascript">

  $(document).ready(function(){

    $('.add-to-card').click(function(){
     var id=$(this).attr("href");
        $.ajax({
          type:'GET',
          url:"cart_create.php",
          data:{book_id:id},
          success: function(data) {
            $('.add_cart').html(data);
          }
        });
        return false;
    });

    $('.card').click(function(){
      var id=$(this).attr('id');
      $.ajax({
          type:'GET',
          url:"book_detail.php",
          data:{card_id:id},
          success: function(data) {
            $('#container-design').html(data);
          }
        });
      return false;
    });
  });
</script>

