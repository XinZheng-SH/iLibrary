<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Books extends CI_Controller
{
	// load all views related to popular book list
	public function view()
	{
	if ($this->session->userdata('logged_in')) {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/logged_header', $data);
	} else {
		$this->load->view('templates/header');
	}
		$this->load->view('pages/bookshelf');
		$this->load->view('templates/footer');
	}

	public function bookConnect()
	{
		if ($this->session->userdata('logged_in')) {
			$data['username'] = $this->session->userdata('username');
			$this->load->view('templates/logged_header', $data);
		} else {
			$this->load->view('templates/header');
		}
		$this->load->view('pages/bookConnect');
		$this->load->view('templates/footer');
	}
}
