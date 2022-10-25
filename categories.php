<?php 
require_once('admin/config/config.php');
$sql = "SELECT * FROM categories";
$categories = mysqli_query($conn, $sql);

?>
<h2 class="text-white m-3">Category</h2>
			<ul id="cat" class="nav flex-column m-1">
          <li class="nav-item ">
            <a href="0" class="nav-link text-white">All books</a></li>
			    <?php while($category= mysqli_fetch_assoc($categories)){

			    	$id=$category['category_id'];
			        $book_count=mysqli_query($conn,"SELECT count(book_id)FROM booklist WHERE category_id='$id'");
                    $book_count=$book_count->fetch_row(); ?>
			    <li class="nav-item">
			        <a href="<?php echo $category['category_id'] ?>" class="nav-link text-white">
			          <?php echo $category['name'] ?>
			          <span class="badge badge-primary badge-pill float-right"><?php echo $book_count[0]; ?></span>
			        </a>
			    </li>

			    
			    
			    <?php } ?>
			</ul>
	
	
<script type="text/javascript">
  $(document).ready(function() {

    function book_category(id){
    $.ajax({
      type: "GET",
      url: 'category_book_process.php',
      data:{category:id},

      success: function(data) {
      	$('#container-design').html(data);},

      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }

    });

}

    $('#cat li a').click(function(){
      $('a').removeClass('active');
      $(this).addClass('active');
      $('#home').addClass('active');
    	var category_no=$(this).attr('href');
    	book_category(category_no);
    	return false;

    })

  });
</script>
