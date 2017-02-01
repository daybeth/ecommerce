<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<form action="/users/admincheck" method="post">
		Email: <input type="test" name="email">
		Password: <input type="password" name="password">
		<input type="submit" value="Login">
	</form>
<?= $this->session->flashdata("errors"); ?>	
</body>
</html>