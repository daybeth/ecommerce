<?php 
class User extends CI_Model {
  
	public function validation()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "trim|required|min_length[2]|max_length[45]");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required|min_length[2]|max_length[45]");
		$this->form_validation->set_rules("email", "Email", "trim|required|is_unique[users.email]|valid_email");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[6]|max_length[20]");
		$this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|required|matches[password]");

		if($this->form_validation->run() === TRUE)
		{
			return "valid";
		}
		else
		{
			return validation_errors(); 
		}		
	}
	public function register($post)
	{
			$salt = $salt = bin2hex(openssl_random_pseudo_bytes(22));
			$encpass = md5($post["password"]. "codingdojo" .$salt);
			$query = "INSERT INTO users (first_name, last_name, email, password, salt) VALUES (?, ?, ?, ?, ?)";
			$values = array($post["first_name"], $post["last_name"], $post["email"], $salt, $encpass);
			return $this->db->query($query, $values);
	}	
	public function get_user_by_email($email)
	{
		$query = "SELECT * FROM users WHERE email =?";
		$values = array($email);
		return $this->db->query($query, $values)->row_array();
	}
	public function login($post)
	{
		$user = $this->get_user_by_email($post["email"]);
		$postpassword = $this->input->post("password");
		$salt = $user["salt"];
		$testpassword = md5($postpassword. "codingdojo" .$salt);
		if($testpassword == $user["password"])
		{
			$success = array(
							"id" =>$user["id"],
							"first_name" => $user["first_name"],
							"last_name" => $user["last_name"],
							"email" => $user["email"],
							"is_logged_in" => TRUE);
			return $success;
		}
		else
		{
			$fail = "Invalid Email or Password";
			return $fail;
		}
	}
}