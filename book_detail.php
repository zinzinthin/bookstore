<?php 
require_once('admin/config/config.php');

if (isset($_GET['card_id'])) {

	$book_id=$_GET['card_id'];
	$book = mysqli_query($conn, "SELECT * FROM booklist WHERE book_id = $book_id");
    $row = mysqli_fetch_assoc($book);

    echo '<h2 class="text-primary p-3 mt-2">'.$row['book_name'].'</h2>';

    echo '<div class="m-3 overflow-hidden">';
    if (isset($row['cover'])) {
       echo '<img class="img-fluid mb-3" d-block src="admin/cover/'.$row['cover'].'" alt="Cover image" title="Detail" style="width:200px;height:300px">';
      }else{
       echo '<img class="img-fluid mb-3" src="admin/cover/no-cover.gif" alt="Cover image" title="Detail" style="width:200px;height:300px">';
      }	
    echo '<div><span class="fa fa-star checked pl-5"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star"></span>
		<span class="fa fa-star"></span></div>';

	echo '<i class="ml-4">'.$row['author'].'</i>,
      	<b>$'.$row['book_price'].'</b>
		<p class="mt-3">'.$row['summary'].'</p>';	

	echo '<a href="'.$book_id.'" class="btn btn-success add-to-card">Add Card</a>';	

	echo '<a href="index.php" class="btn bg-light ml-2 pl-3 pr-3">Ok</a>';

    echo  '</div>';
    echo '</div>';
}

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
});
</script>