<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function loginadmin() {
        $UNAME_ADMIN = $this->input->post('UNAME_ADMIN');
        $PASS_ADMIN = $this->input->post('PASS_ADMIN');
        $query = $this->db->where('UNAME_ADMIN', $UNAME_ADMIN)
        				->where('PASS_ADMIN', $PASS_ADMIN)
        				->get('TB_ADMIN');

        if ($this->db->affected_rows() == 1) {

            $result = $query->row_array();

        	$session = array(
        			'UNAME_ADMIN'	   => $UNAME_ADMIN,
        			'loggedIn'		   => TRUE,
        			'loggedRole'	   => $result['ROLE'],
                    'loggedAdminName'  => $result['NAMA_ADMIN'],
                    'FOTO_ADMIN'       => $result['FOTO_ADMIN'],
        	);
        	$this->session->set_userdata($session);
        	return true;
        } else {
        	return false;
        }
        
    }

    public function insertadmin($FOTO_ADMIN)
    {
        $data = array(
                'NAMA_ADMIN' => $this->input->post('NAMA_ADMIN'),
                'EMAIL_ADMIN' => $this->input->post('EMAIL_ADMIN'),
                'NIP' => $this->input->post('NIP'),
                'JK_ADMIN' => $this->input->post('JK_ADMIN'),
                'UNAME_ADMIN' => $this->input->post('UNAME_ADMIN'),
                'PASS_ADMIN' => $this->input->post('PASS_ADMIN'),
                'ROLE' => $this->input->post('ROLE'),
                'FOTO_ADMIN' => $FOTO_ADMIN['file_name'],
        );

        $this->db->insert('TB_ADMIN', $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;            
        } else {
            return FALSE;
        }

    }

    public function insertsiswa()
    {
        $data = array(
                'IDSISWA'               => $this->input->post('IDSISWA'),
                'OAUTH_PROVIDER'        => 'google',
                'NIS'                   => $this->input->post('NIS'),
                'NAMA_SISWA'            => $this->input->post('NAMA_SISWA'),
                'EMAIL_SISWA'           => $this->input->post('EMAIL_SISWA'),
                'JK_SISWA'              => $this->input->post('JK_SISWA'),
                'JURUSAN'               => $this->input->post('JURUSAN'),
                'ANGKATAN'              => $this->input->post('ANGKATAN'),
                'KELAS_SISWA'           => $this->input->post('KELAS_SISWA'),
                'NOABSEN_SISWA'         => $this->input->post('NOABSEN_SISWA'),
                'URL_FOTO_SISWA'        => $this->input->post('URL_FOTO_SISWA'),
                'UNAME_SISWA'           => $this->input->post('UNAME_SISWA'),
                'PASS_SISWA'            => $this->input->post('PASS_SISWA'),
        );

        $this->db->insert('TB_SISWA', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;            
        } else {
            return FALSE;
        }
    }

    public function insertpelanggaran()
    {
        $data = array(
                'NAMA_PELANGGARAN'      => $this->input->post('NAMA_PELANGGARAN'),
                'KATEGORI_PELANGGARAN'  => $this->input->post('KATEGORI_PELANGGARAN'),
                'POINT_PELANGGARAN'     => $this->input->post('POINT_PELANGGARAN'),
        );

        $this->db->insert('TB_PELANGGARAN', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;            
        } else {
            return FALSE;
        }
    }

    public function getAllAdmin(){
        /*$ROLE = 'Admin';
    	$this->db->select('*')->where('ROLE', $ROLE);
		$this->db->from('TB_ADMIN');
		$this->db->order_by('IDADMIN', 'ASC');

		return $this->db->get()->result(); */
        return $this->db->get('TB_ADMIN')->result();
    }

    public function getAdminByRole()
    {   
        $ROLE = 'Admin';
        return $this->db
        ->where('ROLE',$ROLE)
        ->get('TB_ADMIN')->result();
    }

    public function getPetugasByRole()
    {   
        $ROLE = 'Petugas';
        return $this->db
        ->where('ROLE',$ROLE)
        ->get('TB_ADMIN')->result();
    }

    public function getAllPelanggaran()
    {
        return $this->db->get('TB_PELANGGARAN')->result();
    }

    public function getKategoriPelanggaran()
    {
        return $this->db->get('TB_PELANGGARAN')->row()->KATEGORI_PELANGGARAN;
    }

    public function total_admin()
    {
        $role = 'Admin';
        return $this->db->from('TB_ADMIN')->where('ROLE', $role)->count_all_results();
    }
	
    public function total_petugas()
    {
        $role = 'Petugas';
        return $this->db->from('TB_ADMIN')->where('ROLE', $role)->count_all_results();
    }

    /*public function loginadmin($UNAME_ADMIN,$PASS_ADMIN)
    {
        $query = $this->db->where('UNAME_ADMIN', $this->db->escape_str($username))
        ->where('PASS_ADMIN', $this->db->escape_str($password))
        ->get('TB_ADMIN');
        if ($this->db->affected_rows() == 1) {
            $admin = $query->row_array();

            $session = array(
                'loggedIn' => TRUE,
                'loggedRole' => 'Admin',
                'IDADMIN' => $admin['IDADMIN'],
                'UNAME_ADMIN' => $admin['UNAME_ADMIN'],
                'FOTO_ADMIN' => $admin['FOTO_ADMIN'],
                'Admin' => $admin
            );
            $this->session->set_userdata($session);

            return true;
        }

        return false;
    }*/

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */