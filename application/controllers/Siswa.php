<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['main_view'] = 'siswa/dasbor';
		$this->load->view('siswa/template', $data);
	}

	public function profil()
	{
		$data['main_view'] = 'siswa/profilsiswa';
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
        $this->session->sess_destroy();
        
        //redirect to login page
        redirect('Auth');
    }

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */