<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radar_modal extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	function get_position() {
		$this->db->select('Latitude, Longitude');
		$this->db->from('library_data');
		return $result = $this->db->get()->result_array();
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
