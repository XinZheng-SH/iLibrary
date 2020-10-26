<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Games extends CI_Controller{

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('pages/game1');
//		$this->load->view('templates/footer');
	}

	public function secQuiz(){
		$this->load->view('templates/header');
		$this->load->view('pages/game2');
//		$this->load->view('templates/footer');
	}

	public function thiQuiz(){
		$this->load->view('templates/header');
		$this->load->view('pages/game3');
//		$this->load->view('templates/footer');
	}

	function book_recommend(){
		$this->load->view('templates/header');
		$this->load->view('pages/book_recommend');
	}
}
