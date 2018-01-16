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
			$data['siswa'] = $this->siswa_model->getAllSiswa();
			$data['kelas'] = $this->siswa_model->getAllKelas();
			$data['kapel'] = $this->admin_model->getKategoriPelanggaran();
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

    public function tambahpelanggaran(){
    	$data['main_view'] = 'petugas/tambahpelanggaran';
    	$data['siswa'] = $this->siswa_model->getDetilSiswa($this->uri->segment(3));
        $this->load->view('petugas/template', $data);
    }

    public function insertpelanggaran()
	{
		if($this->admin_model->tambahpelanggaran() == TRUE){
			redirect('petugas');
		} else {
			redirect('petugas/tambahpelanggaran');
		}
	}

} 

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */