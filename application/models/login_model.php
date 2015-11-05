<?php
class Login_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function login()
	{
		$data = array(
			"username" => $this->input->post('username'),
			"password" => md5($this->input->post('password'))
		);
		
		$query = $this->db->get_where("user", $data);
		$result = $query->result_array();
		
		return $result;
	}
	
	public function register() {
		$data = array(
			"username" => $this->input->post('username'),
			"password" => md5($this->input->post('password')),
			"email" => $this->input->post('email')
		);
		
		$query = $this->db->insert("user", $data);
	}
}