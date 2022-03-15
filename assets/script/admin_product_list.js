
$(document).ready(function () {
    
	$(document).on('submit', 'form.product_list', function(){

        $.post($(this).attr("action"), $(this).serialize(), function(res) {
            $(".data").html(res);
		});
		
	    return false;
	});

    $(document).on('submit', 'form#add_product', function(){

        $.post($(this).attr("action"), $(this).serialize(), function(res) {
            $(".data").html(res);
		});
		
	    return false;
	});


    $(document).on('keyup', 'form input[name=search]', function(){
        $(this).parent().parent().submit();
	});

	$(document).on('click', '.button-page', function(){
        $("form.product_list").attr("action", $("form.product_list").attr("data-link") + $(this).text());

		$("form.product_list").submit();
	});
    
   $("form.product_list").submit();


   $( function() {
       $( "#sortable" ).sortable({
       revert: false,
       placeholder: "ui-state-highlight",
       handle: ".handle"
       
       });

   } );

   $(document).on('click', '.del', function(){
        $("form.del_form").attr("action", $("form.del_form").attr("data-link") + $(this).attr("data-id"));
 
    });
    
	$(document).on('submit', 'form.del_form', function(){

        $.post($(this).attr("action"), $(this).serialize(), function(res) {
            $("form.product_list").submit();
		});
		
	    return false;
	});

    
    $(document).on('focusout', '.category_add', function(){
        $("#add_new_categ").val($(this).val());
        $(this).val("");
        $("form.category").submit();
	});

	$(document).on('submit', 'form.category', function(e){
        $.post($(this).attr("action"), $(this).serialize(), function(res) {

            $("ul.dropdown-menu").html(res);
		});

        return false;
	});

    $("form.category").submit();

    $(".upload").click(function(){
        $(".file_button").click()
    });

    $(document).on('click', ".dropdown-menu *", function(e){
        e.stopPropagation();
        
	});

    $(document).on('click', ".dropdown-item", function(e){
        $("#dropdownMenuButton1").text($(this).children("input").val());
        $("#category").val($(this).children("input").attr("data-id"))
        e.stopPropagation();
        
	});

    $(document).on('click', ".edit_btn", function(e){
        console.log($(this).parent().siblings("a").children());

        $(this).parent().siblings("a").children("input").attr("disabled", false)
        
	});

    $(document).on('click', ".del_categ", function(e){
        $(".category_id_del").val($(this).attr("data-id"));
        $("form.del_category").submit();
        
	});

    $(document).on('focusout', '.edit_input', function(){
        $(".category_name_edit").val($(this).val());
        $(".category_id_edit").val($(this).attr("data-id"));
        $("form.edit_category").submit();
        $(this).attr("disabled", true);
	});

    $(document).on('submit', 'form.edit_category', function(e){
        $.post($(this).attr("action"), $(this).serialize(), function(res) {

            $("ul.dropdown-menu").html(res);
		});

        return false;
	});

    $(document).on('submit', 'form.del_category', function(e){
        $.post($(this).attr("action"), $(this).serialize(), function(res) {

            $("ul.dropdown-menu").html(res);
		});

        return false;
	});

    $('input[type=file]').change( function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
        var item = `<li class='row align-items-center ui-state-default'>
                    <i class='handle fas fa-bars col-1'></i>
                    <div class='col-4'>
                        <div class='img_container'>
                            <img src='`+ tmppath +`' alt='mouse' />
                        </div>
                    </div>
                    <p class='col-3'>`+ event.target.files[0]["name"] +`</p>
                    <i class='fas fa-trash col-1'></i>
                    <input class='col-1' type='checkbox' />
                    <p class='col-1 m-0 p-0'>main</p>
                </li>`;
        $("#sortable").prepend(item);
    });

    $(document).on('submit', '#get_product', function(){
        
        $.post($(this).attr("action"), $(this).serialize(), function(res) {
            console.log(res);
            $("#edit_prd_id").val(res.id);
            $("#edit_name").val(res.name);
            $("#edit_description").val(res.description);
            $("#edit_stocks").val(res.inventory);
            $("#edit_price").val(res.price);
            $("#preview").attr("href", "http://slicktech.com/products/show/" + res.id);
		}, "JSON");

        return false;
	});

    $(document).on('click', "#edit_btn_product", function(e){
        $("#edit_id").val($(this).attr("data-id"));
        $("#get_product").submit();
	});

    $(document).on('submit', 'form#product_update', function(){

        $.post($(this).attr("action"), $(this).serialize(), function(res) {
            console.log(res);
            $(".data").html(res);
		});
		
	    return false;
	});
   
});
