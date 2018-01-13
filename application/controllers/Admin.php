<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('siswa_model');
		//Do your magic here
	}

	public function index()
	{
		$data['main_view'] = 'admin/dasbor';
		$data['data_admin'] = $this->admin_model->get_data_admin();
		$this->load->view('admin/template', $data);
	}

	public function lihatadmin()
	{
		$data['main_view'] = 'admin/lihatadmin';
		$this->load->view('admin/template', $data);
	}

	public function lihatpetugas()
	{
		$data['main_view'] = 'admin/lihatpetugas';
		$this->load->view('admin/template', $data);
	}

	public function lihatpelanggaran()
	{
		$data['main_view'] = 'admin/lihatpelanggaran';
		$this->load->view('admin/template', $data);
	}

	public function tambahadmin()
	{
		$data['main_view'] = 'admin/tambahadmin';
		$this->load->view('admin/template', $data);
	}

	public function tambahpetugas()
	{
		$data['main_view'] = 'admin/tambahpetugas';
		$this->load->view('admin/template', $data);
	}

	public function tambahpelanggaran()
	{
		$data['main_view'] = 'admin/tambahpelanggaran';
		$this->load->view('admin/template', $data);
	}

	public function verifikasipelanggaran()
	{
		$data['main_view'] = 'admin/verifpelanggaran';
		$this->load->view('admin/template', $data);
	}

	public function kelolasiswa()
	{
		$data['main_view'] = 'admin/kelolasiswa';
		$this->load->view('admin/template', $data);
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */