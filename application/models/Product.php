<?php 
class Product extends CI_Model {
  	
	public function get_all_products()
	{
		$query = "SELECT * FROM products";
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
	public function get_all_products_by_category($id)
	{
		$query = "SELECT * FROM products JOIN products_has_categories ON products.id = products_has_categories.product_id WHERE products_has_categories.category_id = ?";
		$values = array($id);
		return $this->db->query($query, $values)->result_array();
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