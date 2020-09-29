<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller{

//	public function __construct()
//	{
////		parent::__construct();
////		$this->load->model('Page_model');
//	}

	public function view($page = 'home'){

		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
		$data['title'] = ucfirst($page);

//		$this->load->helper('dd');
//		echo dd('123');

		$this->load->view('templates/header');

//		$data['results'] = $this->Page_model->readComment();

		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}

}
