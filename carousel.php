<div id="myCarousel" class="carousel slide">
  <ul class="carousel-indicators">
    <li class="item1 active"></li>
    <li class="item2"></li>
    <li class="item3"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="css/image/bookstore.png" alt="BookStore">
    </div>
    <div class="carousel-item">
      <img src="css/image/bookstore1.jpeg" alt="BookStore">
    </div>
    <div class="carousel-item">
      <img src="css/image/bookstore.jpg" alt="BookStore">
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#myCarousel">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<script>
$(document).ready(function(){
  
  $("#myCarousel").carousel();
    
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
    
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>