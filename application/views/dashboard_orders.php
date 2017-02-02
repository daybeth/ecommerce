<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/stylesheets/dashboard_orders.css">
	<title>Document</title>
</head>
<body>
	<div id="search_bar">
		Missing search bar
		<select name="status" id="status">
			<option class="selected" selected="selected" value="0">Show All</option>
			<option value="shipped">In Process</option>
			<option value="shipped">Shipped</option>
			<option value="shipped">Canceled</option>
		</select>
	</div>
	<table>
		<thead>
			<th class="column">Order ID</th>
			<th id="column2">Name</th>
			<th class="column">Date</th>
			<th id="column1">Shipping Address</th>
			<th class="column">Total</th>
			<th id="column3">Status</th>
		</thead>
		<tbody>
<?php
			foreach ($orders as $order) {
?>
			<tr>
				<td><a href="/orders/show_order/<?= $order["id"] ?>"><?= $order["id"] ?></a></td>
				<td><?= $order["first_name"]. " " .$order["last_name"] ?></td>
				<td><?= $order["date"] ?></td>
				<td><?= $order["billing_address"] ?></td>
				<td>$<?= $order["total"] ?></td>
				<td><?= strtoupper($order["status"]) ?></td>
			</tr>
<?php
			  }  
?>			
		</tbody>
	</table>
	Missing pagination
</body>
</html>

