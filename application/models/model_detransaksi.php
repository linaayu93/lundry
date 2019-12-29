<?php
class Model_detransaksi extends CI_Model
{
	function post($data)
	{
		$this->db->insert('packet',$data);
	}

	function get_one($id)
	{
		$param = array('packet_id'=>$id);
		return $this->db->get_where('packet',$param);
	}


}