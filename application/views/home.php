<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php $this->load->view("/headers/users_header.php") ?>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
	  </ol>
	 
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item active">
	      <a href="/users/admin"><img class="img-responsive center-block" src="/assets/images/nikemain.jpg" alt="..."></a>
	      <div class="carousel-caption">
	      	<h1>SHOP OUR FEATURED BRANDS</h1>
	      </div>
	    </div>
	    <div class="item">
	      <img class="img-responsive center-block" src="/assets/images/nikemain.jpg" alt="...">
	      <div class="carousel-caption">
	      	<h1>NIKE</h1>
	      </div>
	    </div>
	    <div class="item">
	      <img class="img-responsive center-block" src="/assets/images/yeezymain.jpg" alt="...">
	      <div class="carousel-caption">
	      	<h1>YEEZY</h1>
	      </div>
	    </div>
	    <div class="item">
	      <img class="img-responsive center-block" src="/assets/images/creativemain.jpg" alt="...">
	      <div class="carousel-caption">
	      	<h1>CREATIVE RECREATION</h1>
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