<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailtransaction extends CI_Controller {
	function __construct(){
		 parent:: __construct();
        $this->load->model("detail_m");
	}
	
	public function index()
	{
		$data['detail_transaction'] = $this->detail_m->tampil_data();
		$this->load->view('admin/detail/detail_v',$data);
	}
	function tambah(){
        $this->load->view('admin/detail/new_form');
    }
    function post() {
        if (isset($_POST['submit'])) {
            //proses nominal
            $packet = $this->input->post('packet_id');
            $no_tran = $this->input->post('id_transaction');
            $qty = $this->input->post('qty');
            $price = $this->input->post('price');
            $subtotal = $this->input->post('subtotal');
            $data = array('packet_id' => $packet,
                'id_transaction' => $no_tran,
                'qty' => $qty,
                'price' => $price,
                'subtotal' => $subtotal);
            $this->detail_m->post($data);
            redirect('nominal');
        } else {
            $this->load->model('Paket_M');
            $data['packet'] = $this->packet_m->tampil_data()->result();
            $this->load->model('Transaksi_M');
            $data['transaction'] = $this->transaksi_m->tampil_data()->result();
            $this->load->view('admin/detail/new_form', $data);
        }
      }
}	
