<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radar extends CI_Controller {

	// link to Map modal
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Radar_model');
	}

	// retrieve data from backend and pass position (latitude, longitude) to the view
	public function view() {
		// load position from the database
		$data['position'] = $this->Radar_model->get_position();

		if ($this->session->userdata('logged_in')) {
			$data['username'] = $this->session->userdata('username');
			$this->load->view('templates/logged_header', $data);
		} else {
			$this->load->view('templates/header');
		}
		$this->load->view('pages/searchLibrary', $data);
		$this->load->view('templates/footer');
	}

	// use library ID to retrieve relevant information about the library
	public function getData() {
		// fetch library from Ajax
		$library_id = $this->input->post('icon_id');
		$result = $this->Radar_model->get_data($library_id);
		// encode JSON send back to front-end once request call
		echo json_encode($result);
	}

	// use library ID to retrieve relevant information about comments of library
	public function getComment() {
		$library_id = $this->input->post('icon_id');

		$result = $this->Radar_model->get_comments($library_id)->result_array();
		// encode JSON send back to front-end once request call
		echo json_encode($result);
	}

	// check login status, if pass, insert new comment
	public function insert_comment() {
		$library_id = get_cookie('libraryID');
		$words = $this->input->post('inputVal');
		$username = $this->session->userdata('username');
		$this->Radar_model->createComment($username, $library_id, $words);
		$result = $this->Radar_model->get_comments($library_id)->row();

		echo json_encode($result);
	}
}
