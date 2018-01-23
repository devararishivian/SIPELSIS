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
		$this->load->model('pelanggaran_model');
	}

	public function index()
	{
		if ($this->session->userdata('loggedRole') == 'Petugas') {
			$data['main_view'] = 'petugas/dasbor';
			$data['admin'] = $this->admin_model->getAllAdmin();
			$data['siswa'] = $this->siswa_model->getAllSiswa();
			$data['kelas'] = $this->siswa_model->getAllKelas();
			$data['absen'] = $this->siswa_model->getDataAbsen();

			$this->load->view('petugas/template', $data);

		} else {
				redirect('admin');
			}
	}

    public function tambahpelanggaran(){
    	$data['main_view'] = 'petugas/tambahpelanggaran';
		$data['siswa'] = $this->siswa_model->getDetilSiswa($this->uri->segment(3));
		$data['kapel'] = $this->pelanggaran_model->getKaPel();
		$data['pel'] = $this->pelanggaran_model->getPel();
		$data['popel'] = $this->pelanggaran_model->getPoPel();
        $this->load->view('petugas/template', $data);
    }

    public function insertpelanggaran()
	{
		if($this->pelanggaran_model->petugasinsertpelanggaran() == TRUE){
			redirect('petugas');
		} else {
			redirect('petugas/tambahpelanggaran');
		}
	}

	public function logout(){
        //delete login status & user info from session
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('loggedRole');
        $this->session->unset_userdata('userData');
        $this->session->unset_userdata('loggedID');
        $this->session->unset_userdata('loggedAdminName');
        $this->session->unset_userdata('FOTO_ADMIN');

        $this->session->sess_destroy();
        
        
        //redirect to login page
        redirect('Auth/admin');
    }

} 

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */