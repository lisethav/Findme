<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function check_login($user, $password){
		$this->load->database("findme");
		$result = $this->db->query("SELECT * from users WHERE USER = '$user' AND PASSWORD = '$password'");
		$users = $result->result_array();
		return $users;
	}

}