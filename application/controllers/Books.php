<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller
{
	public function view() {
		// load position from the database
		$data['position'] = $this->Radar_modal->get_position();

		$this->load->view('templates/header');
		$this->load->view('pages/searchLibrary', $data);
		$this->load->view('templates/footer');
	}
}
