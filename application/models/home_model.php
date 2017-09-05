<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {


	public function __construct() {
		$this->load->database(); 
	}

	
	public function login($postData) {		
		$condition = "user_name =" . "'" . $postData['username'] . "' AND " . "user_password =" . "'" . $postData['password'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
	public function get_user_details($username) {
		if($username != FALSE) {
			$query = $this->db->get_where('users', array('user_name' => $username));
			return $query->row_array();
		}
		else {
			return false;
		}
	}
	
	public function get_static_pages($id) {
		if($id != FALSE) {
			$query = $this->db->get_where('pages', array('id' => $id));
			return $query->row_array();
		}
		else {
			return FALSE;
		}
	}

}