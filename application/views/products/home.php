<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;500;900&display=swap" rel="stylesheet">
    <!--Jquery library-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- bootstrap library-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- font awesome library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- main style -->
    <link rel="stylesheet/less" type="text/css" href=" <?= base_url("assets/style/products/home.less"); ?>">
    <!-- fortorama library -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    
</head>
<body>
<?php
    $this->load->view("partials/navigation");
?>
<!-- less library -->
<script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
    <div class="slider">
        <div class="fotorama" data-width="100%" data-autoplay="2000">
            <img src="<?= base_url("assets/img/slide1.jpg"); ?>">
            <img src="<?= base_url("assets/img/slide1.jpg"); ?>">
            <img src="<?= base_url("assets/img/slide1.jpg"); ?>">
            <img src="<?= base_url("assets/img/slide1.jpg"); ?>">
        </div>
    </div>

    <h1 class="text-center text-light mt-1">Featured Products</h1>
    
    <div class="container w-100">
        <div class="row align-items-center">
   
            <div class="col-6 col-md-3 mt-5">
                <div class="item-card ">
                    <img src="<?= base_url("assets/img/"); ?>" alt="mouse">
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                   
                </div>
            </div>

            <div class="col-6 col-md-3 mt-5">
                <div class="item-card ">
                    <img src="<?= base_url("assets/img/"); ?>" alt="mouse">
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                   
                </div>
            </div>

            <div class="col-6 col-md-3 mt-5">
                <div class="item-card ">
                    <img src="<?= base_url("assets/img/"); ?>" alt="mouse">
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                   
                </div>
            </div>

            <div class="col-6 col-md-3 mt-5">
                <div class="item-card ">
                    <img src="<?= base_url("assets/img/"); ?>" alt="mouse">
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                   
                </div>
            </div>

            <div class="col-6 col-md-3 mt-5">
                <div class="item-card ">
                    <img src="<?= base_url("assets/img/"); ?>" alt="mouse">
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                   
                </div>
            </div>

            <div class="col-6 col-md-3 mt-5">
                <div class="item-card ">
                    <img src="<?= base_url("assets/img/"); ?>" alt="mouse">
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                   
                </div>
            </div>

            <div class="col-6 col-md-3 mt-5">
                <div class="item-card ">
                    <img src="<?= base_url("assets/img/"); ?>" alt="mouse">
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                   
                </div>
            </div>

            <div class="col-6 col-md-3 mt-5">
                <div class="item-card ">
                    <img src="<?= base_url("assets/img/"); ?>" alt="mouse">
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                   
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="show_all">Show all products</a>

</body>
</html>