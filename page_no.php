<?php 
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
  $page_no = $_GET['page_no'];
  } else {
    $page_no = 1;
        }

  $total_records_per_page = 10;
  $offset = ($page_no-1) * $total_records_per_page;
  $previous_page = $page_no - 1;
  $next_page = $page_no + 1;
  $adjacents = "2";

  if (isset($_SESSION['category_id']) 
        && ($_SESSION['category_id'] >0 ) ) {
          $id=$_SESSION['category_id'];
          $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `booklist` where category_id='$id' ");
   }else{
    $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `booklist`");
   } 

  $total_records = mysqli_fetch_array($result_count);
  $total_records = $total_records['total_records'];
  $total_no_of_pages = ceil($total_records / $total_records_per_page);
  $second_last = $total_no_of_pages - 1;
  
 ?>
 <script type="text/javascript">
jQuery(document).ready(function($){
var path = window.location.pathname.split("/").pop();
if (path=='cart_view.php') {
window.location='index.php';
}
});
</script>