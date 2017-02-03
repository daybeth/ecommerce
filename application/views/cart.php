<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" href="/assets/stylesheets/cart.css">
	<title>Document</title>
</head>
<body>
<?php $this->load->view('/headers/users_header'); if(!$this->session->Cart){redirect("/products"); } ?>
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
<?php
					$order_total = "0";
				foreach ($cart as $key => $value) {
					$order_total += $value['total'];
?>
				<tr>
					<td><?= $value["name"] ?></td>
					<td><?= $value["price"] ?></td>
					<td><?= $value["quantity"] ?></td>
					<td>$<?= $value["total"] ?></td>
				</tr>	
<?php
				}
?>
			</tbody>
		</table>
		<h3>Total: $<?= $order_total ?></h3>
		<form action="/" method="post">
			<input type="submit" value="Continue Shopping" name="continue_button" id="continue_button">
		</form>
	</div>
	<div id="user_information">
		<h2 class="align_left">Shipping Information</h2>
		<form action="/orders/process_order" method="post">
			<input type="hidden" name="order_total" value="<?= $order_total ?>">
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
			<script
			src="https://checkout.stripe.com/checkout.js" class="stripe-button"
			data-key="pk_test_ZtWAitsgZYgwANuGB0a9FG0T"
			data-amount="<?= str_replace(".", "", $order_total) ?>"
			data-name="WEBSITENAME"
			data-description="Enter your card information below."
			data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
			data-locale="auto">
			</script>
		</form>
	</div>
</body>
</html>