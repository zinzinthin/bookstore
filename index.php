<?php session_start(); ?>
<?php require_once('header.php') ?>
<?php require_once('sidebar.php') ?>

<?php 
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
//for page no
if (isset($_GET['page_no'])) {
  $page_no=$_GET['page_no'];
}else{
  $page_no=1;
}
?>

<div id="container-design" class="bg-color3 col-9">
  <!-- display books -->
</div>

</div><!-- category-design div -->

<?php require_once('footer.php') ?> 

<script type="text/javascript">
  $(document).ready(function() {
  var category_no='<?php echo $category_id ?>';
  var page_no='<?php echo $page_no ?>';
  book_category(category_no);

    function book_category(id){
    $.ajax({
      type: "GET",
      url: 'category_book_process.php',
      data:{category:id,page_no:page_no},

      success: function(data) {
        $('#container-design').html(data);},

      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }

    });

}
  $('a').removeClass('active');
  var target=$('#cat a[href="'+category_no+'"]');
  target.addClass('active');
  $('#home').addClass('active');
});
</script>

<?php require_once('check_session.php') ?>

