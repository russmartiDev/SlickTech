
$(document).ready(function () {

    $(document).on('submit', 'form.orders', function(){

		$.post($(this).attr("action"), $(this).serialize(), function(res) {
			$("tbody").html(res);
		});
		
	    return false;
	});
    
    $(document).on('change', 'form.orders select', function(){
        $(this).parent().parent().submit();
	});

	$(document).on('submit', 'form.update', function(){

        $.post($(this).attr("action"), $(this).serialize(), function(res) {
			$.notify("Status updated", {
				className : "success",
				position : "top center",
				autoHideDelay: 2000,
            });
		});
		
	    return false;
	});

	$(document).on('change', 'select[name=status_update]', function(){
		$(this).parent("form").submit();
	});

    $(document).on('keyup', 'form.orders .search', function(){
        $(this).parent().parent().submit();
	});

	$(document).on('click', '.button-page', function(){
        $("form.orders").attr("action", $("form.orders").attr("data-link") + $(this).text());
		$("form.orders").submit();
	});
    
   $("form.orders").submit();



});
