<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	// link to database
	public function __construct()
	{
		$this->load->database();
	}

	// check if username exist, return 1 row if exist
	function check_username($username) {
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('username', $username);
		return $this->db->get();
	}

	// check if username and password in the database
	function check_user($username, $password) {
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get();
		return $query;
	}

	// create new user
	function insert_user() {
		$data = array (
			"email" => $this->input->post('email'),
			"lastName" => $this->input->post('lastName'),
			"firstName" => $this->input->post('firstName'),
			"username" => $this->input->post('username'),
			"password" => $this->input->post('password')
		);
		$this->db->insert('tbl_users', $data);
	}

}
