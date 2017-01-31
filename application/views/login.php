<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/stylesheets/login.css">
	<title>Document</title>
</head>
<body>
	<div id="login">
		<h2>Log In</h2>
		<h3>Registered customers</h3>
		<form action="/users/login" method="post">
			<label for="email">Email</label><br>
			<input type="email" name="email" id="email" class="input"><br>
			<label for="password">Password</label><br>
			<input type="password" name="password" id="password"  class="input"><br>
			<input type="submit" value="Login" id="login_button">
		</form>
	</div>
	<div id="registration">
		<h2>Create an Account</h2>
		<p>Register with XXXXXXX.com to enjoy personalized services, including:</p>
		<ul>
			<li>Online Order Status</li>
			<li>Exclusive Emails</li>
		</ul>
		<form action="/users/" method="post">
			<input type="submit" value="Create an Account" id="create_button">
		</form>
	</div>
	
</body>
</html>