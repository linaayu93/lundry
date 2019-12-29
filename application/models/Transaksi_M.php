<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_M extends CI_Model
{
  function tampil_data(){
        return $this->db->query('SELECT t.id_transaction, t.nik, t.no_tran, t.start_date, t.end_date FROM transaction t');
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    
}
