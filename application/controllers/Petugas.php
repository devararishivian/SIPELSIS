<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['main_view'] = 'petugas/dasbor';
		$this->load->view('petugas/template', $data);
	}

}

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */