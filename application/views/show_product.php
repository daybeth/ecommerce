<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/stylesheets/show_product.css">
    <title>Document</title>
</head>
<body>
<?php $this->load->view('/headers/users_header') ?>
    <p><a href="/"> Go Back</a></p>
    <div id="main_product">
        <h2>PRODUCT NAME</h2>
        <p>MAIN IMAGE</p>
        <p>IMAGES</p>
    </div>
    <div id="main_content">
        <p>DESCRIPTION</p>
        <strong>Quantity</strong>
        <select name="quantity" id="quantity">
        	<option value="one">1</option>
        	<option value="two">2</option>
        	<option value="three">3</option>
        </select>
        <form action="/">
        	<input type="submit" value="Buy" id="buy_button">
        </form>
    </div>
    <div id="botton_box">
    	<h2>Similar Items</h2>
    	<div class="similar_item_image">
	    	<a href="IMAGE_URL">IMAGE</a>
	    	<p>PRICE</p>
	    	<p>PRODUCT NAME</p>
	    </div>
    	<div class="similar_item_image">
	    	<a href="IMAGE_URL">IMAGE</a>
	    	<p>PRICE</p>
	    	<p>PRODUCT NAME</p>
    	</div>
    	<div class="similar_item_image">
	    	<a href="IMAGE_URL">IMAGE</a>
	    	<p>PRICE</p>
	    	<p>PRODUCT NAME</p>
    	</div>
    </div>
    
=======
            <option value="one">1</option>
            <option value="two">2</option>
            <option value="three">3</option>
        </select>
        <form action="/">
            <input type="submit" value="Buy" id="buy_button">
        </form>
    </div>
    <div id="botton_box">
        <h2>Similar Items</h2>
        <div class="similar_item_image">
            <a href="IMAGE_URL">IMAGE</a>
            <p>PRICE</p>
            <p>PRODUCT NAME</p>
        </div>
        <div class="similar_item_image">
            <a href="IMAGE_URL">IMAGE</a>
            <p>PRICE</p>
            <p>PRODUCT NAME</p>
        </div>
        <div class="similar_item_image">
            <a href="IMAGE_URL">IMAGE</a>
            <p>PRICE</p>
            <p>PRODUCT NAME</p>
        </div>
    </div>  
>>>>>>> 1e888f54cf2e1037f4e17d589f0f6bee1b554390
</body>
</html>