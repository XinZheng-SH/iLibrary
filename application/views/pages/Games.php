<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Games extends CI_Controller{

	var $data;

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('pages/game1');
}

	public function secQuiz(){
		$data['score1'] = $this->input->post('btn_quiz1');
		$this->session->set_userdata('score1', $data['score1']);
		$this->load->view('templates/header');
		$this->load->view('pages/game2', $data);
	}

	public function thiQuiz(){
		$data['score2'] = $this->input->post('btn_quiz2');
		$this->session->set_userdata('score2', $data['score2']);
		$this->load->view('templates/header');
		$this->load->view('pages/game3', $data);
	}

	function book_recommend(){
		$data['score3'] = $this->input->post('btn_quiz3');
		$this->session->set_userdata('score3', $data['score3']);
		$this->load->view('templates/header');
		$this->load->view('pages/book_recommend',$data);
	}
}
