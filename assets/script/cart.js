
$(document).ready(function () {

    $.get('/carts/get_cart_items', function(res) {
        $('tbody').html(res);
        $("#total_text").html("Total Price: " + $("#total_price").val());
        $("#total_pay").val("Pay " + $("#total_price").val());
    });

    var default_shipping;
    $.get('/users/get_default_shipping', function(res) {
        console.log(res);
        default_shipping = res;
    }, "JSON");

    $(document).on('change', '#default_shipping', function() {
        var checkbox = $(this), // Selected or current checkbox
            value = checkbox.val(); // Value of checkbox
    
        if (checkbox.is(':checked'))
        {
            $(this).parent().find("input[type=text]").prop('disabled', true);
            $("input[name=shipping_first_name]").val(default_shipping.shipping_first_name);
            $("input[name=shipping_last_name]").val(default_shipping.shipping_last_name);
            $("input[name=shipping_address]").val(default_shipping.shipping_address);
            $("input[name=shipping_address_2]").val(default_shipping.shipping_address_2);
            $("input[name=shipping_city]").val(default_shipping.shipping_city);
            $("input[name=shipping_states]").val(default_shipping.shipping_states);
            $("input[name=shipping_zipcode]").val(default_shipping.shipping_zipcode);
        }
        else
        {
            $(this).parent().find("input[type=text]").val("");
            $(this).parent().find("input[type=text]").prop('disabled', false);
        }
    });

    
    $(document).on('change', '#default_billing', function() {
        var checkbox = $(this), // Selected or current checkbox
            value = checkbox.val(); // Value of checkbox
    
        if (checkbox.is(':checked'))
        {
            $(this).parent().find("input[type=text]").prop('disabled', true);
            $("input[name=billing_first_name]").val($("input[name=shipping_first_name]").val());
            $("input[name=billing_last_name]").val($("input[name=shipping_last_name]").val());
            $("input[name=billing_address]").val($("input[name=shipping_address]").val());
            $("input[name=billing_address_2]").val($("input[name=shipping_address_2]").val());
            $("input[name=billing_city]").val($("input[name=shipping_city]").val());
            $("input[name=billing_states]").val($("input[name=shipping_states]").val());
            $("input[name=billing_zipcode]").val( $("input[name=shipping_zipcode]").val());

        }
        else
        {
            $(this).parent().find("input[type=text]").val("");
            $(this).parent().find("input[type=text]").prop('disabled', false);
        }
    });

    $stripeForm = $("form#add_order");
    $('form#add_order').bind('submit', function (e) {
        $(this).find("input[type=text]").prop('disabled', false);
        if (!$stripeForm.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($stripeForm.data('stripe-publishable-key'));
            Stripe.createToken({
                number: "4242424242424242",
                cvc: "321",
                exp_month: "01",
                exp_year: "2025"
            }, stripeResponseHandler);
        }

    });
        

    function stripeResponseHandler(status, res) {
        if (res.error) {
            console.log("error");
        } else {
            var token = res['id'];
            console.log(token);
            $stripeForm.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $stripeForm.get(0).submit();
            $.notify("Order added", {
                className : "success",
                position : "top center",
                autoHideDelay: 2000,
            });
        }
    }

 
});
