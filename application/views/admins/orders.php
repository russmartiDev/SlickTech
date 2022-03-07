<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Orders</title>
		<!--Google fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;500;900&display=swap" rel="stylesheet" />
		<!--Jquery library-->
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<!-- bootstrap library-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<!-- font awesome library-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
		<!-- main style -->
		<link rel="stylesheet/less" type="text/css" href="../Assets/style/orders.less" />
		<link rel="stylesheet/less" type="text/css" href="../assets/style/admin_nav.less">
		<!-- less library -->
		<script src="https://cdn.jsdelivr.net/npm/less@4"></script>
	</head>
	<body>
		
		<nav class="container">
			<div class="row w-100 align-items-center p-4 top-nav navbar fixed-top">
	
				<div class="col-3 col-md-2">
					<a href="#" class="text-dark w-100 dash">Dashboard</a>
				</div>
				
				<div class="col-2 col-md-1">
					<a href="/products/all_products" class="text-dark w-100">Orders</a>
				</div>
	
				
				<div class="col-2 col-md-1">
					<a href="/products/all_products" class="text-dark w-100">Products</a>
				</div>
	
				
				<div class="col text-end ">
					<a href="/products/all_products" class="text-dark w-100">Log off</a>
				</div>
	
	
			</div>
		</nav>

		<div class="mb-3 row">
            <!-----Search------------------------------------>
			<div class="col-6 col-md-3">
				<div class="input-group">
					<button class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></button>
					<input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="basic-addon1" />
				</div>
			</div>
			<div class="col-0 col-md-7 space"></div>
			<div class="col-6 col-md-2">
                <!-----Status Sort----------------------------------->
				<select class="form-select" aria-label="Default select example">
					<option selected>Show all</option>
					<option value="1">Order in process</option>
					<option value="2">Shipped</option>
					<option value="3">Cancelled</option>
				</select>
			</div>
		</div>
        <!-----Order List----------------------------------->
		<div class="table-container">
			<table class="table table-light table-striped">
				<thead>
					<tr>
						<th class="col-1" scope="col-1">Order id</th>
						<th class="col-2" scope="col-1">Name</th>
						<th class="col-1" scope="col-1">Date</th>
						<th class="col" scope="col-1">Billing address</th>
						<th class="col-1" scope="col-1">Total</th>
						<th class="col-2" scope="col-1">status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="">100</a></td>
						<td>Bob</td>
						<td>9/6/2014</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim, qui,</td>
						<td>$143</td>
						<td>
							<select class="form-select" aria-label="Default select example">
								<option value="1">Order in process</option>
								<option value="2">Shipped</option>
								<option value="3">Cancelled</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><a href="">100</a></td>
						<td>Bob</td>
						<td>9/6/2014</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim, qui,</td>
						<td>$143</td>
						<td>
							<select class="form-select" aria-label="Default select example">
								<option value="1">Order in process</option>
								<option value="2">Shipped</option>
								<option value="3">Cancelled</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><a href="">100</a></td>
						<td>Bob</td>
						<td>9/6/2014</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim, qui,</td>
						<td>$143</td>
						<td>
							<select class="form-select" aria-label="Default select example">
								<option value="1">Order in process</option>
								<option value="2">Shipped</option>
								<option value="3">Cancelled</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><a href="">100</a></td>
						<td>Bob</td>
						<td>9/6/2014</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim, qui,</td>
						<td>$143</td>
						<td>
							<select class="form-select" aria-label="Default select example">
								<option value="1">Order in process</option>
								<option value="2">Shipped</option>
								<option value="3">Cancelled</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><a href="">100</a></td>
						<td>Bob</td>
						<td>9/6/2014</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim, qui,</td>
						<td>$143</td>
						<td>
							<select class="form-select" aria-label="Default select example">
								<option value="1">Order in process</option>
								<option value="2">Shipped</option>
								<option value="3">Cancelled</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><a href="">100</a></td>
						<td>Bob</td>
						<td>9/6/2014</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim, qui,</td>
						<td>$143</td>
						<td>
							<select class="form-select" aria-label="Default select example">
								<option value="1">Order in process</option>
								<option value="2">Shipped</option>
								<option value="3">Cancelled</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><a href="">100</a></td>
						<td>Bob</td>
						<td>9/6/2014</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim, qui,</td>
						<td>$143</td>
						<td>
							<select class="form-select" aria-label="Default select example">
								<option value="1">Order in process</option>
								<option value="2">Shipped</option>
								<option value="3">Cancelled</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><a href="">100</a></td>
						<td>Bob</td>
						<td>9/6/2014</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim, qui,</td>
						<td>$143</td>
						<td>
							<select class="form-select" aria-label="Default select example">
								<option value="1">Order in process</option>
								<option value="2">Shipped</option>
								<option value="3">Cancelled</option>
							</select>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
        <!-----Pagination----------------------------------->
		<div class="page">
            <a href="#"><</a><a href="#"><<</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a><a href="#">7</a><a href="#">8</a><a href="#">9</a><a href="#">10</a><a href="#">></a><a href="#">>></a>
		</div>
	</body>
</html>
