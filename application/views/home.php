<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php $this->load->view('/headers/home_header') ?>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>
	 
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item active">
	      <a href="/products"><img class="img-responsive center-block" src="/assets/images/nikemain.jpg" alt="..."></a>
	      <div class="carousel-caption">
	      	<h1>SEE PRODUCTS</h1>
	      </div>
	    </div>
	    <div class="item">
	      <a href="/users/register"><img class="img-responsive center-block" src="/assets/images/creativemain.jpg" alt="..."></a>
	      <div class="carousel-caption">
	      	<h1>JOIN NOW TO START SHOPPING</h1>
	      </div>
	    </div>
	    <div class="item">
	      <a href="/users/signin"><img class="img-responsive center-block" src="/assets/images/yeezymain.jpg" alt="..."></a>
	      <div class="carousel-caption">
	      	<h1>ALREADY A MEMBER? LOGIN</h1>
	      </div>
	    </div>
	  </div>
	 
	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div> <!-- Carousel -->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</html>