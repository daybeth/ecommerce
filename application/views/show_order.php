<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/stylesheets/show_order.css">
	<title>Document</title>
</head>
<body>
<?php $this->load->view('/headers/admin_header') ?>
	<div id="left_info">
		<h3>Order ID <?= $order["id"] ?></h3>
		<h4>Customer shipping info:</h4>
		<p>Name: <?= $order["shipping_name"] ?></p>
		<p>Address: <?= $order["shipping_address"] ?></p>
		<h4>Customer billing info:</h4>
		<p>Name: <?= $order["billing_name"] ?></p>
		<p>Address: <?= $order["billing_address"] ?></p>
	</div>
	<div id="right_info">
		<table>
			<thead>
				<th id="column1">ID</th>
				<th class="column">Item</th>
				<th class="column">Price</th>
				<th class="column">Quantity</th>
				<th class="column">Total</th>
			</thead>
			<tbody>
<?php  
				foreach ($orderqty as $qty) {
?>
					<tr>
						<td><?= $qty["Product_id"] ?></td>
						<td><?= $qty["name"] ?></td>
						<td>$<?= $qty["price"] ?></td>
						<td><?= $qty["product_quantity"] ?></td>
						<td><?= $order["id"] ?></td>
					</tr>
<?php
				}
?>
			</tbody>
		</table>
		<p id="status_box">Status: <?= strtoupper($order["status"]) ?></p>
		<div id="total_price">
			<p>Total: $<?= $order["total"] ?></p>
		</div>
	</div>
</body>
</html>