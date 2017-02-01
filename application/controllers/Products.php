<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function index()
	{
		$this->load->view("main");
	}
	public function edit_product($id)
	{
		$this->load->view('edit_product');
	}
	// public function delete_product($id){
	// 	$this->load->model("Product");
	// 	$this->Product->delete_product($id);
	// 	redirect('/users/admin_products');
	// }
}