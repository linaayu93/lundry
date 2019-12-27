<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_M extends CI_Model
{
  function tampil_data(){
        $query = "SELECT *
        FROM detail_transaction
        JOIN transaction ON transaction.id_transaction = detail_transaction.id_transaction
        JOIN packet ON packet.packet_id =  detail_transaction.packet_id";
		return $this->db->query($query);
    }
    function post($data)
	{
		$this->db->insert('detail_transaction',$data);
	}
  
}
