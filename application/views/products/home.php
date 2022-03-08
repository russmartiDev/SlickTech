<?php 
        $this->load->view("partials/header"); 
?>
        <!-- main style -->
        <link rel="stylesheet/less" type="text/css" href="<?= base_url("Assets/style/home.less")?>">
        <!-- less library -->
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
        <title>Home</title>
    </head>
    <body>
<?php
        $this->load->view("partials/navigation"); 
?>
    <!-------------------Carousel------------------->
    <div class="slider">
        <div class="fotorama" data-width="100%" data-autoplay="2000">
            <img src="../Assets/img/slide1.jpg">
            <img src="../Assets/img/slide1.jpg">
            <img src="../Assets/img/slide1.jpg">
            <img src="../Assets/img/slide1.jpg">
        </div>
    </div>
    <!---------------------------------------------->
    <!-------------------Products-------------------------------------------------------------------->
    <h1 class="text-center text-light mt-1">Featured Products</h1>
    
    <div class="container w-100">

        <ul class="row align-items-center">

            <li class="col-6 col-md-3 mt-5">
                <div class="item-card">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="show_products.html" class="d-block text-decoration-none">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                </div>
            </li>

            <li class="col-6 col-md-3 mt-5">
                <div class="item-card">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="show_products.html" class="d-block text-decoration-none">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                </div>
            </li>

            <li class="col-6 col-md-3 mt-5">
                <div class="item-card">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="show_products.html" class="d-block text-decoration-none">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                </div>
            </li>

            <li class="col-6 col-md-3 mt-5">
                <div class="item-card">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="show_products.html" class="d-block text-decoration-none">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                </div>
            </li>

            <li class="col-6 col-md-3 mt-5">
                <div class="item-card">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="show_products.html" class="d-block text-decoration-none">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                </div>
            </li>

            <li class="col-6 col-md-3 mt-5">
                <div class="item-card">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="show_products.html" class="d-block text-decoration-none">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                </div>
            </li>

            <li class="col-6 col-md-3 mt-5">
                <div class="item-card">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="show_products.html" class="d-block text-decoration-none">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                </div>
            </li>

            <li class="col-6 col-md-3 mt-5">
                <div class="item-card">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="show_products.html" class="d-block text-decoration-none">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                </div>
            </li>
     

        </ul>
    </div>
    <!------------------------------------------------------------------------------------------------>
    <a href="/products/all_products/1" class="show_all">Show all products</a>

</body>
</html>