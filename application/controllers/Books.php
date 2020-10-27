<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Books extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Book_model');
	}

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

	//Retrieve book title from cookie
	public function bookAddList()
	{
		$bookTitle = get_cookie('listBookTitle');
		$username = $this->session->userdata('username');

		if ($username != null) {
			$this->Book_model->addToList($username, $bookTitle);
		} else {
			echo '<script type="text/javascript">alert("Please Login Your Account First");history.go(-1);</script>';
		}
	}

	public function bookList()
	{
		if ($this->session->userdata('logged_in')) {
			$data['username'] = $this->session->userdata('username');
			$data['bookList'] = $this->Book_model->getList($data['username']);
			$this->load->view('templates/logged_header', $data);
		} else {
			$this->load->view('templates/header');
		}
		$this->load->view('pages/bookList');
		$this->load->view('templates/footer');
	}

	public function getBookList()
	{
	}
}
