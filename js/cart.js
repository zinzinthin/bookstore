$(document).ready(function(){

			function cart_quantity(id,qty,price,btn){
 			$.ajax({
 			type:'GET',
 			url:'cart_quantity_update.php',
 			data:{cart_id:id,
 				qty:qty,
 				price:price,
 				qty_btn:btn},
 			dataType:'json',
 			success:function(data){
 				$('.add_cart').html(data.cart);
 				$('#qty'+id).text(data.qty);
 				$('#total_price'+id).text(data.total);
 				$('.allprice').text(data.total_result);
 			}
 	      });
 		}
 		
 	$('.value_decrease').click(function(){
 		var id=$(this).attr('href');
 		var qty=$('#qty'+id).text();
 		var price=$('#price'+id).text();
 		cart_quantity(id,qty,price,'decrease');
 		return false;
 	});

 	$('.value_increase').click(function(){
 		var id=$(this).attr('href');
 		var qty=$('#qty'+id).text();
 		var price=$('#price'+id).text();
 		cart_quantity(id,qty,price,'increase');
 		return false;
 	});

 });
 	
 	
