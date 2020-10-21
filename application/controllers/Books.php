<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Books extends CI_Controller
{
	public function view()
	{

		$this->load->view('templates/header');
		$this->load->view('pages/bookshelf');
		$this->load->view('templates/footer');
	}

	public function bookConnect()
	{

		$this->load->view('templates/header');
		$this->load->view('pages/bookConnect');
		$this->load->view('templates/footer');
	}
}
