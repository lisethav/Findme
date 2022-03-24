<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterModel extends CI_Model {

	public function create_user($user, $first_name, $last_name, $cellphone, $password1){
		$this->load->database("findme");
		$result = $this->db->query("SELECT * from users WHERE user = '$user'");
		$user_exist = $result->result_array();
		if (count($user_exist) >= 1){
			return "error";
		}
		$result = $this->db->query("INSERT INTO users (user, first_name, last_name, cellphone, password1) values ('$user', '$first_name', '$last_name', '$cellphone', '$password1')");
		return "ok";
	}

	public function get_users(){
		$this->load->database("findme");
		$result = $this->db->query("SELECT * from users");
		$users = $result->result_array();
		return $users;
	}

}