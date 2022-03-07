<?php 
        $this->load->view("partials/header"); 
?>
        <!-- main style -->
        <link rel="stylesheet/less" type="text/css" href="<?= base_url("Assets/style/all_products.less")?>">
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
                    <form action="/search" method="post" class="row gy-1 mt-5 ">
                        <input class="col-12 mt-3 form-control" type="text" placeholder="Search" name="search">
                        <p class="text-light fw-bold m-0 mb-2 mt-3">Categories</p>
                        <a href="#" class="text-light col-12 text-decoration-none">Keyboards</a>
                        <a href="#" class="text-light col-12 text-decoration-none">Mouse</a>
                        <a href="#" class="text-light col-12 text-decoration-none">Monitor</a>
                        <a href="#" class="text-light col-12 text-decoration-none">Keyboards</a>
                        <a href="#" class="col-12 text-decoration-none">Show more</a>
                    </form>
                </div>
                <!---------------------Filter Mobile -------------------->
                <div class="row col-12 col-lg-10 gy-3 m-0 p-0">
                    <div class="col-12 row">
                        <h1 class="col-12 col-md-6 m-0 mt-3 p-0">All Products</h1>
                        <div class="row gx-1 mobile-filter">
                            <h4 class="col-4 col-sm-3 col-md-2">Sort by: </h4>
                            <!---------------------Mobile Sort-------------------->
                            <div class="col-12 row gx-0 mb-4">
                                <div class="col-1">
                                    <input type="radio" class="btn-check" name="options-outlined" id="All" autocomplete="off">
                                    <label class="btn btn-outline-light w-100" for="All">All</label>
                                </div>
                                <div class="col-3">
                                    <input type="radio" class="btn-check" name="options-outlined" id="Top_sales" autocomplete="off">
                                    <label class="btn btn-outline-light w-100" for="Top_sales">Top sales</label>
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
                                        <li><a class="dropdown-item" href="#">Category 1</a></li>
                                        <li><a class="dropdown-item" href="#">Category 2</a></li>
                                        <li><a class="dropdown-item" href="#">Category 3</a></li>
                                        <li><a class="dropdown-item" href="#">Category 4</a></li>
                                        <li><a class="dropdown-item" href="#">Category 5</a></li>
                                        <li><a class="dropdown-item" href="#">Category 6</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!---------------------Desktop Sort-------------------->
                        <div class="col-3  mt-4 filter">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Sort By</option>
                                <option value="1">Price</option>
                                <option value="2">Top sales</option>
                                <option value="3">Most popular</option>
                            </select>
                        </div>
                        <!---------------------Top Page Nav-------------------->
                        <div class="col-3 filter nav">
                            <p><a href="">first</a>|<a href="">prev</a>|>2|<a href="">next</a></p>
                            
                        </div>
                    </div>
                    <!---------------------Product List-------------------->
                    <div id="product_list">
                    <ul>
                        <li class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="item-card ">
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

                
                </div>
            </div>
        <!---------------------Botto Page Nav-------------------->
        <div class="page mb-4 w-100 text-center">
            <a href="#"><</a><a href="#"><<</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a><a href="#">7</a><a href="#">8</a><a href="#">9</a><a href="#">10</a><a href="#">></a><a href="#">>></a>
        </div>
        
        

    </body>
</html>