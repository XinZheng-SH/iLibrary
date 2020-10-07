<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Radar_modal');
	}

	public function view() {
		// load position from the database
		$data['position'] = $this->Radar_modal->get_position();

		$this->load->view('templates/header');
		$this->load->view('pages/searchLibrary', $data);
		$this->load->view('templates/footer');
	}

	public function getData() {
		$library_id = $this->input->post('icon_id');
		$result = $this->Radar_modal->get_data($library_id);
		echo json_encode($result);
	}

	public function test() {
		$this->load->view('templates/header');
		$this->load->view('pages/test');
		$this->load->view('templates/footer');
	}
}
