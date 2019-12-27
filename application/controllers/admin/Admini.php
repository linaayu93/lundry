<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admini extends CI_Controller {
	
	 public function __construct(){
			parent::__construct();
			$this->load->model("administrator_m");
			$this->load->helper(array('url','text','form'));
			$this->load->library('form_validation');
		} 	

		public function index(){
		$data['data_member']= $this->administrator_m->get_member_by_id($this->session->userdata('member_id'));
		$this->load->view('admin/administrator_v', $data);
		}

		public function member_login(){
			$this->login();
			redirect('member'); // jika login success
		}

		public function register_member(){
			$this->load->view('admin/administrator_v');
		}

		public function submit_register(){
			// validation form
			if (!$this->session->userdata('member_id')){
				$this->form_validation->set_rules('nip', 'NIP', 'required');
				$this->form_validation->set_rules('member_name', 'Nama Lengkap', 'required');	
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email');	
				$this->form_validation->set_rules('telp', 'Nomor telepon', 'required|numeric');	
				$this->form_validation->set_rules('address', 'Alamat ', 'required');	
				$this->form_validation->set_rules('username', 'Username', 'required');	
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[retype_password]');	
				$this->form_validation->set_rules('retype_password', 'Retype Password', 'required|min_length[5]|matches[password]');	

				if($this->form_validation->run()==FALSE){
					$this->session->set_flashdata('failed', validation_errors('<div class="alert alert-danger">','</div>'));
					redirect('admin/admini/register_member');				
				} else {

			// proses upload gmabar
			$config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
			 if ( ! $this->upload->do_upload('photo')) //sesuai dengan name pada form 
		            {
		                   echo 'anda gagal upload';
		            }
	                $file = $this->upload->data();	
        			$gambar = $file['file_name'];


					//proses register
					$data_member = array(
							'nip' =>$this->input->post('nip'),
							'member_name' =>$this->input->post('member_name'),
							'email' =>$this->input->post('email'),
							'telp' =>$this->input->post('telp'),
							'image' =>$gambar,
							'address' =>$this->input->post('address'),
							'username' =>$this->input->post('username'),
							'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
						);
					$this->administrator_m->register($data_member);

					//proses login
					$member=$this->administrator_m->get_member_by_username($this->input->post('username'));
					$this->session->set_userdata(array(
						'member_id' => $member->id,
						'member_name' => $member->name,
						'member_email' => $member->email,
						'member_logged_in' => TRUE
					));
				}
			}

			redirect('admin/awal');
		}

		
}