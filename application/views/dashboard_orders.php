<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Document</title>
	<link rel="stylesheet" href="/assets/stylesheets/dashboard_orderss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/js/pagination_dashboard_orders.js"></script>

</head>
<body>
<?php $this->load->view('/headers/admin_header') ?>
	<div id="search_bar">
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
			<th class="column2">Name</th>
			<th class="column">Date</th>
			<th class="column1">Shipping Address</th>
			<th class="column">Total</th>
			<th class="column3">Status</th>
		</thead>
		<tbody class="tbody">
	
		</tbody>
	</table>
	<div class="pages"></div>
</body>
</html>

