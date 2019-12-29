<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("transaksi_m");
        $this->load->library('form_validation');
    }
     function index(){
		$data['transaction'] = $this->transaksi_m->tampil_data()->result();
		$this->load->view('transaksi/transaksi_v',$data);
	}
    function tambah(){
        $this->load->view('transaksi/new_form');
    }
    function tambah_aksi(){
        $no_tran = $this->input->post('no_tran');
        $nik = $this->input->post('nik');
        $start_date = date_format(date_create($this->input->post('start_date')), 'Y-m-d');
        $end_date = date_format(date_create($this->input->post('end_date')), 'Y-m-d');
 
        $data = array(
            'no_tran' => $no_tran,
            'nik' =>$nik,
            'start_date' => $start_date,
            'end_date' => $end_date
            );
        $this->transaksi_m->input_data($data,'transaction');
        redirect('transaksi/index');
    }
}
