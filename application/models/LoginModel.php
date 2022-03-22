<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function check_login($user, $password1){
		$this->load->database("findme");
		$result = $this->db->query("SELECT * from users WHERE USER = '$user' AND password1 = '$password1'");
		$users = $result->result_array();
		return $users;
	}

}