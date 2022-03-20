<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {

	public function get_users(){
		$this->load->database("findme");
		$result = $this->db->query("select * from users");
		$users = $result->result_array();
		return $users;
	}
}