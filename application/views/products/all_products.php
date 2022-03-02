<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
    <link rel="stylesheet/less" type="text/css" href=" <?= base_url("assets/style/products/all_products.less"); ?>">

</head>
<body>
<?php
    $this->load->view("partials/navigation");
?>
<!-- less library -->
<script src="https://cdn.jsdelivr.net/npm/less@4" ></script>


    <div class="container text-light">
        <h2>All products</h2>
        <div class="row gx-1 mb-4">
            <div class="col-4 col-sm-3 col-md-2">
                <h3>Sort by: </h3>
            </div>
            
            <div class="col-12 col-sm-12 col-md-7 col-lg-5 row gx-1">
                <div class="col-2">
                    <input type="radio" class="btn-check" name="options-outlined" id="All" autocomplete="off">
                    <label class="btn btn-outline-light" for="All">All</label>
                </div>
                <div class="col-3">
                    <input type="radio" class="btn-check" name="options-outlined" id="Top_sales" autocomplete="off">
                    <label class="btn btn-outline-light" for="Top_sales">Top sales</label>
                </div>
                <div class="col-4">
                    <input type="radio" class="btn-check" name="options-outlined" id="most_popular" autocomplete="off">
                    <label class="btn btn-outline-light" for="most_popular">Most Popular</label>
                </div>
                <div class="col-3">
                    <input type="radio" class="btn-check" name="options-outlined" id="price" autocomplete="off">
                    <label class="btn btn-outline-light" for="price">Price</label>
                </div>
            </div>

            <div class="btn-group col-6 col-md-auto">
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    category
                </button>
                <ul class="dropdown-menu">
                    <li><input type="search" class="dropdown-item" placeholder="search category"></li>
                    <li><a class="dropdown-item" href="#">Category 1</a></li>
                    <li><a class="dropdown-item" href="#">Category 2</a></li>
                    <li><a class="dropdown-item" href="#">Category 3</a></li>
                    <li><a class="dropdown-item" href="#">Category 4</a></li>
                    <li><a class="dropdown-item" href="#">Category 5</a></li>
                    <li><a class="dropdown-item" href="#">Category 6</a></li>
                </ul>
            </div>
           




        </div>
        <div class="row gy-4">
            
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div >
                    </div>
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price    : $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div >
                    </div>
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price    : $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div >
                    </div>
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price    : $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div >
                    </div>
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price: $1000</p>
                
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="item-card ">
                    <div class="img_container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
                    </div>
                    <a href="/products/show_product/1" class="d-block">Keyboard</a>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <p>Price    : $1000</p>
                
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <a href="#"><</a>
        <a href="#"><<</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">7</a>
        <a href="#">8</a>
        <a href="#">9</a>
        <a href="#">10</a>
        <a href="#">></a>
        <a href="#">>></a>
    </div>

    

</body>
</html>