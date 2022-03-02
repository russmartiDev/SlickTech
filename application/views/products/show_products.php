<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Info</title>
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
    <link rel="stylesheet/less" type="text/css" href=" <?= base_url("assets/style/products/show_products.less"); ?>">
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

  
    <div class="row product">

    <div class="col-12 col-md-6">
        <div class="slider ">
            <div class="fotorama" data-width="100%" data-autoplay="2000" data-nav="thumbs">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80">
            </div>
        </div>
    </div>
        

        <div class="col-12 col-md-6 text-light">
            <div class="row gy-2">
                <h1 class="col-12">mouse</h1>
                <p class="col-12">Date added: June 5 2000</p>
                <p class="col-6">Stocks: 3pcs</p>
                <p class="col-6">Sold: 3 pcs</p>
                <p class="col-12">Price: $100</p>
                <p class="col-12">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem illum distinctio beatae iste facilis. Ad unde sint, accusantium id repudiandae fugiat rem, et neque dicta ab nostrum earum velit placeat.</p>
                <div class="col-7 col-sm-5 col-md-6 col-lg-5">
                    <div class="row w-100 cart gx-1">
                        <div class="col-4">
                            <button type="button" class="btn-danger form-control shadow-none " value="-" >-</button>
                        </div>
                        <div class="col-4 ">
                            <input type="number" class="col-5 form-control mt-0 align-top d-flex " value="0">
                        </div>
                        <div class="col-4">
                            <button type="button" class="col-1 btn-success form-control shadow-none" value="+" >+</button>
                        </div>
                        <div class="col-2">
                        </div>
                        <input type="submit" class="col-5 btn btn-outline-primary w-100 text-center mt-2" value="Add To Cart">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-light">
        <h2>Similar items</h2>
        <div class="row gy-3">
            
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
                    <p>Price: $1000</p>
                
                </div>
            </div>

        </div>
    </div>

    <div class="container text-light">
        <h2>Customers who bought this item also bought</h2>
        <div class="row gy-3">
            
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

        </div>
    </div>

    <div class="container text-light">
<?php
    // if(!empty($this->session->userdata("user_id")))
    // {
?>
        <form action="/Comments/add_comment" method="POST">
            <h2>Leave a review</h2>
            <input type="hidden" name="product_id" value="1">
            <input type="hidden" name="user_id" value="1">
            <textarea placeholder="Write a comment" name="content" class="form-control" rows="3"></textarea>
            <input type="submit" class="btn-lg btn-outline-primary mt-2 d-block me-0  ms-auto" value="Comment">
        </form>
<?php
    // }
?>
        <ul>
<?php
        // foreach($review as $review)
        // {
?>
            <li class="comment">
                <h3 class="d-inline-block">Russell</h3>
                <p class="d-inline-block text-secondary ms-4 mb-0 ">(june 5, 2022)</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt harum assumenda incidunt rerum necessitatibus voluptas, porro temporibus consectetur quisquam enim officiis, deleniti aut eos adipisci nulla voluptatem ipsum odit.</p>
                
                <ul>
<?php
                // foreach($review["replies"] as $reply)
                // {
?>

                    <li class="mt-4">
                        <h4 class="d-inline-block"><i class="fas fa-level-up-alt fa-rotate-90 me-2 text-info "></i>Russell</h4>
                        <p class="d-inline-block text-secondary ms-4 mb-0">(june 5, 2022)</p>
                        <p class="ms-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid temporibus doloremque nihil odit porro blanditiis ipsa eveniet harum sapiente repellendus dolores perspiciatis ab aliquam dignissimos ullam consectetur, earum iusto in!</p>
                    </li>

                    <li class="mt-4">
                        <h4 class="d-inline-block"><i class="fas fa-level-up-alt fa-rotate-90 me-2 text-info "></i>Russell</h4>
                        <p class="d-inline-block text-secondary ms-4 mb-0">(june 5, 2022)</p>
                        <p class="ms-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid temporibus doloremque nihil odit porro blanditiis ipsa eveniet harum sapiente repellendus dolores perspiciatis ab aliquam dignissimos ullam consectetur, earum iusto in!</p>
                    </li>

                </ul>
                <a href="#" class="more">Show more replies <i class="fas fa-angle-down"></i></a>
<?php
                // }
                // if(!empty($this->session->userdata("user_id")))
                // {
?>
                    <form action="/comments/add_reply" method="post">
                        <input type="hidden" name="comment_id" value="1">
                        <input type="hidden" name="user_id" value="1">
                        <input type="hidden" name="product_id" value="1">
                        <textarea placeholder="Write a reply" name="content" class="form-control mb-4" rows="3"></textarea>
                        <input type="submit" class="btn-lg btn-outline-primary mt-2 d-block me-0  ms-auto" value="reply">
                    </form>
<?php
                // }
?>
            </li>     
        </ul>
        <a href="#" class="more">Show more reviews <i class="fas fa-angle-down"></i></a>
    </div>

</body>
</html>