<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radar_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	function get_position() {
		$this->db->select('id, Latitude, Longitude');
		$this->db->from('library_data');
		return $result = $this->db->get()->result_array();
	}

	function get_data($library_id) {
		$this->db->select('*');
		$this->db->from('library_data');
		$this->db->where('id', $library_id);
		return $this->db->get()->row();
	}

	function createComment($username, $id, $content) {
		$data = array(
			'username' => $username,
			"contents" => $content,
			'library_id' => $id
		);
		$this->db->insert('tbl_comment', $data);
	}

	function get_comments($id) {
		$this->db->select('*');
		$this->db->from('tbl_comment');
		$this->db->where('library_id', $id);
		return $this->db->get();
	}

//	function get_latitude($id) {
//		$this->db->select('Latitude');
//		$this->db->from('ilibrary_data');
//		$this->db->where('id', $id);
//		$query = $this->db->get();
//		$value = $query->row();
//		return $value->Latitude;
//	}

//	function get_longitude($id)
//	{
//		$this->db->select('Longitude');
//		$this->db->from('ilibrary_data');
//		$this->db->where('id', $id);
//		$query = $this->db->get();
//		$value = $query->row();
//		return $value->Latitude;
//	}
}
