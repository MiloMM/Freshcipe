<?php
class User_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getUser($userid){

		$query = $this->db->get_where('user', array('id' => $userid));
		return $query;

	}
}