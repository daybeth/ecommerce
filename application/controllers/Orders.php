<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Order");
	}
	public function index()
	{
	
	}
	public function show_order($id)
	{
		$order = $this->Order->get_order_by_id($id);
		$orderqty = $this->Order->get_order_qty($id);
		$this->load->view("show_order", ["order" => $order, "orderqty" => $orderqty]);
	}
		//*********CONTROLLERS FOR PAGINATION-DAY**********
	public function get_all_orders()
	{
		$orders = $this->Order->get_all_orders();
		header('Content-Type: application/json');
		echo json_encode($orders);
	}
	public function get_page_orders($num)
	{
		$orders = $this->Order->get_page_orders($num); 
		header('Content-Type: application/json');
		echo json_encode($orders);
	}

	//*********END OF CONTROLLERS FOR PAGINATION-DAY**********
	
}
