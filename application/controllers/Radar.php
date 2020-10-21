<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Radar_model');
	}

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

	public function getData() {
		$library_id = $this->input->post('icon_id');
		$result = $this->Radar_model->get_data($library_id);

		echo json_encode($result);
	}

	public function getComment() {
		$library_id = $this->input->post('icon_id');

		$result = $this->Radar_model->get_comments($library_id)->result_array();

//		$result['resultOne'] = $resultOne;

		echo json_encode($result);
	}

	public function test() {
		$this->load->view('templates/header');
		$this->load->view('pages/test');
		$this->load->view('templates/footer');
	}

	public function insert_comment() {
		$library_id = get_cookie('libraryID');
		$content = $this->input->post('inputVal');
		$username = $this->session->userdata('username');
		$this->Radar_model->createComment($username, $library_id, $content);
		$result = $this->Radar_model->get_comments($library_id)->row();

		echo json_encode($result);
//		if ($this->session->userdata('logged_in')) {
//			$library_id = get_cookie("libraryID");
//			$username = $this->session->userdata('username');
//			$this->Radar_model->createComment($username, $library_id);
//
//			$result = $this->Radar_model->get_comments($library_id);
//			echo dd($result);
//			echo json_encode($result);
//		} else {
//			echo "<script>alert('You need to login to comment');history.go(-1);</script>";
//		}
	}
}
