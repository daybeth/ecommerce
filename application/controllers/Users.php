<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("User");
		$this->load->model("Product");
		$this->load->model("Order");
	}

	public function index()
	{
		$this->load->view('registration');
	}
	public function register()
	{
		$validation = $this->User->validation($this->input->post());
		if($validation == "valid")
		{
			$this->User->register($this->input->post());
			$this->User->login($this->input->post());
			redirect('/sessions/products');
		}
		else
		{
			$this->session->set_flashdata("errors", $validation);
			redirect("/users");
		}
	}
	public function signin()
	{
		$this->load->view("login");
	}
	public function login()
	{
		$result = $this->User->login($this->input->post());
		if($result == "Invalid Email or Password")
		{
			$this->session->set_flashdata("errors", $result);
			redirect("/");			
		}
		else
		{
			$this->session->set_userdata("User", $result);
			redirect("/");
		}
	}
	public function admin()
	{
		$this->load->view("adminlogin");
	}	
	public function admincheck()
	{
		$result = $this->User->admincheck($this->input->post());
		if($result == "Access Denied")
		{
			$this->session->set_flashdata("errors", $result);
			redirect("/users/admin");			
		}
		else
		{
			$this->session->set_userdata("Admin", $result);
			redirect("/users/admin_orders");
		}
	}
	public function admin_orders()
	{
		$orders = $this->Order->get_all_orders();
		$this->load->view("dashboard_orders", ["orders" => $orders]);
	}
	public function admin_products()
	{
		$products = ["products"=>$this->Product->get_all_products()];
		$this->load->view("dashboard_products",$products);
	} 
}






  
















