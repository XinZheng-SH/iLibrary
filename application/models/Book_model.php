<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book_model extends CI_Model{

    function addToList($username, $bookTitle) {
        $data = array(
            'username' => $username,
            'book_title' => $bookTitle,
        );
        $this->db->insert('book_list', $data);
    }

    function getList($username) {
        $this->db->select('*');
        $this->db->from('book_list');
        $this->db->where('username', $username);
        return $this->db->get();
        
    }
}