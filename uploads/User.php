<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');   
		$this->load->helper('fungsidate');
    
	}

	public function index()
	{
			redirect(base_url('index.php/user/dashboard'));
	}

	public function dashboard()
	{
		if($this->session->userdata('status') == 'ADMIN')
		{
			redirect(base_url('index.php/admin/dashboard'));
		}
		if($this->session->userdata('status') == 'VERIFIKATOR')
		{
			redirect(base_url('index.php/verifikator/dashboard'));
		}
		if($this->session->userdata('status') == 'GUEST')
		{
			redirect(base_url('index.php/guest/dashboard'));
		}
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
			$witel = $this->session->userdata('witel');
			$data['count_proses_verif'] = $this->admin_model->count_proses_verif($witel);
			$data['count_nopo_status'] = $this->admin_model->count_nopo_status($witel);
			$data['count_nopo_blm'] = $this->admin_model->count_nopo_blm($witel);
			$data['count_nopo_sudah'] = $this->admin_model->count_nopo_sudah($witel);
			$data['count_po_blm'] = $this->admin_model->count_po_blm($witel);
			$data['count_po_status'] = $this->admin_model->count_po_status($witel);
			$data['count_po_bast'] = $this->admin_model->count_po_bast($witel);
			$data['count_po_inv'] = $this->admin_model->count_po_inv($witel);
			$data['count_po_done'] = $this->admin_model->count_po_done($witel);
			$data['main_view'] = "user/dashboard_user";
			$this->load->view('template2', $data);
		}
	}

	public function input()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
		$data['main_view'] = "user/form_view";
		$data['teritori'] = $this->admin_model->list_teritori();
		$data['witel'] = $this->admin_model->list_witel();
		$data['pekerjaan'] = $this->admin_model->list_pekerjaan();
		$data['program'] = $this->admin_model->list_program();
		$data['status'] = $this->admin_model->list_status();
		$data['gmpm'] = $this->admin_model->list_gmpm();
		//var_dump($this->session->userdata);

						
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('id_project', 'ID Project', 'trim|required');
				$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
				$this->form_validation->set_rules('jenis_pekerjaan', 'Jenis Pekerjaan', 'trim|required');
				$this->form_validation->set_rules('program', 'Program', 'trim|required');
				$this->form_validation->set_rules('nilai_rekon', 'Nilai Rekon', 'trim|required');
				$this->form_validation->set_rules('bulan_tahun', 'Bulan Tahun', 'trim|required');
				$this->form_validation->set_rules('status_pekerjaan', 'Status Pekerjaan', 'trim|required');
				$this->form_validation->set_rules('anggaran', 'Anggaran', 'trim|required');
				$this->form_validation->set_rules('gmpm', 'GM / PM', 'trim|required');
				$this->form_validation->set_rules('input_vestyna', 'Vestyna', 'trim|required');
				$this->form_validation->set_rules('ba_rekon', 'BA Rekon', 'trim|required');
				$this->form_validation->set_rules('pr', 'PR', 'trim|required');
				$this->form_validation->set_rules('po', 'PO', 'trim|required');
				$this->form_validation->set_rules('sp', 'SP', 'trim|required');
				$this->form_validation->set_rules('bast', 'BAST', 'trim|required');
				$this->form_validation->set_rules('inv', 'INV', 'trim|required');
				$this->form_validation->set_rules('fp', 'FP', 'trim|required');
				$this->form_validation->set_rules('anggaran', 'Anggaran', 'trim|required');

				//if($this->form_validation->run() == TRUE)
				//{	
					if($this->admin_model->input_dummy($this->session->userdata('nik')) == TRUE)
					{
						$data['notif'] = 'Input Berhasil';
						$this->load->view('template2', $data);
					}
					else
					{
						$data['notif'] = 'Input Gagal';
						$this->load->view('template2', $data);					
					}
				//}

				//else
				//{
				//	$data['notif'] = validation_errors();
				//	$this->load->view('template2', $data);					
				//}
			}

			else
			{
				$this->load->view('template2',$data);
			}
		}

	}

	public function login()
	{
		if($this->input->post('submit'))
		{
			$this->form_validation->set_rules('username', 'NIK', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run() == TRUE)
			{
				if($this->admin_model->login() == TRUE)
				{
					redirect(base_url('index.php/user/dashboard'));
				}
				else
				{
					$data['notif'] = 'NIK / PASSWORD SALAH';
					$this->load->view('login_view', $data);
				}
			}
			else
			{
				$data['notif'] = validation_errors();
				$this->load->view('login_view', $data);
			}
		}
		else
		{
			$this->load->view('login_view');
		}
	}

	public function logout()
	{
		$data = array(	'nik'		=> '',
						'nama'		=> '',
						'status'	=> '',
						'witel'		=> '',
						'logged_in'=> FALSE
					);
		$this->session->sess_destroy();
		redirect("user/login");
	}


	function remove_file(){

		//Ambil token foto
		$token=$this->input->post('token');

		
		$foto=$this->db->get_where('tb_foto',array('token'=>$token));


		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->nama_foto;
			if(file_exists($file=FCPATH.'/upload-foto/'.$nama_foto)){
				unlink($file);
			}
			$this->db->delete('tb_foto',array('token'=>$token));

		}


		echo "{}";
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
		$id = $this->uri->segment(3);
		if($this->admin_model->hapus_verif($id,$this->session->userdata('nik')) == TRUE)
			{
				$this->session->set_flashdata('notif', 'Menunggu Persetujuan Verifikator');
				redirect('all_data');
			}
			else
			{
				$this->session->set_flashdata('notif', 'Hapus data gagal');
				redirect('all_data');
			}
		}
	}

	public function edit()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
		$id = $this->uri->segment(3);
		$data['main_view']	= 'user/edit_data_view';
		$data['teritori'] = $this->admin_model->list_teritori();
		$data['witel'] = $this->admin_model->list_witel();
		$data['pekerjaan'] = $this->admin_model->list_pekerjaan();
		$data['program'] = $this->admin_model->list_program();
		$data['status'] = $this->admin_model->list_status();
		$data['gmpm'] = $this->admin_model->list_gmpm();
		$data['induk'] 		= $this->admin_model->detil_induk($this->uri->segment(3));

		$config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = '*';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$nama=$this->upload->data('file_name');

        	$this->db->where('id', $id)->delete('tb_foto');
        	$this->db->insert('tb_foto',array('id'=>$id,'nama_foto'=>$nama,'token'=>$token));
        }
		if($this->input->post('submit'))
			{

					if($this->admin_model->edit_induk_verif($id,$this->session->userdata('nik')) == TRUE)
					{
						$data['notif'] = 'Input Berhasil';
						redirect('all_data');
					}
					else
					{
						$data['notif'] = 'Input Gagal';
						redirect('all_data');					
					}

			}
			else
			{
					$this->load->view('template2',$data);
			}
		}
	}

	public function profile()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
		$id = $this->uri->segment(3);
		$data['main_view']	= 'user/edit_profile_view';
		$data['fungsi'] = $this->admin_model->list_fungsi();
		$data['witel'] = $this->admin_model->list_witel();
		$data['user'] = $this->admin_model->detil_user($this->uri->segment(3));

		if($this->input->post('submit'))
			{
				if($this->admin_model->edit_profile($id) == TRUE)
				{
					$data['notif'] = 'Input Berhasil';
					redirect('user/dashboard');
				}
				else
				{
					$data['notif'] = 'Input Gagal';
					redirect('user/dashboard');					
				}
			}
			else
			{
					$this->load->view('template2',$data);
			}
		}
	}

	public function list_proses_verif()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		$witel = $this->session->userdata('witel');
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/verif_input_view';
		$data['user'] = $this->admin_model->cek_proses_verif($witel);
		$this->load->view('template2', $data);
		}
	}

	public function list_nopo_ogp()
	{
		$witel = $this->session->userdata('witel');
		$where = "A.PO='NOK' AND A.status_pekerjaan = 'OGP' OR A.PO='NOK' AND A.status_pekerjaan = 'Persiapan'";
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/detail_user_dashboard_view';
		$data['user'] = $this->admin_model->cek_user_input($where,$witel);
		$this->load->view('template2', $data);
		}
	}

	public function list_nopo_belum()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		$witel = $this->session->userdata('witel');
		$where = "A.PO='NOK' AND A.status_pekerjaan='Selesai' AND A.ba_rekon='NOK'";
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/detail_user_dashboard_view';
		$data['user'] = $this->admin_model->cek_user_input($where,$witel);
		$this->load->view('template2', $data);
		}
	}

	public function list_nopo_sudah()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		$witel = $this->session->userdata('witel');
		$where = "A.PO='NOK' AND A.status_pekerjaan='Selesai' AND A.ba_rekon='OK'";
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/detail_user_dashboard_view';
		$data['user'] = $this->admin_model->cek_user_input($where,$witel);
		$this->load->view('template2', $data);
		}
	}

	public function list_po_ogp()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		$witel = $this->session->userdata('witel');
		$where = "A.PO='OK' AND A.status_pekerjaan = 'OGP' OR A.PO='OK' AND A.status_pekerjaan = 'Persiapan'";
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/detail_user_dashboard_view';
		$data['user'] = $this->admin_model->cek_user_input($where,$witel);
		$this->load->view('template2', $data);
		}
	}

	public function list_po_belum()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		$witel = $this->session->userdata('witel');
		$where = "A.PO='OK' AND A.status_pekerjaan='Selesai' AND A.ba_rekon='NOK'";
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/detail_user_dashboard_view';
		$data['user'] = $this->admin_model->cek_user_input($where,$witel);
		$this->load->view('template2', $data);
		}
	}

	public function list_po_bast()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		$witel = $this->session->userdata('witel');
		$where = "A.PO='OK' AND A.status_pekerjaan='Selesai' AND A.ba_rekon='OK' AND A.bast='NOK'";
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/detail_user_dashboard_view';
		$data['user'] = $this->admin_model->cek_user_input($where,$witel);
		$this->load->view('template2', $data);
		}
	}

	public function list_po_inv()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		$witel = $this->session->userdata('witel');
		$where = "A.PO='OK' AND A.status_pekerjaan='Selesai' AND A.ba_rekon='OK' AND A.bast='OK' AND A.inv='NOK'";
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/detail_user_dashboard_view';
		$data['user'] = $this->admin_model->cek_user_input($where,$witel);
		$this->load->view('template2', $data);
		}
	}

	public function list_po_sudah()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		$witel = $this->session->userdata('witel');
		$where = "A.PO='OK' AND A.status_pekerjaan='Selesai' AND A.ba_rekon='OK' AND A.bast='OK' AND A.inv='OK'";
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/detail_user_dashboard_view';
		$data['user'] = $this->admin_model->cek_user_input($where,$witel);
		$this->load->view('template2', $data);
		}
	}

	public function list_file_rekon()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		$witel = $this->session->userdata('witel');
		$where = 'BA_REKON';
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/list_file_rekon_view';
		$data['user'] = $this->admin_model->cek_file($where,$witel);
		$this->load->view('template2', $data);
		}
	}

	public function list_file_bast()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		$witel = $this->session->userdata('witel');
		$where = 'BAST';
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/list_file_bast_view';
		$data['user'] = $this->admin_model->cek_file($where,$witel);
		$this->load->view('template2', $data);
		}
	}

	public function list_file_po()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		$witel = $this->session->userdata('witel');
		$where = 'PO';
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/list_file_po_view';
		$data['user'] = $this->admin_model->cek_file($where,$witel);
		$this->load->view('template2', $data);
		}
	}

	public function list_file_sp()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		$witel = $this->session->userdata('witel');
		$where = 'SP';
		if($this->session->userdata('status') != 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'user/list_file_sp_view';
		$data['user'] = $this->admin_model->cek_file($where,$witel);
		$this->load->view('template2', $data);
		}
	}

	public function add_lop()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
		
 		$witel = $this->session->userdata('witel');
		$id = $this->uri->segment(3);
		$nik= $this->session->userdata('nik');
		$cekfile = $this->db->query("SELECT tipe_data FROM tb_foto WHERE nama_foto = '$id'")->row()->tipe_data;
		$where   = "$cekfile = 'OK'";
		$data['main_view'] = "user/add_lop_file_view";
		$data['user']= $this->admin_model->cek_detil_file($id);
		$data['ok']  = $this->admin_model->list_ok_file($where);
		$data['lop'] = $this->admin_model->detil_lop($id);
		$data['sum'] = $this->admin_model->sum_detil_file($id);
		var_dump($where);
		if($this->input->post('submit'))
			{
					if($this->admin_model->input_detil_lop_dummy($id,$nik) == TRUE)
					{
						redirect(base_url("index.php/verifikator/add_lop/$id"));
					}
					else
					{
						$data['notif'] = 'Input Gagal';
						redirect(base_url("index.php/verifikator/add_lop/$id"));		
					}
			}

			else
			{
				$this->load->view('template2',$data);
			}
		}
	}

	function doUploadRekon(){
		
		$config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = '*';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('file')){
        	$nama=$this->upload->data();
			//print_r($nama['file_name']);exit();
			$this->db->insert('tb_foto',array('nama_foto'=>$nama['file_name'], 'tipe_data'=>'BA_REKON', 'ID_WITEL'=>
			$witel = $this->session->userdata('witel')));
		}
		
		redirect('user/list_file_rekon','location');
		
	}

	function doUploadBast(){
		
		$config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = '*';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('file')){
        	$nama=$this->upload->data();
			$this->db->insert('tb_foto',array('nama_foto'=>$nama['file_name'], 'tipe_data'=>'BAST',  'ID_WITEL'=>
			$witel = $this->session->userdata('witel')));
		}
		redirect('user/list_file_bast','location');
	}

	function doUploadPo(){
		
		$config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = '*';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('file')){
        	$nama=$this->upload->data();
			$this->db->insert('tb_foto',array('nama_foto'=>$nama['file_name'], 'tipe_data'=>'PO', 'ID_WITEL'=>
			$witel = $this->session->userdata('witel')));
		}
		
		redirect('user/list_file_po','location');
		
	}

	function doUploadSp(){
		
		$config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = '*';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('file')){
        	$nama=$this->upload->data();
			$this->db->insert('tb_foto',array('nama_foto'=>$nama['file_name'], 'tipe_data'=>'SP', 'ID_WITEL'=>
			$witel = $this->session->userdata('witel')));
		}
		
		redirect('user/list_file_po','location');
		
	}

	public function lock_file_lop()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
		$id = $this->uri->segment(3);
		if($this->admin_model->lock_lop($id) == FALSE)
		{
		redirect(base_url("index.php/user/list_file_rekon"));
		}
	}
	}

	public function komentar()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
		
 		$witel = $this->session->userdata('witel');
		$id = $this->uri->segment(3);
		$nik= $this->session->userdata('nik');
		$data['main_view'] = "user/komen_view";
		$data['komentar'] = $this->admin_model->lihat_komentar($id);
		//print_r($data['komentar']->id_lop);exit();
		if($this->input->post('submit'))
			{
					if($this->admin_model->input_komentar($id, $this->session->userdata('nama')) == TRUE)
					{
						redirect(base_url("index.php/user/komentar/$id"));
					}
					else
					{
						$data['notif'] = 'Input Gagal';
						redirect(base_url("index.php/user/komentar/$id"));		
					}
			}

			else
			{
				$this->load->view('template2',$data);
			}
		}
	}

	public function file()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
		
 		$witel = $this->session->userdata('witel');
		$id = $this->uri->segment(3);
		$nik= $this->session->userdata('nik');
		$data['main_view'] = "user/detil_user_file_view";
		$data['user'] = $this->admin_model->cek_detil_status_file($id);
		$data['lop'] = $this->admin_model->cek_detil_awaw_file($id,'BA_REKON');
		$data['lop1'] = $this->admin_model->cek_detil_awaw_file($id,'BAST');
		$data['lop2'] = $this->admin_model->cek_detil_awaw_file($id,'PO');
		if($this->input->post('submit'))
			{
					if($this->admin_model->input_detil_lop_dummy($id,$nik) == TRUE)
					{
						redirect(base_url("index.php/verifikator/add_lop/$id"));
					}
					else
					{
						$data['notif'] = 'Input Gagal';
						redirect(base_url("index.php/verifikator/add_lop/$id"));		
					}
			}

			else
			{
				$this->load->view('template2',$data);
			}
		}
	}

}
/* End of file user.php */
/* Location: ./application/controllers/user.php */