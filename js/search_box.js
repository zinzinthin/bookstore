$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
       
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("book_search.php", {term: inputVal}).done(function(data){
                
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){

        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        var id=$(this).attr('id');
        $(this).parent(".result").empty();
        $.ajax({
        type: "GET",
        url: 'book_detail.php',
        data:{card_id:id},

        success: function(data) {
        $('#container-design').html(data);},

        error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }

    });
        
    });
});

