<?php
class Recipe_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
 
	public function uploadrecipe()
	{
		$data = array(
			"title" => $this->input->post('posttitle'),
			"content" => $this->input->post('postcontent'),
			"user_id" => $this->session->userdata('id')
		);

		$query = $this->db->insert("recipes", $data);
	}

	public function getAllRecipes()
	{
		$query = $this->db->get('recipes');
		return $query;
	}

}