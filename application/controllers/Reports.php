<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function get_cities()
	{
		$this->load->model("ReportsModel");
		$cities = $this->ReportsModel->get_cities();
		die (json_encode($cities));
	}

	public function get_type()
	{
		$this->load->model("ReportsModel");
		$type = $this->ReportsModel->get_type();
		die (json_encode($type));
	}

	public function get_size()
	{
		$this->load->model("ReportsModel");
		$size = $this->ReportsModel->get_size();
		die (json_encode($size));
	}

	public function get_status()
	{
		$this->load->model("ReportsModel");
		$status = $this->ReportsModel->get_status();
		die (json_encode($status));
	}

	public function do_report()
	{
		$cities_id = $this->input->post("cities_id");
		$lost_address = $this->input->post("lost_address");
		$lost_date = $this->input->post("lost_date");
		$name = $this->input->post("name");
		$type_pet_id = $this->input->post("type_pet_id");
		$breed = $this->input->post("breed");
		$color = $this->input->post("color");
		$size_pet_id = $this->input->post("size_pet_id");
		$cellphone1 = $this->input->post("cellphone1");
		$cellphone2 = $this->input->post("cellphone2");
		$reward = $this->input->post("reward");
		$status_id = $this->input->post("status_id");
		$users_id = $this->input->post("users_id");
		$description = $this->input->post("description");
		$this->load->model("ReportsModel");
		$report = $this->ReportsModel->create_report($cities_id, $lost_address, $lost_date, $name, $type_pet_id, $breed, $color, $size_pet_id, $cellphone1, $cellphone2, $reward, $status_id, $users_id, $description);
		if($report == "ok"){
			
			die(json_encode( array( "status"=>"ok" ) ));
		}
	}


	public function get_reports()
	{
		$this->load->model("ReportsModel");
		$reports = $this->ReportsModel->get_reports();
		die (json_encode($reports));
	}
	
}
