<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function get_users()
	{
		$this->load->model("UsersModel");
		$users = $this->UsersModel->get_users();
		die (json_encode($users));
	}

	public function create_user()
	{
		$name = $this->input->post("txt_name");
		$last_name = $this->input->post("txt_last_name");
		$this->load->model("UsersModel");
		$user = $this->UsersModel->create_user($name, $last_name);
		die("hola");
	}
	
}