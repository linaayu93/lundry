<?php 
	class Administrator_M extends CI_Model{
		public function get_member_by_username($username){
			return $this->db->get_where('admin', array('username' => $username))->row();
		}
		public function get_member_by_id($id){
			return $this->db->get_where('admin', array('id' => $id))->row();
		}

		public function register($data_insert){
			$this->db->insert('admin', $data_insert);
		}
	}