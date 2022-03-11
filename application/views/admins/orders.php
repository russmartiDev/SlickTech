<?php 
        $this->load->view("partials/admin_header"); 
?>
        <!-- main style -->
        <link rel="stylesheet/less" type="text/css" href="<?= base_url("Assets/style/orders.less")?>">
		<script src="<?= base_url("Assets/script/orders.js")?>"></script>
        <!-- less library -->
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
        <title>Show</title>
    </head>
    <body>
<?php
		$this->load->view("partials/admin_nav")
?>
		<form action="/admins/order_list/" data-link="/admins/order_list/" method="post" class="mb-3 row orders">
            <!-----Search------------------------------------>
			<div class="col-6 col-md-3">
				<div class="input-group">
					<button class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></button>
					<input type="text" class="form-control search" placeholder="search" aria-label="search" name="search" />
				</div>
			</div>
			<div class="col-0 col-md-7 space"></div>
			<div class="col-6 col-md-2">
                <!-----Status Sort----------------------------------->
				<select class="form-select" aria-label="Default select example" name="filter">
					<option selected value="">Show all</option>
					<option value="1">Order in process</option>
					<option value="2">Shipped</option>
					<option value="3">Cancelled</option>
				</select>
			</div>
		</form>
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

				</tbody>
			</table>
		</div>
        <!-----Pagination----------------------------------->
		<div class="page">
            <a href="#"><</a><a href="#"><<</a>
<?php
		for($i = 0; $i <= $count; $i++)
		{
?>
			<button class = "button-page"><?= $i + 1?></button>
<?php
		}
?>
	
			<a href="#">></a><a href="#">>></a>
		</div>
	</body>
</html>
