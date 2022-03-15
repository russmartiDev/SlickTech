<?php 
        $this->load->view("partials/admin_header"); 
?>
        <!-- main style -->
        <link rel="stylesheet/less" type="text/css" href="<?= base_url("Assets/style/order_view.less")?>">
        <!-- less library -->
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
        <title>Show</title>
    </head>
    <body>
<?php
		$this->load->view("partials/admin_nav");
		$order_items = json_decode($orders["order_item"], true);
		$order_info = json_decode($orders["order_info"], true);

?>
		<!-------------Order Info---------------->
		<div class="row gx-4">
			<div class="col-9 col-md-3 m-auto mb-3 bg-white p-4">
				<p class="mb-4">Order ID: 1</p>
				<!-------------Shipping Info---------------->
				<p class="fw-bold">Customer shipping info:</p>
				<p>Name: <?= $order_info["shipping_first_name"]. " " . $order_info["shipping_last_name"] ?></p>
				<p>Address: <?= $order_info["shipping_address"]; ?></p>
				<p>City: <?= $order_info["shipping_city"]; ?></p>
				<p>State: <?= $order_info["shipping_states"]; ?></p>
				<p>Zip: <?= $order_info["shipping_zipcode"]; ?></p>
				<!-------------Billing Info---------------->
				<p class="fw-bold">Customer Billing info:</p>
				<p>Name: <?= $order_info["billing_first_name"]. " " . $order_info["billing_last_name"] ?></p>
				<p>Address: <?= $order_info["billing_address"]; ?></p>
				<p>City: <?= $order_info["billing_city"]; ?></p>
				<p>State: <?= $order_info["billing_states"]; ?></p>
				<p>Zip: <?= $order_info["billing_zipcode"]; ?></p>
			</div>
			<div class="col row gy-0">
				<!-------------Ordered Items---------------->
				<div class="table-container col-12 mb-0">
					<table class="table table-light table-striped">
						<thead>
							<tr>
								<th scope="col-1">ID</th>
								<th scope="col-1">Item</th>
								<th scope="col-1">price</th>
								<th scope="col-1">Quantity</th>
								<th scope="col-1">Total</th>
							</tr>
						</thead>
						<tbody>
<?php
						$sub_total = 0;
						foreach($order_items as $item)
						{
							$total = $item["quantity"] * $item["price"];
							$sub_total += $total;
?>	
							<tr>
								<td><?= $item["id"]; ?></td>
								<td><?= $item["name"]; ?></td>
								<td>$<?= $item["price"]; ?></td>
								<td><?= $item["quantity"]; ?></td>
								<td>$<?= $total; ?></td>
							</tr>
<?php
						}
?>
						</tbody>
					</table>
				</div>
				<!-------------Status---------------->
				<div class="order_info col-12 row">
					<div class="col-12 col-md-6">
						<p class="bg-success text-light fs-3 text-center w-50 m-auto mb-3">Status: <?= $status; ?></p>
					</div>
					<!-------------Total---------------->
					<div class="col-12 col-md-6">
						<div class="w-50 m-auto fs-5 text-center">
							<p c>Subtotal: $<?= $sub_total; ?></p>
							<p>Shipping: $100</p>
							<p>Total Price: $<?= $sub_total + 100; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
