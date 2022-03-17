<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function get_users()
	{
		$this->load->model("UsersModel");
		$users = $this->UsersModel->get_users();
		die (json_encode($users));
	}
	
}