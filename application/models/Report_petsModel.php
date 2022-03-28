<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_petsModel extends CI_Model {

	public function get_cities(){
		$this->load->database("findme");
		$result = $this->db->query("select * from cities");
		$cities = $result->result_array();
		return $cities;
	}

	public function get_type(){
		$this->load->database("findme");
		$result = $this->db->query("select * from type_pet");
		$type = $result->result_array();
		return $type;
	}

	public function get_size(){
		$this->load->database("findme");
		$result = $this->db->query("select * from size_pet");
		$size = $result->result_array();
		return $size;
	}

	public function get_status(){
		$this->load->database("findme");
		$result = $this->db->query("select * from status");
		$status = $result->result_array();
		return $status;
	}

	public function get_reports(){
		$this->load->database("findme");
		$result = $this->db->query("select * from reports");
		$reports = $result->result_array();
		return $reports;
	}

	public function create_report($cities_id, $lost_address, $lost_date, $name, $type_pet_id, $breed, $color, $size_pet_id, $cellphone1, $cellphone2, $reward, $status_id, $users_id, $description, $other_type, $has_image){
		$this->load->database("findme");
		$result = $this->db->query("INSERT INTO pet_report (cities_id, lost_address, lost_date, name, type_pet_id, breed, color, size_pet_id, cellphone1, cellphone2, reward, status_id, users_id, description, other_type, has_image) values ('$cities_id', '$lost_address', '$lost_date', '$name', '$type_pet_id', '$breed', '$color', '$size_pet_id', '$cellphone1', '$cellphone2', '$reward', '$status_id', '$users_id', '$description', '$other_type', $has_image)");
		return $this->db->insert_id();
	}
}
