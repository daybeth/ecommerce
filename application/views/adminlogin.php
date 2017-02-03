<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
<?php if($this->session->flashdata("errors")) echo $this->session->flashdata("errors") ?> 
	<form action="/users/admincheck" method="post">
		Email: <input type="test" name="email">
		Password: <input type="password" name="password">
		<input type="submit" value="Login">
	</form>
</body>
</html>