<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {



// default page admin. current bugs. pending change to login or dashboard
public function index()
{
	redirect("view/login");
	die();
}

	// view a specify module, default bugs
	public function page($name_module = "login", $additional_content = null){

	}

	public function module($name_module = 'home')
	{
		$single_pages = array("login","logout", "register", "login.php","register.php");
		// $this->load->model("admin/users_model");
		
		if($name_module == "logout"){
			$this->logout();
		}
		
		if($name_module == "login"){
			$this->redirectIfUserAlreadyLogged();
		}
		else{
			// $this->redirectIfUserIsNotLogged();
		}
		
		
		$data["name_module"] = $name_module;
		$data["access_list"] = [];
		// $data["access_list"] = $this->users_model->get_user_access_list();
		
		
		
		// check if the page must be loaded with header and footer or alone
		if(in_array($name_module, $single_pages)){
			$this->load->view($name_module, $data);
			return;
		}
	
		$this->load->view('shared/navbar');
		$this->load->view($name_module);
		$this->load->view('shared/footer');
	}


	private function logout(){

		if($this->session->has_userdata("id")){

			$this->session->unset_userdata("id");

			$this->session->sess_destroy();
		}

		redirect("view/login");
		exit();
	}


	private function redirectIfUserAlreadyLogged(){
		if($this->session->userdata('id')){
			redirect("view/profile");
			die();
		}
	}


	private function redirectIfUserIsNotLogged(){
		if(!$this->session->userdata('id')){
			redirect("view/login");
			die();
		}
	}
}
