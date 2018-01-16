<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (! $this->session->userdata('loggedIn') || $this->session->userdata('loggedIn') == null) {
			redirect('auth');
		}
		$this->load->model('admin_model');
		$this->load->model('siswa_model');
		//Do your magic here
	}

	public function index()
	{
		if ($this->session->userdata('loggedIn') == TRUE) {
			$data['main_view'] = 'siswa/profilsiswa';
			$data['siswa'] = $this->siswa_model->getDataSiswa();
			$data['kelas'] = $this->siswa_model->getDataKelas();
			$data['noabsen'] = $this->siswa_model->getDataAbsen();
			$data['capelsis'] = $this->siswa_model->getDataPelSis();
			$this->load->view('siswa/template', $data);
		} else {
				redirect('auth');
			}

	}

	public function profil()
	{
		$data['main_view'] = 'siswa/profilsiswa';		
		$data['siswa'] = $this->siswa_model->getDataSiswa();
		$data['kelas'] = $this->siswa_model->getDataKelas();
		$data['noabsen'] = $this->siswa_model->getDataAbsen();
		$data['capelsis'] = $this->siswa_model->getDataPelSis();
		$this->load->view('siswa/template', $data);
	}

	public function capel()
	{
		$data['main_view'] = 'siswa/dasbor';
		$this->load->view('siswa/template', $data);
	}

	public function logout(){
        //delete login status & user info from session
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('loggedRole');
        $this->session->unset_userdata('userData');        
        $this->session->unset_userdata('loggedID');
        $this->session->unset_userdata('loggedSiswaName');
        $this->session->sess_destroy();
        
        //redirect to login page
        redirect('Auth');
    }

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */