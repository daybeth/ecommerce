<?php 
class Product extends CI_Model {
  	
	public function get_all_products()
	{
		$query = "SELECT * FROM products";
		return $this->db->query($query)->result_array();
		
	}
	public function get_all_categories()
	{
		$query = "SELECT * FROM categories";
		return $this->db->query($query)->result_array();
		
	}
	public function get_product_by_id($id)
	{
		$query = "SELECT * FROM products WHERE id=?";
		$values = array($id);
		return $this->db->query($query, $values)->row_array();
	}
	public function get_product_id_by_name($name)
	{
		$query = "SELECT products.id FROM products WHERE name=?";
		$values = array($name);
		return $this->db->query($query, $values)->row_array();
	}
	//this is a left join, so you get categories that are not related to the product in the table
	public function get_product_categories_by_id($id){
		$query="SELECT * FROM categories LEFT JOIN".
		" Products_has_Categories ON Products_has_Categories.Category_id = categories.id" .
		" AND products_has_categories.Product_id = ?";
		$value=array($id);
		return $this->db->query($query,$value)->result_array();
	}
	public function ajax_products($id){
		$query="SELECT products.name, products.price FROM categories JOIN products_has_categories ON categories.id = products_has_categories.category_id JOIN products ON products.id = products_has_categories.product_id WHERE categories.id = ?";
		//$query = "SELECT * FROM categories JOIN products_has_categories ON products_has_categories.Category_id = categories.id JOIN products ON products.id=products_has_categories.Product_id WHERE categories.id = ?";
		return $this->db->query($query,array($id))->result_array();
	}
	public function get_product_categories_by_id_main($id){
		$query="SELECT * FROM categories JOIN".
		" Products_has_Categories ON Products_has_Categories.Category_id = categories.id" .
		" AND products_has_categories.Product_id = ?";
		$value=array($id);
		return $this->db->query($query,$value)->result_array();
	}
	public function get_all_products_by_category($id)
	{
		$query = "SELECT * FROM products JOIN products_has_categories ON products.id = products_has_categories.product_id WHERE products_has_categories.category_id = ?";
		$values = array($id);
		return $this->db->query($query, $values)->result_array();
	}
	public function update_product_by_id($post, $id){
		//first delete existing product category relationships
		$delete_product_categories="DELETE FROM Products_has_Categories WHERE Product_id = ?";
		$this->db->query($delete_product_categories,array($id));
		//then recreate relationships based on selected categories
		$put_products_in_categories = "INSERT INTO Products_has_Categories (Product_id,Category_id) VALUES " . "($id, ?)";
		if(isset($post['product_categories'])){
			foreach($post['product_categories'] as $value){
				$this->db->query($put_products_in_categories,$value);
			}
		}
	}
	// public function edit_product($post)
	// {
	// 	$query = "UPDATE products SET price=?, name=?, description=?, "
	// }
	// *********!!!!!!!!!!!! FIND OUT IF MULTIPLE CATEGORIES, AND ALSO CHANGE ADD_PRODUCT() ACCORDINGLY!!!!!!!!!!!!!!*************************************!!!!!!!!!!!!!!!!!!!!!************
	public function add_product($post)
	{
		// $id = query("INSERT INTO PRODUCT...",[]);
		// query("INSERT INTO CATAGORIES_HAS_PRODUCT PID CID ($id, $cid)")
		// *******COME BACK AND ATTEMPT REWRITE THE WAY MANPREET WAS DOING*************
		$query = "INSERT INTO products (name, price, inventory_count, quantity_sold, description) values (?, ?, ?, 0, ?)";
		$values = array($post["name"], $post["price"], $post["inventory_count"], $post["description"]);
		$this->db->query($query, $values);

		$id = get_product_id_by_name($post["name"]);
		$query2 = "INSERT INTO products_has_categories (product_id, category_id) values (?, ?)";
		$values2 = array($id["id"]);
		//********!!!!!!!!!!!! COME BACK AND FINISH!!!!!!!!!!!!!!*************************************!!!!!!!!!!!!!!!!!!!!!************
	}
	public function delete_product($id)
	{
		$query = "DELETE FROM products WHERE id=?";
		$values=array($id);
		return $this->db->query($query,$values);
	}
	//*********QUERY FOR PAGINATION-DAY**********
	public function get_page_products($num)
	{
		$offset =($num-1)*6;
		$query = "SELECT * FROM products LIMIT 6 OFFSET ". $offset;
		return $this->db->query($query)->result_array();
	}
	public function get_page_main($num)
	{
		$offset =($num-1)*10;
		$query = "SELECT * FROM products LIMIT 10 OFFSET ". $offset;
		return $this->db->query($query)->result_array();
	}
	//*********END OF QUERY FOR PAGINATION-DAY**********
}