<?php
class Recipe_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getRecipe($id) {
		$result = $this->db->get_where('recipes',array('id' => $id));

		return $result->result_array();
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

	public function editRecipe($id) {
		$tags = implode(",",$this->input->post("postTags"));
		$data = array(
			"title" => $this->input->post('posttitle'),
			"content" => $this->input->post('postcontent'),
			"tags" => $tags
		);

		$this->db->where('id', $id);
		$this->db->update('recipes', $data);

	}

}