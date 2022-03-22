<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function do_report()
	{
		$user = $this->input->post("user");
		$first_name = $this->input->post("first_name");
		$last_name = $this->input->post("last_name");
		$cellphone = $this->input->post("cellphone");
		$password1 = $this->input->post("password1");
		$this->load->model("RegisterModel");
		$register = $this->RegisterModel->create_user($user, $first_name, $last_name, $cellphone, $password1);
		if($register == "error"){
			
			die(json_encode( array( "status"=>"error", "message" => "Este usuario ya existe"  ) ));
		}
		die(json_encode( array( "status"=>"ok" ) ));
	}
	
	public function get_users()
	{
		$this->load->model("RegisterModel");
		$users = $this->RegisterModel->get_users();
		die (json_encode($users));
	}
}

	public function get_reports()
	{
		$this->load->model("ReportsModel");
		$reports = $this->ReportsModel->get_reports();
		die (json_encode($reports));
	}
	
}
