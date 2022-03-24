<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City_reports extends CI_Controller {

	public function get_reports()
	{
		$cities_id = $this->input->post("cities_id");
		$this->load->model("City_reportsModel");
		$cityreports = $this->City_reportsModel->get_reports($cities_id);
		die (json_encode($cityreports));
	}
	
}
