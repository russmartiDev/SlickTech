<?php 
        $this->load->view("partials/header"); 
?>
        <!-- main style -->
        <link rel="stylesheet/less" type="text/css" href="<?= base_url("Assets/style/show_products.less")?>">
        <!-- less library -->
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
        <title>All products</title>
    </head>
    <body>
<?php
        $this->load->view("partials/navigation"); 
?>
        <!------------------------Product--------------------------->
		<div class="row product">
			<div class="col-12 col-md-6">
                <!------------------------Product Images--------------------------->
				<div class="slider">
					<div class="fotorama" data-width="100%" data-autoplay="2000" data-nav="thumbs">
<?php
						foreach(json_decode($product["img_url"], true) as $img)
						{
?>
							<img src="<?= $img; ?>" />
<?php
						}
?>
						
					</div>
				</div>
			</div>
            <!------------------------Product Info--------------------------->
			<div class="col-12 col-md-6 text-light">
				<div class="row gy-2">
					<h1 class="col-12"><?= $product["name"] ?></h1>
					<p class="col-12">Date added: <?= $product["created_at"] ?></p>
					<p class="col-6">Stocks: <?= $product["inventory"] ?> pcs</p>
					<p class="col-6">Sold: <?= $product["sold"] ?> pcs</p>
					<p class="col-12">Price: $<?= $product["price"] ?></p>
					<p class="col-12"><?= $product["description"] ?></p>
					<div class="col-7 col-sm-5 col-md-6 col-lg-5 d-block me-0 ms-auto">
                        <!------------------------Select Quantity--------------------------->
						<select class="form-select" aria-label="Disabled select example">
<?php
						for($i = 1; $i <= 3; $i++)
						{
?>
							<option value="<?= $i; ?>"><?= $i; ?> ($<?= $product["price"] * $i ?>)</option>
<?php
						}
?>
						</select>
						<input type="button" class="btn btn-success w-100 mt-2 fs-4" value="Add to cart">
					</div>
				</div>
			</div>
		</div>
        <!------------------------Similar Items--------------------------->
		<div class="container text-light">
			<h2>Similar items</h2>
            <!------------------------Item List--------------------------->
			<div class="row gy-3">
				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div></div>
						<div class="img_container">
							<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse" />
						</div>
						<a href="show_products.html" class="d-block">Keyboard</a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $1000</p>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div class="img_container">
							<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse" />
						</div>
						<a href="show_products.html" class="d-block">Keyboard</a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $1000</p>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div class="img_container">
							<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse" />
						</div>
						<a href="show_products.html" class="d-block">Keyboard</a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $1000</p>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div class="img_container">
							<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse" />
						</div>
						<a href="show_products.html" class="d-block">Keyboard</a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $1000</p>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div class="img_container">
							<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse" />
						</div>
						<a href="show_products.html" class="d-block">Keyboard</a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $1000</p>
					</div>
				</div>
                
				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div class="img_container">
							<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse" />
						</div>
						<a href="show_products.html" class="d-block">Keyboard</a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $1000</p>
					</div>
				</div>
			</div>
		</div>
        <!------------------------Customer Also Bought--------------------------->
		<div class="container text-light">
			<h2>Customers who bought this item also bought</h2>
			<div class="row gy-3">
                <!------------------------Item List--------------------------->
				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div class="img_container">
							<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse" />
						</div>
						<a href="show_products.html" class="d-block">Keyboard</a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $1000</p>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div class="img_container">
							<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse" />
						</div>
						<a href="show_products.html" class="d-block">Keyboard</a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $1000</p>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div class="img_container">
							<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse" />
						</div>
						<a href="show_products.html" class="d-block">Keyboard</a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $1000</p>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div class="img_container">
							<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse" />
						</div>
						<a href="show_products.html" class="d-block">Keyboard</a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $1000</p>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div class="img_container">
							<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse" />
						</div>
						<a href="show_products.html" class="d-block">Keyboard</a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $1000</p>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div class="img_container">
							<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse" />
						</div>
						<a href="show_products.html" class="d-block">Keyboard</a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $1000</p>
					</div>
				</div>
			</div>
		</div>
        <!------------------------Reviewt--------------------------->
		<div class="container text-light">

            <!------------------------add review--------------------------->
<?php
		if(!empty($this->session->userdata("user_id")))
		{
?>		
			<form action="/Comments/add_comment" method="POST">
				<h2>Leave a review</h2>
				<input type="hidden" name="product_id" value="1" />
				<input type="hidden" name="user_id" value="1" />
				<textarea placeholder="Write a comment" name="content" class="form-control" rows="3"></textarea>
				<input type="submit" class="btn-lg btn-outline-primary mt-2 d-block me-0 ms-auto" value="Review" />
			</form>
<?php
    	}
?>
            <!------------------------Review List--------------------------->
			<ul>
<?php
			// Review
			for($j = 0; $j < 3; $j++)
			{
?>
				<li class="comment">
					<h3 class="d-inline-block">Russell</h3>
					<p class="d-inline-block text-secondary ms-4 mb-0">(june 5, 2022)</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt harum assumenda incidunt rerum necessitatibus voluptas, porro temporibus consectetur quisquam enim officiis, deleniti aut eos adipisci nulla voluptatem ipsum odit.</p>
                    <!------------------------Reply List--------------------------->
					<ul>
<?php
					// Repy
					for($i = 0; $i < 3; $i++)
					{
?>
						<li class="mt-4">
							<h4 class="d-inline-block"><i class="fas fa-level-up-alt fa-rotate-90 me-2 text-info"></i>Russell</h4>
							<p class="d-inline-block text-secondary ms-4 mb-0">(june 5, 2022)</p>
							<p class="ms-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid temporibus doloremque nihil odit porro blanditiis ipsa eveniet harum sapiente repellendus dolores perspiciatis ab aliquam dignissimos ullam consectetur, earum iusto in!</p>
						</li>
<?php
    				}
?>
					</ul>
					<a href="#" class="more">Show more replies <i class="fas fa-angle-down"></i></a>
                    <!------------------------add a reply--------------------------->
<?php
				if(!empty($this->session->userdata("user_id")))
				{
?>		
					<form action="/comments/add_reply" method="post">
						<input type="hidden" name="comment_id" value="1" />
						<input type="hidden" name="user_id" value="1" />
						<input type="hidden" name="product_id" value="1" />
						<textarea placeholder="Write a reply" name="content" class="form-control mb-4" rows="3"></textarea>
						<input type="submit" class="btn-lg btn-outline-primary mt-2 d-block me-0 ms-auto" value="reply" />
					</form>
<?php
    			}
?>
				</li>
<?php
    		}
?>
			</ul>
			<a href="#" class="more">Show more reviews <i class="fas fa-angle-down"></i></a>
		</div>
	</body>
</html>
