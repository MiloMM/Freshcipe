<?php
class Recipe_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getRecipe() {
		$result = $this->db->get_where('recipes',array('id' => $_GET['recipe_id']));

		return $result;
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

	public function editRecipe() {
		$data = array(
			"title" => $this->input->post('postitle'),
			"content" => $this->input->post('postcontent')
		);

		$this->db->where('id', $recipe_id);
		$this->db->update('recipes', $recipe_id);

	}

}