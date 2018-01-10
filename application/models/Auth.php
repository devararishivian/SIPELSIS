<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('USERNAME',$username)
						  ->where('PASSWORD',$password)
						  ->get('tb_akun');

		if($query->num_rows() > 0){
			$result = $query->result_array();

			$siswa = array_shift($result);

			$data = array('USERNAME' 	=> $username, 
						  'logged_in' 	=> TRUE, 
						  'SISWA_ID' 	=> $siswa['SISWA_ID'], 
						  'ROLE'		=> $siswa['ROLE'],
						  'STATUS'		=> $siswa['STATUS']
						);

			$this->session->set_userdata($data);

			return TRUE;
		} else {
			return FALSE;
		}
	}s
	

}

/* End of file Auth.php */
/* Location: ./application/models/Auth.php */