<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (! $this->session->userdata('loggedIn') || $this->session->userdata('loggedIn') == null) {
			redirect('/');
		}
		$this->load->model('admin_model');
		$this->load->model('siswa_model');
		//Do your magic here
	}

	public function index()
	{
		/*if($this->session->userdata('loggedIn') == TRUE){
			if($this->session->userdata('loggedRole') != 'Admin'){
				//$id = $this->session->userdata('IDADMIN');
				$data['main_view'] = 'admin/dasbor';
				$data['admin'] = $this->admin_model->getAllAdmin();
				$data['total_a'] = $this->admin_model->total_admin();
				$this->load->view('admin/template', $data);
			} else {
				redirect('petugas');
			}
		} else {
			redirect('Auth/admoon');
		}*/
		if ($this->session->userdata('loggedRole') == 'Admin') {
			$data['main_view'] = 'admin/dasbor';
			$data['admin'] = $this->admin_model->getAllAdmin();
			$data['total_a'] = $this->admin_model->total_admin();
			$data['total_p'] = $this->admin_model->total_petugas();
			$this->load->view('admin/template', $data);
		} else {
				redirect('petugas');
			}
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

	public function logout(){
        //delete login status & user info from session
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('loggedRole');
        $this->session->unset_userdata('userData');
        $this->session->sess_destroy();
        
        //redirect to login page
        redirect('Auth/admin');
    }

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */