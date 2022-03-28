<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_pets extends CI_Controller {

	public function get_cities()
	{
		$this->load->model("Report_petsModel");
		$cities = $this->Report_petsModel->get_cities();
		die (json_encode($cities));
	}

	public function get_type()
	{
		$this->load->model("Report_petsModel");
		$type = $this->Report_petsModel->get_type();
		die (json_encode($type));
	}

	public function get_size()
	{
		$this->load->model("Report_petsModel");
		$size = $this->Report_petsModel->get_size();
		die (json_encode($size));
	}

	public function get_status()
	{
		$this->load->model("Report_petsModel");
		$status = $this->Report_petsModel->get_status();
		die (json_encode($status));
	}

	public function do_report()
	{

		$datos_formulario = json_decode( $this->input->post("datos_formulario") );
		
		$cities_id = $datos_formulario->cities_id;
		$lost_address = $datos_formulario->lost_address;
		$lost_date = $datos_formulario->lost_date;
		$name = $datos_formulario->name;
		$type_pet_id = $datos_formulario->type_pet_id;
		$breed = $datos_formulario->breed;
		$color = $datos_formulario->color;
		$size_pet_id = $datos_formulario->size_pet_id;
		$cellphone1 = $datos_formulario->cellphone1;
		$cellphone2 = $datos_formulario->cellphone2;
		$reward = $datos_formulario->reward;
		$status_id = 1;
		$users_id = $datos_formulario->users_id;
		$description = $datos_formulario->description;
		$other_type = $datos_formulario->other_type;
		$has_image = isset( $_FILES['archivos'] ) ? 1 : 0;
		
		$this->load->model("Report_petsModel");
		
		$report_id = $this->Report_petsModel->create_report($cities_id, $lost_address, $lost_date, $name, $type_pet_id, $breed, $color, $size_pet_id, $cellphone1, $cellphone2, $reward, $status_id, $users_id, $description, $other_type, $has_image);
		if(is_numeric($report_id)){
			
			if(isset( $_FILES['archivos'] )){
				$path_images = str_replace('\\', '/', FCPATH . "assets/images/pets");
				$result = move_uploaded_file($_FILES['archivos']['tmp_name'], $path_images. "/" . $report_id . ".png"  );
			}
			
			die(json_encode( array( "status"=>"ok" ) ));
		}
	}


	public function get_reports()
	{
		$this->load->model("Report_petsModel");
		$reports = $this->Report_petsModel->get_reports();
		die (json_encode($reports));
	}
	
}
