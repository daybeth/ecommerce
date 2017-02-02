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
		$this->load->view("dashboard_products_test");
	}
	//*********CONTROLLERS FOR PAGINATION-DAY**********
	public function get_all_products()
	{
		$products = $this->Product->get_all_products();
		header('Content-Type: application/json');
		echo json_encode($products);
	}
	public function get_page($num)
	{
		$products = $this->Product->get_page($num); 
		header('Content-Type: application/json');
		echo json_encode($products);
	}
	//*********END OF CONTROLLERS FOR PAGINATION-DAY**********
	
}