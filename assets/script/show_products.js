
$(document).ready(function () {


    $(document).on('submit', 'form#add_cart', function(){

        $.post($(this).attr("action"), $(this).serialize(), function(res) {
            $.notify("Added to cart", {
                className : "success",
                position : "top center",
                autoHideDelay: 2000,
            });
			$.get('/Carts/count_cart', function(res) {
				$(".cart-count").html(res);
			});
          });

        return false;
      });


	$(document).on('submit', 'form.add_comment', function(){

		$.post($(this).attr("action"), $(this).serialize(), function(res) {
			$("#review_list").html(res);
		});
		$(this).children("textarea").val('');
	return false;
	});

	$(document).on('submit', 'form.add_reply', function(){
		var response ="";
		var this_form = $(this);
		$.post($(this).attr("action"), $(this).serialize(), function(res) {
			response = res;
		}).then(function(){
			$(this_form).siblings("ul").html(response);
			console.log($(this_form).children())
		});
		$(this).children("textarea").val('');

		return false;
	});

	$("form.add_comment").submit();
	

 
});
