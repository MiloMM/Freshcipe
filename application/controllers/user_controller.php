<?php
class User_Controller extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user_model');
	}

		public function showprofile() {
		
		$userid = $this->session->userdata('id');
		$content_data["user"] = $this->user_model->getUser($userid);


		$this->load->view('user/profile.php', $content_data);
		


	}

}