<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radar_model extends CI_Model
{
	// link to database
	public function __construct()
	{
		$this->load->database();
	}

	// return library position in array
	function get_position() {
		$this->db->select('id, Latitude, Longitude');
		$this->db->from('library_data');
		return $result = $this->db->get()->result_array();
	}

	// get library information based on its id
	function get_data($library_id) {
		$this->db->select('*');
		$this->db->from('library_data');
		$this->db->where('id', $library_id);
		return $this->db->get()->row();
	}

	// insert new comment to the comment table
	function createComment($username, $id, $content) {
		$data = array(
			'username' => $username,
			"words" => $content,
			'library_id' => $id
		);
		$this->db->insert('tbl_comment', $data);
	}

	// retrieve comment based on the library id
	function get_comments($id) {
		$this->db->select('*');
		$this->db->from('tbl_comment');
		$this->db->where('library_id', $id);
		return $this->db->get();
	}
}
