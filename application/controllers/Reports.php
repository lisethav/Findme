<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function index()
	{
		echo "hello";
	}

	public function get_reports()
	{
		$this->load->model("ReportsModel");
		$reports = $this->ReportsModel->get_reports();
		die (json_encode($reports));
	}
	
}
