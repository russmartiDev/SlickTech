<?php 
        $this->load->view("partials/header"); 
?>
        <!-- main style -->
        <link rel="stylesheet/less" type="text/css" href="<?= base_url("Assets/style/cart.less")?>">
		<script src="<?= base_url("Assets/script/cart.js")?>"></script>
        <!-- less library -->
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <title>All products</title>
    </head>
    <body>
<?php
        $this->load->view("partials/navigation"); 
?>

    <h1 class="text-light"><i class="fas fa-shopping-cart"></i> Cart</h1>
    <!---------------------Cart Item Table-------------------------------->
    <form action="/Carts/add_order" method="post" class="row" id="add_order" data-cc-on-file="false" data-stripe-publishable-key="<?= $this->config->item('stripe_key') ?>">
        <div class="table-container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th class="col-1" scope="col-1">Select</th>
                        <th class="col" scope="col-1">item name</th>
                        <th class="col-2" scope="col-1">price</th>
                        <th class="col-2" scope="col-1">quantity</th>
                        <th class="col-2" scope="col-1">total</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <!---------------------Total-------------------------------->
        <div class="total mb-5 text-light">
            <p id="total_text">TOTAL: $</p>
            <a href="/products/all_products/1"><input type="button" class="btn btn-success" value="Continue Shopping"></a>
        </div>
        <!---------------------Information-------------------------------->
        <div class="container text-light row" id="information">
            

                <!---------------------Shipping information-------------------------------->
                    <div class="col-12 col-lg-6 ship">
                        <h2 class="row">Shipping Information</h2>
                        <input class="form-check-input" type="checkbox" value="" id="default_shipping">
                        <label class="form-check-label mb-1" for="defaultCheck1">use default</label> 
                        <!---------------------Shipping Input fields------------------------------->
                        <div class="row">
                            <p class="col-4">First name: </p>
                            <input class="col-8" type="text" name="shipping_first_name" required>
                        </div>

                        <div class="row">
                            <p class="col-4">Last name: </p>
                            <input class="col-8" type="text" name="shipping_last_name" required>
                        </div>
                        
                        <div class="row">
                            <p class="col-4">Address: </p>
                            <input class="col-8" type="text" name="shipping_address" required>
                        </div>

                        <div class="row">
                            <p class="col-4">Address 2: </p>
                            <input class="col-8" type="text" name="shipping_address_2">
                        </div>

                        <div class="row">
                            <p class="col-4">City: </p>
                            <input class="col-8" type="text" name="shipping_city" required>
                        </div>

                        <div class="row">
                            <p class="col-4">State: </p>
                            <input class="col-8" type="text" name="shipping_states" required>
                        </div>

                        <div class="row">
                            <p class="col-4">Zip code: </p>
                            <input class="col-8" type="text" name="shipping_zipcode" required>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <!---------------------Billing Information-------------------------------->
                        <h2 class="row">Billing Information</h2>
                        <input class="form-check-input" type="checkbox" value="" id="default_billing">
                        <label class="form-check-label mb-1" for="defaultCheck1">Same as shipping</label> 
                        <!---------------------Billing Inputfields------------------------------->
                        <div class="row">
                            <p class="col-4">First name: </p>
                            <input class="col-8" type="text" name="billing_first_name" required>
                        </div>
                    
                        <div class="row">
                            <p class="col-4">Last name: </p>
                            <input class="col-8" type="text" name="billing_last_name" required>
                        </div>

                        <div class="row">
                            <p class="col-4">Address: </p>
                            <input class="col-8" type="text" name="billing_address" required>
                        </div>

                        <div class="row">
                            <p class="col-4">Address 2: </p>
                            <input class="col-8" type="text" name="billing_address_2">
                        </div>

                        <div class="row">
                            <p class="col-4">City: </p>
                            <input class="col-8" type="text" name="billing_city" required>
                        </div>

                        <div class="row">
                            <p class="col-4">State: </p>
                            <input class="col-8" type="text" name="billing_states" required>
                        </div>

                        <div class="row">
                            <p class="col-4">Zip code: </p>
                            <input class="col-8" type="text" name="billing_zipcode" required>
                        </div>

                        <div class="row">
                            <p class="col-4">Card: </p>
                            <input class="col-8" type="number">
                        </div>
                        
                        <div class="row">
                            <p class="col-4">Security code: </p>
                            <input class="col-8" type="number">
                        </div>

                        <div class="row">
                            <p class="col-4">Expiration: </p>
                            <input class="col-3" type="number">
                            <p class="col-2 text-center">/</p>
                            <input class="col-3" type="number">
                        </div>
                    </div>

        </div>
        <!---------------------Pay button------------------------------->

        <div class="pay">
            <input type="submit" class="btn btn-primary mt-3" id="total_pay">
        </div>
    </form>
 

</body>
</html>