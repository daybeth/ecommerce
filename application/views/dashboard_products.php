<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/assets/stylesheets/dashboard_products.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/js/pagination_dashboard_products.js"></script>
</head>
<body>
<?php if(!$this->session->Admin['id'] == 1){redirect("/users");} ?>
<?php $this->load->view('/headers/admin_header') ?>
	<div id="search_bar">
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
