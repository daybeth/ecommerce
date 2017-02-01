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

	public function

}