<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="/assets/stylesheets/admin_login.css">
</head>
<body>
<?php $this->load->view('/headers/login_header') ?>
	<div id="login">
		<h2>Log In</h2>
		<h3 >Admin Login</h3>

	<form class="form-horizontal" action="/users/admincheck" method="post">
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label" class="text-center">Email</label>
	    <div class="col-sm-4">
	      <input  name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
	    <div class="col-sm-4">
	      <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Log In</button>
	    </div>
	  </div>
	</form>
<?= $this->session->flashdata("errors") ?>
</body>
</html>