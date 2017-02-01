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
			<tr>
				<td>XXXXXX</td>
				<td>XXXXXX</td>
				<td>XXXXXX</td>
				<td>XXXXXX</td>
				<td>XXXXXX</td>
				<td id="column5"><a href="/products/edit_product">Edit</a>
					<a href="/products/delete_product">Delete</a></td>
			</tr>
		</tbody>
	</table>
	Missing pagination
</body>
</html>
