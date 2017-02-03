<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Product');
	}
	public function update_product_by_id($id){
		$this->Product->update_product_by_id($this->input->post(),$id);
		redirect('/users/admin_products');
	}
	public function index()
	{
		$this->load->view("main");
	}
	public function edit_product($id)
	{
		$products = $this->Product->get_product_by_id($id);
		$product_categories= $this->Product->get_product_categories_by_id($id);
		$this->load->view('edit_product',["product"=>$products, "categories"=>$product_categories]);
	}
	public function show($id)
	{
		$this->load->view('show_product');
	}
}