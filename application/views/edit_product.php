<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/stylesheets/edit_product.css">
	<title>Document</title>
</head>
<body>
<?php $this->load->view('/headers/admin_header') ?>
	<div id="edit_product">
		<h2>Edit Product - ID <?= $product['id'] ?></h2>
		<form action="/products/update_product_by_id/<?= $product['id'] ?>" method="post">
			<label for="name">Name</label><br>
			<input type="text" name="name" id="name" class="input" value="<?= $product['name'] ?>"><br>
			<label for="description">Description</label><br>
			<textarea name="description" id="description" cols="27" rows="10"><?= $product['description'] ?></textarea><br>
<?php 		$counter=0;
			foreach($categories as $category){ 
				if($counter==3){ ?>
				<br>		
<?php  		}
				if($category['Product_id']){
?>
			<label for="<?= $category['category_name'] ?>"> <?= $category['category_name'] ?><input type="checkbox" name="product_categories[]" value="<?= $category['id'] ?>" checked>
			</label>
<?php 			}
				else{
?>
			<label for="<?= $category['category_name'] ?>"> <?= $category['category_name'] ?><input type="checkbox" name="product_categories[]" value="<?= $category['id'] ?>">
<?php				} ?>
<?php 			$counter++;
			} ?>
			<br>
			<p id="categorieslabel">Categories</p>
			<select name="categories" id="categories">
				<option value="XXXX">XXXX</option>
			</select><br>
			<label for="new_category">or add new category:</label><br>
			<input type="text" name="new_category" id="new_category" class="input"><br>
			<label for="price">Price</label>
			<input type="float" name="price"  id="price" class="input" value="<?=$product['price']?>"><br>
			<input type="submit" value="Cancel" name="cancel" class="button">
			<input type="submit" value="Preview" name="preview" class="button">
			<input type="submit" value="Update" name="update" class="button">
		</form>
		<?php echo form_open_multipart("/products/image_upload/{$product['id']}"); ?>
		    Select image to upload:
		    <input type="file" name="fileToUpload" id="fileToUpload">
		    <input type="submit" value="Upload Image" name="submit">
		</form>
<?= 	$this->session->flashdata('errors'); ?>
	</div>
</body>
</html>