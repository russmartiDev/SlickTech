<?php 
        $this->load->view("partials/admin_header"); 
?>
        <!-- main style -->
        <link rel="stylesheet/less" type="text/css" href="<?= base_url("Assets/style/admin_products.less")?>">
		<script src="<?= base_url("Assets/script/admin_product_list.js")?>"></script>
        <!-- less library -->
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

        <title>Show</title>
    </head>
    <body>
<?php
		$this->load->view("partials/admin_nav")
?>

		
		<div class="mb-3 row">
			<div class="col-6 col-md-3">
				<!------Search-------->
				<form action="/admins/product_list_partial/1" data-link="/admins/product_list_partial/" method="post" class="product_list">
					<div class="input-group">
						<button class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></button>
						<input type="text" name="search" class="form-control" placeholder="search" aria-label="search" aria-describedby="basic-addon1" />
					</div>
				</form>

			</div>
			<div class="col-0 col-md-7 space"></div>
			<!------Add product-------->
			<div class="col-6 col-md-2">
                <button  class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#product">add new product</button>
			</div>
		</div>
		<!------Product Table-------->
		<div class="data">
			
		</div>

		<!-- ------------------------------------------Delete modal------------------------------------------------------------- -->
		<form action="/admins/delete_product/" data-link="/admins/delete_product/" method="post" class="del_form">
			<div class="modal fade" id="delete_product" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">Delete product</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<input type="hidden" name="id" value="1" />
							<p>Are you sure you want to delete this product?</p>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-danger" data-bs-dismiss="modal" value="delete" />
						</div>
					</div>
				</div>
			</div>
		</form>

<?php
		$this->load->view("partials/update_product");
		$this->load->view("partials/edit_product");
?>
	</body>
</html>
