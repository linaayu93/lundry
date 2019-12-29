<?php

class Model_detransaksi_detail extends CI_model{
	
	function insert_temp()
	{
		$packet_id		= $_GET['packet_id'];
		$id_transaction	= $_GET['id_transaction'];
		$price			= $_GET['price'];
		$qty			= $_GET['subtotal'];
		$subtotal		= $hpp*$qty;
		$data			= array(
							'status'=>0,
							'packet_id'		=>$packet_id,
							'id_transaction'=>$id_transaction,
							'price'			=>$price,
							'qty'			=>$qty,
							'subtotal'		=>$subtotal,
							);
		$check= $this->db->get_where();
	}
}
?>