<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailtransaction extends CI_Controller {
	function __construct(){
		 parent:: __construct();
        $this->load->model('model_detransaksi');
        $this->load->model('model_detransaksi_detail');
        $this->load->model('paket_m');
        $this->load->model('transaksi_m');
	}
	
	public function index()
	{
		 $data['detailtransaksi']= $this->db->query("SELECT  dt.id_detail,p.name,t.id_transaction, dt.qty,dt.price, dt.subtotal FROM detail_transaction  dt, packet  p, transaction  t WHERE p.packet_id = dt.packet_id AND t.id_transaction=dt.id_transaction ")->result();
        $this->load->view('detail/new_form',$data);
	}
	function tambah(){
        $data['paket']= $this->db->query("SELECT * FROM packet ")->result();
        $this->load->view('detail/new_form',$data);
    }
    function post() {
         if (isset($_POST['submit'])) {
             $data=array(
                 'packet_id' => $this->input->post('packet'),
                 'id_transaction'=> $this->input->post('transaction'),
                 'qty'=> $this->input->post('qty'),
                 'price'   => $this->input->post('price'),
                 'user_id'    => $this->session->userdata('id_user')
                 );
                 $this->db->insert('transaksi_pembelian',$data);
                 redirect('pembelian');
        } else {
            $this->load->view('pembelian/form_pembelian');
        }
}	
}