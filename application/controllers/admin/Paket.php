<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model("paket_m");
        $this->load->library('form_validation');
    }
    function index(){
		$data['packet'] = $this->paket_m->tampil_data()->result();
		$this->load->view('admin/paket/paket_v',$data);
	}
	function tambah(){
		$this->load->view('admin/paket/new_form');
	}
	function tambah_aksi(){
		$id = $this->paket_id = uniqid();
		$name = $this->input->post('name');
		$price = $this->input->post('price');
 
		$data = array(
			'name' => $name,
			'price' => $price
			);
		$this->paket_m->input_data($data,'packet');
		redirect('admin/paket/index');
	}
		function edit($id = null){
		$where = array('paket_id' => $id);
		$data['packet'] = $this->paket_m->edit_data($where,'packet')->result();
		$this->load->view('admin/paket/form_edit',$data);
	}
		function update(){
		$id = $this->input->post('paket_id');
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		
	 
		$data = array(
			'name' => $name,
			'price' => $price
			
		);
	 
		$where = array(
			'paket_id' => $id
		);
	 
		$this->paket_m->update_data($where,$data,'packet');
		redirect('admin/paket/index');
	}

}