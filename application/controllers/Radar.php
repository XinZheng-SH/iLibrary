<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radar extends CI_Controller {

	public function view() {
		$this->load->view('templates/header');
		$this->load->view('pages/searchLibrary');
		$this->load->view('templates/footer');
	}
}
