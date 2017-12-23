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
		$data['main_view'] = 'view_dasborpetugas';
		$this->load->view('view_templatepetugas', $data);
	}

}

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */