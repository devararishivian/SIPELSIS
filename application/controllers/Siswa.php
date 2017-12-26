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
		$data['main_view'] = 'view_dasborsiswa';
		$this->load->view('view_templatesiswa', $data);
	}

	public function profil()
	{
		$data['main_view'] = 'view_profilsiswa';
		$this->load->view('view_templatesiswa', $data);
	}

	public function capel()
	{
		$data['main_view'] = 'view_dasborsiswa';
		$this->load->view('view_templatesiswa', $data);
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */