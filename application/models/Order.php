<?php 
class Order extends CI_Model {
  
  	//pass 
	public function create_order($post,$products,$total){
		$status = "IN PROCESS";
		$shipping_address = $post['shipping_address'] . " " . $post['shipping_city'] . " " . $post['shipping_state'] . " " . $post['shipping_zipcode'];
		$billing_address = $post['billing_address'] . " " . $post['billing_city'] . " " . $post['billing_state'] . " " . $post['billing_zipcode'];
		$shipping_name = $post['shipping_first_name'] . " " . $post['shipping_last_name'];
		$billing_name = $post['billing_first_name'] . " " . $post['billing_last_name'];
		$query = "INSERT INTO orders(status, total, date, shipping_address, billing_address, user_id, shipping_name, billing_name) VALUES(?,?,NOW(),?,?,?,?,?)";
		$values=array($status, $post['total'], $shipping_address, $billing_address, $user_id, $shipping_name, $billing_name);
		$this->db->query($query,$values);
	}

	public function get_all_orders()
	{
		$query = "SELECT orders.id, orders.shipping_address, total, orders.date, orders.billing_address, users.first_name, users.last_name, orders.status FROM orders JOIN users on users.id = orders.user_id";
		return $this->db->query($query)->result_array();
	}
	public function get_order_by_id($id)
	{
		$query = "SELECT orders.id, orders.total, orders.date, orders.billing_address, orders.shipping_address, users.first_name, users.last_name, orders.status, orders.shipping_name, orders.billing_name FROM orders JOIN users ON orders.user_id = users.id WHERE orders.id = ?";
		$values = array($id);
		return $this->db->query($query, $values)->row_array();
	}
	public function get_order_qty($id)
	{
		$query = "SELECT * FROM orders_has_products JOIN products ON orders_has_products.product_id = products.id WHERE orders_has_products.order_id = ?";
		$values = array($id);
		return $this->db->query($query, $values)->result_array();
	}
	//*********QUERY FOR PAGINATION-DAY**********
	public function get_page_orders($num)
	{
		$offset =($num-1)*6;
		$query = "SELECT orders.id, orders.shipping_address, total, orders.date, orders.billing_address, users.first_name, users.last_name, orders.status FROM orders JOIN users on users.id = orders.user_id LIMIT 6 OFFSET ". $offset;
		return $this->db->query($query)->result_array();
	}
	//*********END OF QUERY FOR PAGINATION-DAY**********

}