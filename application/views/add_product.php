<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/stylesheets/add_product.css">
	<title>Document</title>
</head>
<body>
	<div id="add_product">
		<h1>Add Product</h1>
		<form action="/products/add_product" method="post">
			<label for="name">Product Name</label><br>
			<input type="text" name="name" id="name" class="input"><br>
			<label for="description">Description</label><br>
			<textarea name="description" id="description" cols="27" rows="10"></textarea><br>
			<label for="categories">Categories</label>
			<select name="categories" id="categories">
				<option value="XXXX">XXXX</option>
			</select><br>
			<label for="new_category">or add new category:</label><br>
			<input type="text" name="new_category" id="new_category" class="input"><br>
			<label for="price">Price</label>
			<input type="float" name="price"  id="price" class="input"><br>
			<label for="images">Images</label>
			<input type="submit" value="Upload" name="upload" class="button"><br>
			<input type="submit" value="Cancel" name="cancel" class="button">
			<input type="submit" value="Preview" name="preview" class="button">
			<input type="submit" value="Add" name="add" class="button">
		</form>
	</div>
</body>
</html>