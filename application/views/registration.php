<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/stylesheets/registration.css">
	<title>Document</title>
</head>
<body>
<?php $this->load->view('/headers/home_header') ?>
	<div id="registration">
		<h3>Create an account</h3>
		<form class="form-horizontal" action="/users/register" method="post">
		 <div class="form-group">
	    <label for="inputEmail3" class="col-sm-4 control-label" class="text-center">First Name</label>
	    <div class="col-sm-4">
	      <input  name="first_name" type="text" class="form-control" id="inputEmail3" placeholder="First Name">
	    </div>
	    </div>
	   <div class="form-group">
	    <label for="inputEmail3" class="col-sm-4 control-label" class="text-center">Last Name</label>
	    <div class="col-sm-4">
	      <input  name="last_name" type="text" class="form-control" id="inputEmail3" placeholder="Last Name">
	    </div>
	    </div>
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-4 control-label" class="text-center">Email</label>
	    <div class="col-sm-4">
	      <input  name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
	    <div class="col-sm-4">
	      <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-4 control-label">Confirm assword</label>
	    <div class="col-sm-4">
	      <input name="confirm_password" type="password" class="form-control" id="inputPassword3" placeholder="Confirm Password">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Create Account</button>
	    </div>
	  </div>
	</form>
<?= $this->session->flashdata("errors") ?>
		<p>Have an account already?<a href="/users/signin"> Sign In</a></p>
	</div>
</body>
</html>