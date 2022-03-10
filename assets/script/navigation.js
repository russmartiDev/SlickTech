$(document).ready(function(){

    $.get('/Carts/count_cart', function(res) {
        $(".cart-count").html(res);
    });


});