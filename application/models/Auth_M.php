<?php 
	class Auth_M extends CI_Model{
		public function get_member_by_username($username){
			return $this->db->get_where('employee', array('username' => $username))->row();
		}
		public function get_member_by_id($id){
			return $this->db->get_where('employee', array('idm' => $id))->row();
		}

		public function register($data_insert){
			$this->db->insert('employee', $data_insert);
		}
	}