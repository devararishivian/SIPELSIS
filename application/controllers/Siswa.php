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

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */