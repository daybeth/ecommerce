<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>Document</title>
    <link rel="stylesheet" href="/assets/stylesheets/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/pagination_main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 

</head>
<body>
 <?php $this->load->view('/headers/users_header') ?>  

    <div class="container-fluid">
      <div id="row">

          SEARCH BAR
          <h2>Categories</h2>
  <?php foreach($categories as $category){ ?>
          <p><a class="category" href="" id="<?= $category['id'] ?>"><?= $category['category_name'] ?></a></p>
       
  <?php } ?>
          <a href="/">Show All</a>
      </div>

        <div id="allProducts">
  <?php  
          foreach ($products as $product) {
  ?>
            <div class="productDiv">
            <a href="/products/show/<?= $product['id'] ?>"><img src="/assets/images/<?= $product['id']. '.jpeg' ?>"></a>
            <h4>Price: $<?= $product['price'] ?></h4>
            </div>
  <?php
          }
  ?>
        </div>
  </div>
</body>
</html>