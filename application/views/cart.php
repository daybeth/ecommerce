<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" href="/assets/stylesheets/cart.css">
	<title>Document</title>
</head>
<body>
<?php $this->load->view('/headers/users_header') ?>
	<div id="shopping_cart">
		<h1>Shopping Cart</h1>
		<table>
			<thead>
				<th id="column1">Item</th>
				<th class="column">Price</th>
				<th class="column">Quantity</th>
				<th class="column">Total</th>
			</thead>
			<tbody>
				<tr>
					<td>XXXXXXXXXXXXXXXXXXX</td>
					<td>XXXXXX</td>
					<td>XXXXXX</td>
					<td>XXXXXX</td>
				</tr>
				<tr>
					<td>XXXXXXXXXXXXXXXXXXX</td>
					<td>XXXXXX</td>
					<td>XXXXXX</td>
					<td>XXXXXX</td>
				</tr>
				<tr>
					<td>XXXXXXXXXXXXXXXXXXX</td>
					<td>XXXXXX</td>
					<td>XXXXXX</td>
					<td>XXXXXX</td>
				</tr>
			</tbody>
		</table>
		<h3>Total: XXXXX</h3>
		<form action="/" method="post">
			<input type="submit" value="Continue Shopping" name="continue_button" id="continue_button">
		</form>
	</div>
	<div id="user_information">
		<h2 class="align_left">Shipping Information</h2>
		<form action="/" method="post">
			<label for="shipping_first_name">First Name</label>
			<input type="text" name="shipping_first_name" id="shipping_first_name" class="input"><br>
			<label for="shipping_last_name">Last Name</label>
			<input type="text" name="shipping_last_name" id="shipping_last_name" class="input"><br>
			<label for="shipping_address">Address</label>
			<input type="text" name="shipping_address" id="shipping_address" class="input"><br>
			<label for="shipping_city">City</label>
			<input type="text" name="shipping_city" id="shipping_city" class="input"><br>
			<label for="shipping_state">State</label>
			<input type="text" name="shipping_state" id="shipping_state" class="input"><br>
			<label for="shipping_zipcode">Zipcode</label>
			<input type="text" name="shipping_zipcode" id="shipping_zipcode" class="address" class="input"><br>
			<h2 class="align_left">Billing Information </h2>
			<input type="checkbox" name="checkbox" id="checkbox">
			<label for="checkbox" class="align_left">Same as shipping</label><br>
			<label for="billing_first_name">First Name</label>
			<input type="text" name="billing_first_name" id="billing_first_name" class="input"><br>
			<label for="billing_last_name">Last Name</label>
			<input type="text" name="billing_last_name" id="billing_last_name" class="input"><br>
			<label for="billing_address">Address</label>
			<input type="text" name="billing_address" id="billing_address" class="input"><br>
			<label for="billing_city">City</label>
			<input type="text" name="billing_city" id="billing_city" class="input"><br>	
			<label for="billing_state">State</label>
			<input type="text" name="billing_state" id="billing_state" class="input"><br>
			<label for="billing_zipcode">Zipcode</label>
			<input type="text" name="billing_zipcode" id="billing_zipcode" class="address" class="input"><br>
			<label for="Card">Card</label>
			<input type="number" name="Card" id="Card" class="input"><br>
			<label for="security_code">Security Code</label>
			<input type="number" name="security_code" id="security_code" class="input"><br>
			<label for="expiration">Expiration</label>
			<input type="month" name="expiration" id="expiration" class="input"><br>
			<input type="submit" value="Pay" name="pay_button" id="pay_button">
		</form>
	</div>
</body>
</html>