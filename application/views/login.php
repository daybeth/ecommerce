<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/assets/stylesheets/login.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="assets/JS/js/jQuery-1.10.2.js"></script>
<script type="text/javascript" src="assets/JS/js/bootstrap.js"></script>
</head>
<body>
<?php $this->load->view('/headers/login_header') ?>
	<div id="login">
		<h2>Log In</h2>
		<h3 >Registered customers</h3>

	<form class="form-horizontal" action="/users/login" method="post">
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
	      <button type="submit" class="btn btn-default">Sign in</button>
	    </div>
	  </div>
	</form>
<?= $this->session->flashdata("errors") ?>
	<div id="registration">
		<h2>Create an Account</h2>
		<p>Register with XXXXXXX.com to enjoy personalized services, including:</p>
		<ul>
			<li>Online Order Status</li>
			<li>Exclusive Emails</li>
		</ul>
		<form class="form-horizontal" action="/users/register" method="post">
		  	<div class="form-group">
	   			<div class="col-sm-offset-2 col-sm-10">
	      			<button type="submit" class="btn btn-default">Create an Account</button>
	   		 	</div>
	 		</div>
 		</form>
 	 </div>
</body>
</html>
