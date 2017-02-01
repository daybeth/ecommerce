<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/stylesheets/registration.css">
	<title>Document</title>
</head>
<body>
	<div id="login">
		<h3>Create an account</h3>
		<form action="/users/register" method="post">
			<label for="username">First Name</label><br>
			<input type="text" name="first_name" id="username" class="input"><br>
			<label for="username">Last Name</label><br>
			<input type="text" name="last_name" id="username" class="input"><br>			
			<label for="email">Email</label><br>
			<input type="email" name="email" id="email" class="input"><br>
			<label for="password">Password</label><br>
			<input type="password" name="password" id="password" class="input"><br>
			<label for="confirm_password">Confirm Password</label><br>
			<input type="password" name="confirm_password" id="confirm_password" class="input"><br>
			<input type="submit" value="Create" id="create_button">
		</form>
		<p>Have an account already?<a href="/users/signin"> Sign In</a></p>
	</div>
</body>
</html>