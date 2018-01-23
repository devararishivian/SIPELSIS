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
		$this->load->model('pelanggaran_model');
	}

	public function index()
	{
		if ($this->session->userdata('loggedRole') == 'Admin') {
			$data['main_view'] = 'admin/dasbor';
			$data['admin'] = $this->admin_model->getAllAdmin();
			$data['total_a'] = $this->admin_model->total_admin();
			$data['total_p'] = $this->admin_model->total_petugas();
			$data['total_s'] = $this->admin_model->total_siswa();
			$data['total_pelok'] = $this->admin_model->total_pelanggaran();
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
		if($this->pelanggaran_model->admininsertpelanggaran() == TRUE){
			redirect('admin/lihatsiswa');
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

	public function deleteadmin($id)
	{
		if($this->admin_model->deleteadmin($id) == TRUE){
			$this->session->set_flashdata('success', 'Siswa Berhasil Dihapus');
			redirect('admin/lihatadmin');
		} else {
			$this->session->set_flashdata('failed', 'Siswa Gagal Dihapus');
			redirect('admin/lihatadmin');
		}
	}

	public function deletepetugas($id)
	{
		if($this->admin_model->deletepetugas($id) == TRUE){
			$this->session->set_flashdata('success', 'Siswa Berhasil Dihapus');
			redirect('admin/lihatpetugas');
		} else {
			$this->session->set_flashdata('failed', 'Siswa Gagal Dihapus');
			redirect('admin/lihatpetugas');
		}
	}

	public function deletesiswa($id)
	{
		if($this->admin_model->deletesiswa($id) == TRUE){
			$this->session->set_flashdata('success', 'Siswa Berhasil Dihapus');
			redirect('admin/kelolasiswa');
		} else {
			$this->session->set_flashdata('failed', 'Siswa Gagal Dihapus');
			redirect('admin/lihatkelolasiswa');
		}
	}

	public function kelolaadmin()
	{
		$data['main_view'] = 'admin/kelolaadmin';
		$data['admin'] = $this->admin_model->getDetilAdmin($this->uri->segment(3));
		$this->load->view('admin/template', $data);
	}

	public function updateadmin()
	{

		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']  = '2000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if($this->upload->do_upload('FOTO_ADMIN')){
			if($this->admin_model->updateadmin($this->upload->data(), $this->uri->segment(3)) == TRUE){
				redirect('admin/lihatadmin');
			} else {
			$this->session->set_flashdata('failed', $this->upload->display_errors());
	        redirect('admin/lihatadmin');
			}
		}
	}

	public function lihatpetugas()
	{
		$data['main_view'] = 'admin/lihatpetugas';
		$data['admin'] = $this->admin_model->getPetugasByRole();
		$this->load->view('admin/template', $data);
	}

	public function kelolapetugas()
	{
		$data['main_view'] = 'admin/kelolapetugas';
		$data['admin'] = $this->admin_model->getDetilAdmin($this->uri->segment(3));
		$this->load->view('admin/template', $data);
	}

	public function updatepetugas()
	{

		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']  = '2000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if($this->upload->do_upload('FOTO_ADMIN')){
			if($this->admin_model->updatepetugas($this->upload->data(), $this->uri->segment(3)) == TRUE){
				redirect('admin/lihatpetugas');
			} else {
			$this->session->set_flashdata('failed', $this->upload->display_errors());
	        redirect('admin/lihatpetugas');
			}
		}
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

	/*public function tambahpelanggaran()
	{
		$data['main_view'] = 'admin/tambahpelanggaran';
		$this->load->view('admin/template', $data);
	}*/

	public function tambahsiswa()
	{
		$data['main_view'] = 'admin/tambahsiswa';
		$data['siswa'] = $this->siswa_model->getAllSiswa();
		$data['kelas'] = $this->siswa_model->getAllKelas();
		$data['noabsen'] = $this->siswa_model->getNoAbsen();
		$this->load->view('admin/template', $data);
	}

	public function lihatsiswa()
	{
		$data['main_view'] = 'admin/lihatsiswa';
		$data['siswa'] = $this->siswa_model->getAllSiswa();
		$data['kelas'] = $this->siswa_model->getAllKelas();
		$data['noabsen'] = $this->siswa_model->getNoAbsen();
		$this->load->view('admin/template', $data);
	}

	public function lihatcapelsis()
	{
		$data['main_view'] = 'admin/lihatcapelsis';		
		$data['allcapelsis'] = $this->admin_model->getAllCapelsis();
		$this->load->view('admin/template', $data);
	}

	public function konfirmasipelsis()
	{
		$data['main_view'] = 'admin/konfirmasipelsis';		
		$data['allcapelsis'] = $this->admin_model->getAllCapelsisNotOk();
		$this->load->view('admin/template', $data);
	}

	public function konfirmasicapelsis()
	{
		if($this->admin_model->konfirmasicapelsis($this->uri->segment(3)) == TRUE){
			redirect('admin/lihatcapelsis');
		} else {
			$this->session->set_flashdata('failed');
	        redirect('admin/konfirmasipelsis');
		}
	}

	public function managesiswa()
	{
		$data['main_view'] = 'admin/managesiswa';
		$data['kelas'] = $this->siswa_model->getAllKelas();
		$data['noabsen'] = $this->siswa_model->getNoAbsen();
		$data['kelsis'] = $this->siswa_model->getKelsis($this->uri->segment(3));
		$data['nosis'] = $this->siswa_model->getNosis($this->uri->segment(3));
		$data['siswa'] = $this->siswa_model->getDetilSiswa($this->uri->segment(3));
		$this->load->view('admin/template', $data);

	}

	public function managepelanggaran()
	{
		$data['main_view'] = 'admin/managepelanggaran';
		$data['kelas'] = $this->siswa_model->getAllKelas();
		$data['noabsen'] = $this->siswa_model->getNoAbsen();
		$data['kelsis'] = $this->siswa_model->getKelsis($this->uri->segment(3));
		$data['nosis'] = $this->siswa_model->getNosis($this->uri->segment(3));
		$data['siswa'] = $this->siswa_model->getDetilSiswa($this->uri->segment(3));
		$data['capelsis'] = $this->siswa_model->getCaPelSisOk($this->uri->segment(3));
		$this->load->view('admin/template', $data);

	}

	public function deletecapelsis($id)
	{
		if($this->siswa_model->deletecapelsis($id) == TRUE){
			$this->session->set_flashdata('success', 'Siswa Berhasil Dihapus');
			redirect('admin/lihatcapelsis');
		} else {
			$this->session->set_flashdata('failed', 'Siswa Gagal Dihapus');
			redirect('admin/dasbor');
		}
	}

	public function tambahpelanggaran(){
    	$data['main_view'] = 'admin/tambahpelanggaran';
		$data['siswa'] = $this->siswa_model->getDetilSiswa($this->uri->segment(3));
		$data['kapel'] = $this->pelanggaran_model->getKaPel();
		$data['pel'] = $this->pelanggaran_model->getPel();
		$data['popel'] = $this->pelanggaran_model->getPoPel();
        $this->load->view('admin/template', $data);
    }

//$this->Admin_model->update_siswa($id,$data);
//$this->show_student_id();
	public function updatesiswa()
	{
		if($this->admin_model->updatesiswa($this->uri->segment(3)) == TRUE){
			$this->session->set_flashdata('success', 'Edit data berhasil');
			redirect('admin/kelolasiswa');
		} else {
			$this->session->set_flashdata('success', 'Edit data berhasil');
			$data['notif'] = 'gagal';
		    redirect('admin/kelolasiswa');
		} 
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