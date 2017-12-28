<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['main_view'] = 'view_dasboradmin';
		$this->load->view('view_templateadmin', $data);
	}

	public function lihatadmin()
	{
		$data['main_view'] = 'view_lihatadmin';
		$this->load->view('view_templateadmin', $data);
	}

	public function lihatpetugas()
	{
		$data['main_view'] = 'view_lihatpetugas';
		$this->load->view('view_templateadmin', $data);
	}

	public function lihatpelanggaran()
	{
		$data['main_view'] = 'view_lihatpelanggaran';
		$this->load->view('view_templateadmin', $data);
	}

	public function tambahadmin()
	{
		$data['main_view'] = 'view_tambahadmin';
		$this->load->view('view_templateadmin', $data);
	}

	public function tambahpetugas()
	{
		$data['main_view'] = 'view_tambahpetugas';
		$this->load->view('view_templateadmin', $data);
	}

	public function tambahpelanggaran()
	{
		$data['main_view'] = 'view_tambahpelanggaran';
		$this->load->view('view_templateadmin', $data);
	}

	public function verifikasipelanggaran()
	{
		$data['main_view'] = 'view_verifpelanggaran';
		$this->load->view('view_templateadmin', $data);
	}

	public function kelolasiswa()
	{
		$data['main_view'] = 'view_kelolasiswa';
		$this->load->view('view_templateadmin', $data);
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */