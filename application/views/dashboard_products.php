<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/stylesheets/dashboard_products.css">
	<title>Document</title>
</head>
<body>
	<div id="search_bar">
		Missing search bar
		<form action="/products/add_product">
			<input type="submit" value="Add new product" id="add_button">
		</form>
	</div>
	<table>
		<thead>
			<th id="column1">Picture</th>
			<th id="column2">ID</th>
			<th id="column3">Name</th>
			<th class="column4">Inventory Count</th>
			<th class="column4">Quantity Count</th>
			<th class="column4">Action</th>
		</thead>
		<tbody>
<?php 		foreach($products as $product){ ?>
			<tr>
				<td>image here</td>
				<td><?= $product['id'] ?></td>
				<td><?= $product['name'] ?></td>
				<td><?= $product['inventory_count'] ?></td>
				<td><?= $product['quantity_sold'] ?></td>
				<td class="column5"><a href="/products/edit_product/<?= $product['id'] ?>">Edit</a>
					<a href="/products/delete_product/<?= $product['id'] ?>">Delete</a></td>
			</tr>
<?php 		} ?>
		</tbody>
	</table>
	Missing pagination
</body>
</html>