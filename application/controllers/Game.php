<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Game extends CI_Controller{

	public function index(){
		$this->load->view('pages/game');
	}

	function book_recommend(){
		$this->load->view('pages/book_recommend');
	}
}
