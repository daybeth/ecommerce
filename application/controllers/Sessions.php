<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sessions extends CI_Controller{
	
	public function index()
	{
		$this->load->view("/dashboard_orders");
	}
	public function home()
	{
		$this->load->view("home");
	}
	public function products()
	{
		$this->load->view("main");
	}

}

