<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function get_cities()
	{
		$this->load->model("ReportsModel");
		$cities = $this->ReportsModel->get_cities();
		die (json_encode($cities));
	}

	public function do_report()
	{
		$name = $this->input->post("name");
		$breed = $this->input->post("breed");
		$color = $this->input->post("color");
		$type = $this->input->post("type");
		$size = $this->input->post("size");
		$this->load->model("RegisterModel");
		$register = $this->RegisterModel->create_user($user, $first_name, $last_name, $cellphone, $password1);
		if($register == "error"){
			
			die(json_encode( array( "status"=>"error", "message" => "Este usuario ya existe"  ) ));
		}
		die(json_encode( array( "status"=>"ok" ) ));
	}


	public function get_reports()
	{
		$this->load->model("ReportsModel");
		$reports = $this->ReportsModel->get_reports();
		die (json_encode($reports));
	}
	
}
