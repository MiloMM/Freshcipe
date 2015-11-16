<?php
class Recipe_Controller extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}


	public function createrecipe() {
		$content_data = "";
		
		if ($this->input->post("posttitle") != NULL && $this->input->post("postcontent") != NULL) {
			
			$this->load->model('recipe_model');
			$content_data['recipe'] = $this->recipe_model->uploadrecipe();

		}
		
		$this->load->view('pages/createrecipe.php',  $content_data);
	}

	public function editRecipe() {
		$content_data = "";

		if (isset($_GET['recipe_id'])) {

			$this->load->model('recipe_model');
			$content_data['recipe'] = $this->recipe_model->getRecipe();
		}

		$this->load->view('pages/editrecipe.php', $content_data);
	}

}