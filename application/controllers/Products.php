<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Product");
	}
	public function index()
	{
		$this->load->view("main");
	}
	public function edit_product($id)
	{
		$this->load->view('edit_product');
	}
	public function show($id)
	{
		$product = $this->Product->get_product_by_id($id);
		$this->load->view('show_product', ["product" => $product]);
	}
}