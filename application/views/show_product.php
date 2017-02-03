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
        <h2><?= $product["name"] ?></h2>
        <img src="/assets/images/<?= $product['id']. '.jpeg' ?>">
    </div>
    <div id="main_content">
        <p><?= $product["description"] ?></p>
        <p>$<?= $product["price"] ?></p>
        <strong>Quantity</strong>
        <form action="/carts/add_to_cart" method="post">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <input type="hidden" name="name" value="<?= $product['name'] ?>">
            <input type="hidden" name="price" value="<?= $product['price'] ?>">
            <select name="quantity" id="quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input type="submit" value="ADD TO CART" id="buy_button">
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
</body>
</html>