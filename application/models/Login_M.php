<?php
class Login_M extends CI_Model{
	//cek nip dan password admin
	function auth_dosen($username,$password){
		$query=$this->db->query("SELECT * FROM admin WHERE nip='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek nim dan password employee
	function auth_mahasiswa($username,$password){
		$query=$this->db->query("SELECT * FROM employee WHERE nik='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

}
