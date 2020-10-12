<?php

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
	}

	public function book()
	{
		$this->load->view('templates/header');
		$this->load->view('bookshelf/books');
		$this->load->view('templates/footer');
	}

	public function details()
	{
		$this->load->view('bookshelf/details');
	}


}
