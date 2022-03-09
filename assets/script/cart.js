
$(document).ready(function () {


    $(document).on('submit', 'form#add_cart', function(){

        $.post($(this).attr("action"), $(this).serialize(), function(res) {
            $.notify("Added to cart", {
                className : "success",
                position : "top center",
                autoHideDelay: 2000,
            });
          });

        return false;
      });
  

 
});
