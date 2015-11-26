<?php
class Recipe_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

<<<<<<< HEAD
	public function getRecipe($id) {
		$result = $this->db->get_where('recipes',array('id' => $id));

		return $result->result_array();
=======
	public function getRecipe() {
		$result = $this->db->get_where('recipes',array('id' => $_GET['recipe_id']));

		return $result;
>>>>>>> 8ab34c54337abf9da4fcf4b100a4d2741f6fe32c
	}

	public function uploadrecipe()
	{
		$tags = implode(",",$this->input->post("postTags"));
		$data = array(
			"title" => $this->input->post('posttitle'),
			"content" => $this->input->post('postcontent'),
			"user_id" => $this->session->userdata('id'),
			"tags" => $tags
		);

		$query = $this->db->insert("recipes", $data);
	}

<<<<<<< HEAD
	public function editRecipe($id) {
		$tags = implode(",",$this->input->post("postTags"));
		$data = array(
			"title" => $this->input->post('posttitle'),
			"content" => $this->input->post('postcontent'),
			"tags" => $tags
		);

		$this->db->where('id', $id);
		$this->db->update('recipes', $data);
=======
	public function editRecipe() {
		$data = array(
			"title" => $this->input->post('postitle'),
			"content" => $this->input->post('postcontent')
		);

		$this->db->where('id', $recipe_id);
		$this->db->update('recipes', $recipe_id);
>>>>>>> 8ab34c54337abf9da4fcf4b100a4d2741f6fe32c

	}

}