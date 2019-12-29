<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("employee_m");
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['employee'] = $this->employee_m->tampil_data()->result();
		$this->load->view('employee/employee_v',$data);
	}
	public function tambah()
	{
		$this->load->view('employee/new_form');
	}
	public function tambah_aksi()
	{
		$name = $this->input->post('name');
        $address = $this->input->post('address');
        $status = $this->input->post('status');
        $position = $this->input->post('position');
        $start_date = date_format(date_create($this->input->post('start_date')), 'Y-m-d');
        
 
        $data = array(
            'name' => $name,
            'address' =>$address,
            'status' => $status,
            'position' => $position,
            'start_date' => $start_date
            );
        $this->employee_m->input_data($data,'employee');
        redirect('employee/index');
	}
	public function edit($id = null)
	{
		$where = array('id_employee' => $id);
		$data['employee'] = $this->employee_m->edit_data($where,'employee')->result();
		$this->load->view('employee/form_edit',$data);
	}
	public function update()
	{
		$id = $this->input->post('id_employee');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$status = $this->input->post('status');
		$position = $this->input->post('position');
		
	 
		$data = array(
			'name' => $name,
			'address' => $address,
			'status' => $status,
			'position' => $position
			
		);
	 
		$where = array(
			'id_employee' => $id
		);
	 
		$this->employee_m->update_data($where,$data,'employee');
		redirect('employee/index');
	}
	public function delete($id)
	{
		$where = array('id_employee' => $id);
		$this->employee_m->hapus_data($where,'employee');
		redirect('employee/index');
	}
}
