<?php
class Login_Controller extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('recipe_model');
	}
 
	public function index() {
		
		$content_data["recipes"] = $this->recipe_model->getAllRecipes();

		$this->load->view('pages/home', $content_data);
	} 


	public function login() {
		$content_data = "";

		if ($this->input->post("username") != NULL && $this->input->post("password") != NULL) {
			$this->load->model('login_model');
			$content_data['result'] = $this->login_model->login();

			if (!empty($content_data["result"])) {
				$newdata = array(
                   'id'  => $content_data['result'][0]['id'],
                   'username'  => $content_data['result'][0]['username'],
                   'email'     => $content_data['result'][0]['email'],
                   'logged_in' => TRUE
                );

				$this->session->set_userdata($newdata);

				header("Location: home");
			}else{
				echo "Username / Password incorrect.";
			}
		}
		
		$this->load->view('pages/login' , $content_data);
	}

	public function logout() {
		$this->session->sess_destroy();
		header("Location: home");
	}

	public function register() {
		$content_data = "";

		if ($this->input->post("username") != NULL && $this->input->post("password")) {
			$this->load->model("login_model");
			$content_data['register'] = $this->login_model->register();

			if (!empty($content_data['register'])) {
				$newdata = array(
					"id" => $content_data['register'][0]['id'],
					"username" => $content_data['register'][0]['username'],
					"password" => md5($content_data['register'][0]['password']),
					"email" => $content_data['register'][0]['email']
				);
			}
		}

		$this->load->view('pages/register' , $content_data);
	}

<<<<<<< HEAD
		public function createrecipe() {
			$this->load->view('pages/createrecipe');
		}
=======
>>>>>>> 6d97598e38ac2cfb433c69eea06bb0eb5a216cef

}