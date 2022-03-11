<?php 
        $this->load->view("partials/header"); 
?>
        <!-- main style -->
        <link rel="stylesheet/less" type="text/css" href="<?= base_url("Assets/style/show_products.less")?>">
		<script src="<?= base_url("Assets/script/show_products.js")?>"></script>
        <!-- less library -->
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
        <title>Show</title>
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
						<form action="/carts/add_cart" method="post" id="add_cart">
							<input type="hidden" name="product_id" value="<?= $product["id"] ?>" />
							<input type="hidden" name="user_id" value="<?= $this->session->userdata("user_id"); ?>" />
							<select name="quantity" class="form-select" aria-label="Disabled select example">
<?php
							for($i = 1; $i <= 3; $i++)
							{
?>
								<option value="<?= $i; ?>"><?= $i; ?> ($<?= $product["price"] * $i ?>)</option>
<?php
							}
?>
							</select>
							<input type="submit" class="btn btn-success w-100 mt-2 fs-4" value="Add to cart">	
						</form>

					</div>
				</div>
			</div>
		</div>
        <!------------------------Similar Items--------------------------->
		<div class="container text-light">
			<h2>Similar items</h2>
            <!------------------------Item List--------------------------->
			<div class="row gy-3">
<?php
			foreach($similar as $similar)
			{
?>
				<div class="col-6 col-sm-4 col-lg-2">
					<div class="item-card">
						<div></div>
						<div class="img_container">
							<img src="<?= array_values(json_decode($similar["img_url"], true))[0]; ?>" />
						</div>
						<a href="/products/show/<?= $similar["id"]; ?>" class="d-block"><?= $similar["name"]; ?></a>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<p>Price: $<?= $similar["price"]; ?></p>
					</div>
				</div>
<?php
			}
?>	
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
			<form action="/reviews/add_comment" method="POST" class="add_comment">
				<h2>Leave a review</h2>
				<input type="hidden" name="product_id" value="<?= $product["id"] ?>" />
				<input type="hidden" name="user_id" value="<?= $this->session->userdata("user_id"); ?>" />
				<textarea placeholder="Write a comment" name="content" class="form-control" rows="3"></textarea>
				<input type="submit" class="btn-lg btn-outline-primary mt-2 d-block me-0 ms-auto" value="Review" />
			</form>
<?php
    	}
?>
			<div id="review_list">

			</div>
            <!------------------------Review List--------------------------->

		</div>
	</body>
</html>
