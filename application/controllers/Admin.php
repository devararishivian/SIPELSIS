<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (! $this->session->userdata('loggedIn') || $this->session->userdata('loggedIn') == null) {
			redirect('auth/admin');
		}
		$this->load->model('admin_model');
		$this->load->model('siswa_model');
		//Do your magic here
	}

	public function index()
	{
		if ($this->session->userdata('loggedRole') == 'Admin') {
			$data['main_view'] = 'admin/dasbor';
			$data['admin'] = $this->admin_model->getAllAdmin();
			$data['total_a'] = $this->admin_model->total_admin();
			$data['total_p'] = $this->admin_model->total_petugas();
			$data['total_s'] = $this->admin_model->total_siswa();
			$this->load->view('admin/template', $data);
		} else {
				redirect('petugas');
			}

		//$this->form_validation->set_value('NAMA_ADMIN','NAMA', 'trim|required');

		/*if($this->input->post('submit')){			

			if ($this->form_validation->run() == TRUE) {

				if($this->admin_model->insertadmin() == TRUE)
				{
					$this->load->view('admin/lihatadmin');
				} else {
						$this->load->view('admin/tambahadmin');
				
			} else {
					$this->load->view('admin/tambahadmin');
			} */

	}

	public function insertadmin()
	{
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']  = '2000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if($this->upload->do_upload('FOTO_ADMIN')){
			if($this->admin_model->insertadmin($this->upload->data()) == TRUE){
				redirect('admin/lihatadmin');
			} else {
				redirect('admin/tambahadmin');
			}
		} else {
			$this->session->set_flashdata('failed', $this->upload->display_errors());
	        redirect('admin/tambahadmin');
		}
	}

	public function insertpetugas()
	{
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']  = '2000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if($this->upload->do_upload('FOTO_ADMIN')){
			if($this->admin_model->insertadmin($this->upload->data()) == TRUE){
				redirect('admin/lihatpetugas');
			} else {
				redirect('admin/tambahpetugas');
			}
		} else {
			$this->session->set_flashdata('failed', $this->upload->display_errors());
	        redirect('admin/tambahpetugas');
		}
	}

	public function insertpelanggaran()
	{
		if($this->admin_model->insertpelanggaran() == TRUE){
			redirect('admin/lihatpelanggaran');
		} else {
			redirect('admin/tambahpelanggaran');
		}
	}

	public function insertsiswa()
	{
		if($this->admin_model->insertsiswa() == TRUE){
			redirect('admin/kelolasiswa');
		} else {
			redirect('admin/kelolasiswa');
		}
	}


	public function lihatadmin()
	{
		$data['main_view'] = 'admin/lihatadmin';
		$data['admin'] = $this->admin_model->getAdminByRole();
		$this->load->view('admin/template', $data);
	}

	public function lihatpetugas()
	{
		$data['main_view'] = 'admin/lihatpetugas';
		$data['admin'] = $this->admin_model->getPetugasByRole();
		$this->load->view('admin/template', $data);
	}

	public function lihatpelanggaran()
	{
		$data['main_view'] = 'admin/lihatpelanggaran';
		$data['pelanggaran'] = $this->admin_model->getAllPelanggaran();
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
		$data['siswa'] = $this->siswa_model->getAllSiswa();
		$this->load->view('admin/template', $data);
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

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */