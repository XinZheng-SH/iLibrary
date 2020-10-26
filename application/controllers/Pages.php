<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller{

	// general view to make sure the default route can call every single view
	public function view($page = 'homepage'){

		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
		$data['title'] = ucfirst($page);

		if ($this->session->userdata('logged_in')) {
			$data['username'] = $this->session->userdata('username');
			$this->load->view('templates/logged_header', $data);
		} else {
			$this->load->view('templates/header');
		}

		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}

	// footer redirect to team profile page
	public function team_profile() {
		if ($this->session->userdata('logged_in')) {
			$data['username'] = $this->session->userdata('username');
			$this->load->view('templates/logged_header', $data);
		} else {
			$this->load->view('templates/header');
		}
		$this->load->view('pages/teamProfile');
		$this->load->view('templates/footer');
	}

}
