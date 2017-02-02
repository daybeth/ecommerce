<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/assets/stylesheets/dashboard_products.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/js/pagination_dashboard_products.js"></script>
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
		<tbody class="tbody">


		</tbody>
	</table>
	<div class="pages"></div>

</body> 
</html>
