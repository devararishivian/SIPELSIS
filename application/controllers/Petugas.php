<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (! $this->session->userdata('loggedIn') || $this->session->userdata('loggedIn') == null) {
			redirect('auth/admin');
		}
		$this->load->model('admin_model');
		$this->load->model('siswa_model');
	}

	public function index()
	{
		if ($this->session->userdata('loggedRole') == 'Petugas') {
			$data['main_view'] = 'petugas/dasbor';
			$data['admin'] = $this->admin_model->getAllAdmin();
			$this->load->view('petugas/template', $data);
		} else {
				redirect('admin');
			}
	}

	public function logout(){
        //delete login status & user info from session
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('loggedRole');
        $this->session->unset_userdata('userData');
        $this->session->sess_destroy();
        
        //redirect to login page
        redirect('Auth/admin');
    }

} 

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */