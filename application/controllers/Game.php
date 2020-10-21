<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Game extends CI_Controller{

	public function index(){
		if ($this->session->userdata('logged_in')) {
			$data['username'] = $this->session->userdata('username');
			$this->load->view('templates/logged_header', $data);
		} else {
			$this->load->view('templates/header');
		}
		$this->load->view('pages/game');
		$this->load->view('templates/footer');
	}

	function book_recommend(){
		$this->load->view('pages/book_recommend');
	}
}
