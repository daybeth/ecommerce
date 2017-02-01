<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("User");
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
		}
		else
		{
			$this->session->set_flashdata("errors", $validation);
			redirect("/");
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
}






  
















