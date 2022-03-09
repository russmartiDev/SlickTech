<?php 
        $this->load->view("partials/header"); 
?>
        <!-- main style -->
        <link rel="stylesheet/less" type="text/css" href="<?= base_url("Assets/style/all_products.less")?>">
        <script src="<?= base_url("Assets/script/all_products.js")?>"></script>
        <!-- less library -->
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
        <title>All products</title>
    </head>
    <body>
<?php
        $this->load->view("partials/navigation"); 
?>
        <!---------------------Main Container-------------------->
        <div class="container text-light">

            <div class="row gx-1">
                <!---------------------Filter Desktop -------------------->
                <div class="col col-2 filter">
                    <form action="/products/search_product/1" method="get" class="mt-5 ">
                        <input class="col-12 mt-3 form-control" type="search" placeholder="Search" name="search">
                    </form>
                    <p class="text-light fw-bold m-0 mb-2 mt-3 ms-4">Categories</p>
<?php
                    foreach($categories as $category)
                    {
?>
                    <a href="/products/category/<?= $category["id"]; ?>/1" class="text-light ms-4 text-decoration-none d-block"><?= $category["name"]; ?></a>
<?php
                    }
?>
                    <a href="#" class="col-12 text-decoration-none ms-4">Show all</a>
                
                </div>
                <!---------------------Filter Mobile -------------------->
                <div class="row col-12 col-lg-10 gy-3 m-0 p-0">
                    <div class="col-12 row">
                        <h1 class="col-12 col-md-6 m-0 mt-3 p-0">All Products</h1>
                        <div class="row gx-1 mobile-filter">
                            <h4 class="col-4 col-sm-3 col-md-2">Sort by: </h4>
                            <!---------------------Mobile Sort-------------------->
                            <div class="col-12 row gx-0 mb-4">
                                <div class="col-2">
                                    <input type="radio" class="btn-check" name="options-outlined" id="All" autocomplete="off">
                                    <label class="btn btn-outline-light w-100" for="All">All</label>
                                </div>
                                <div class="col-4">
                                    <input type="radio" class="btn-check" name="options-outlined" id="most_popular" autocomplete="off">
                                    <label class="btn btn-outline-light w-100" for="most_popular">Most Popular</label>
                                </div>
                                <div class="col-2">
                                    <input type="radio" class="btn-check" name="options-outlined" id="price" autocomplete="off">
                                    <label class="btn btn-outline-light w-100" for="price">Price</label>
                                </div>
                                <!---------------------Mobile Category Filter-------------------->
                                <div class="category col-2">
                                    <button type="button" class="btn btn-light dropdown-toggle p-1" data-bs-toggle="dropdown" aria-expanded="false">
                                        category
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><input type="search" class="dropdown-item" placeholder="search category"></li>
<?php
                                    foreach($categories as $category)
                                    {
?>
                                        <li><a class="dropdown-item" href="/products/category/<?= $category["id"]; ?>"><?= $category["name"]; ?></a></li>
<?php
                                    }
  ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!---------------------Desktop Sort-------------------->
                        <div class="col-3  mt-4 filter">
                            <form action="" method="get">
                                <select class="form-select" aria-label="Default select example" name="sort">
                                    <option selected>Sort By</option>
                                    <option value="price">Price</option>
                                    <option value="sold">Most popular</option>
                                </select>
                            </form>
                        </div>
                        <!---------------------Top Page Nav-------------------->
                        <div class="col-3 filter nav">
                            <p><a href="1">first</a> | 
                            <a  href="<?= $page > 1 ? $page - 1 : $page; ?>">prev</a> 
                            | <?= $page; ?> | 
                            <a  href="<?= $page < $count ? $page + 1 : $page; ?>" >next</a></p>
                            
                        </div>
                    </div>
                    <!---------------------Product List-------------------->
                    <ul class="row gy-3">
<?php
                        foreach($products as $product)
                        {
?>
                        <li class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="item-card ">
                                <div class="img_container">
                                    <img src="<?= array_values(json_decode($product["img_url"], true))[0]; ?>" alt="mouse">
                                </div>
                                <a href="/products/show/<?= $product["id"]; ?>"" class="d-block text-decoration-none"><?= $product["name"]; ?></a>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <p>Price: $<?= $product["price"]; ?></p>
                            </div>
                        </li>
<?php
                        }
?>
                    </ul>      
                </div>
            </div>
        <!---------------------Botto Page Nav-------------------->
        <div class="page mb-4 w-100 text-center ms-5">
        <a href="1"><<</a><a href="<?= $page > 1 ? $page - 1 : $page; ?>"><</a>
<?php
        $max_page;
        for($i = 0; $i <= $count; $i++)
        {
            $max_page = $i + 1;
?>
            <a class="<?= $i + 1 == $page ? "fw-bold text-light" : FALSE; ?>" href="<?= $i + 1 ?>"><?= $i + 1 ?></a><p class="d-inline-block"> | </p>
<?php       
        }
?>
            <a href="<?= $page < $count ? $page + 1 : $page; ?>">></a><a href="<?= $max_page; ?>">>></a>
        </div>
        
        

    </body>
</html>