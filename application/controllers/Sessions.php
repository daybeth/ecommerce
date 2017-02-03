<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sessions extends CI_Controller{
	
	public function index()
	{
		$this->load->view("/headers/users_header");
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

