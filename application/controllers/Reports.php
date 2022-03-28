<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function get_reports()
	{
		$cities_id = $this->input->post("cities_id");
		$this->load->model("ReportsModel");
		$cityreports = $this->ReportsModel->get_reports($cities_id);
		die (json_encode($cityreports));
	}
	
}
