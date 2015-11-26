<?php
class Recipe_Controller extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('recipe_model');
	}


	public function createrecipe() {
		$content_data = "";
		
		if ($this->input->post("posttitle") != NULL && $this->input->post("postcontent") != NULL) {
			
			$content_data['recipe'] = $this->recipe_model->uploadrecipe();

		}
		
		$this->load->view('pages/createrecipe.php',  $content_data);
	}
<<<<<<< HEAD

	public function editRecipe($id) {
		$content_data = "";

		if (isset($id)) {
			$content_data['recipe'] = $this->recipe_model->getRecipe($id);
=======

	public function editRecipe() {
		$content_data = "";

		if (isset($_GET['recipe_id'])) {

			$this->load->model('recipe_model');
			$content_data['recipe'] = $this->recipe_model->getRecipe();
		}

		$this->load->view('pages/editrecipe.php', $content_data);
	}
>>>>>>> 8ab34c54337abf9da4fcf4b100a4d2741f6fe32c

			if ($this->input->post("posttitle") != NULL && $this->input->post("postcontent") != NULL) {
				$this->recipe_model->editRecipe($id);
				header('Location: /school/project/editrecipe/'.$id);
			}

		}
		$this->load->view('pages/editrecipe.php', $content_data);
	}
}