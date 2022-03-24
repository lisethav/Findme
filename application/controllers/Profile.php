<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function update_report()
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

}