<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller{
	
	// public function index()
	// {
		
	// }
	public function add_to_cart()
	{
		$add_to_cart = array(
							"id" => $this->input->post("id");
							"name" => $this->input->post("name");
							"price" => $this->input->post("price");
							"quantity" => $this->input->post("quantity");
							"total" => $this->input->post("price") * $this->input->post("quantity");
							)
		if(!$this->session->Cart)
		{
			$this->session->set_userdata("Cart", array($add_to_cart));
		}
		else
		{
			array_push($this->session->userdata("Cart"),$add_to_cart);
		}
	}
}






  
















