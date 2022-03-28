<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportsModel extends CI_Model {

	public function get_reports($cities_id){
		$this->load->database("findme");
		$result = $this->db->query("SELECT * from pet_report WHERE cities_id = '$cities_id' order by created_date desc	");
		$reports = $result->result_array();
		return $reports;
	}
}	