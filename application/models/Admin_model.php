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
                    'loggedID'         => $result['IDADMIN'],
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
                'KELAS'                 => $this->input->post('KELAS'),
                'NOABSEN'               => $this->input->post('NOABSEN'),
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

    public function updatesiswa($id)
    {
        $data = array(
                'IDSISWA'               => $this->input->post('IDSISWA'),
                'NIS'                   => $this->input->post('NIS'),
                'NAMA_SISWA'            => $this->input->post('NAMA_SISWA'),
                'EMAIL_SISWA'           => $this->input->post('EMAIL_SISWA'),
                'JK_SISWA'              => $this->input->post('JK_SISWA'),
                'JURUSAN'               => $this->input->post('JURUSAN'),
                'ANGKATAN'              => $this->input->post('ANGKATAN'),
                'KELAS'                 => $this->input->post('KELAS'),
                'NOABSEN'               => $this->input->post('NOABSEN'),
                'URL_FOTO_SISWA'        => $this->input->post('URL_FOTO_SISWA'),
                'UNAME_SISWA'           => $this->input->post('UNAME_SISWA'),
                'PASS_SISWA'            => $this->input->post('PASS_SISWA')
                );

        $this->db->where('IDSISWA', $id);
        $this->db->update('TB_SISWA', $data); 

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateadmin($FOTO_ADMIN, $id)
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

        $this->db->where('IDADMIN', $id);
        $this->db->update('TB_ADMIN', $data); 

        if ($this->db->affected_rows() > 0) {
            return TRUE;            
        } else {
            return FALSE;
        }
    }

    public function updatepetugas($FOTO_ADMIN, $id)
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

        $this->db->where('IDADMIN', $id);
        $this->db->update('TB_ADMIN', $data); 

        if ($this->db->affected_rows() > 0) {
            return TRUE;            
        } else {
            return FALSE;
        }
    }

    /* public function insertpelanggaran()
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
    }*/

    public function tambahpelanggaran()
    {
        $mexypely = $this->db->query('SELECT MAX(`IDPELANGGARAN`) AS `MEXYPELY` FROM TB_PELANGGARAN')->row()->MEXYPELY;

        $mexyplusplus = $mexypely + 1;

        $data1 = array(
                'IDPELANGGARAN'         => $mexyplusplus,
                'IDSISWA'               => $this->input->post('IDSISWA'),
                'IDADMIN'               => $this->session->userdata('loggedID'),
        );
        $this->db->insert('TB_CAPELSIS', $data1);

        $data2 = array(
                'NAMA_PELANGGARAN'      => $this->input->post('NAMA_PELANGGARAN'),
                'POINT_PELANGGARAN'     => $this->input->post('POINT_PELANGGARAN'),
                'IDKATEGORI'            => $this->input->post('KATEGORI_PELANGGARAN'),
        );

        $this->db->insert('TB_PELANGGARAN', $data2);

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

    public function deleteadmin($id)
    {
        $this->db->where('IDADMIN', $id)->delete('TB_ADMIN');

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function deletepetugas($id)
    {
        $this->db->where('IDADMIN', $id)->delete('TB_ADMIN');

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function deletesiswa($id)
    {
        $this->db->where('IDSISWA', $id)->delete('TB_SISWA');

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getDetilAdmin($IDADMIN)
    {
        return $this->db->query("SELECT * FROM TB_ADMIN WHERE IDADMIN='$IDADMIN'")->row();
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
        return $this->db->where('ROLE',$ROLE)->get('TB_ADMIN')->result();
    }

    public function getAllPelanggaran()
    {
        return $this->db->get('TB_PELANGGARAN')->result();
    }

    public function getKategoriPelanggaran()
    {
        return $this->db->get('TB_KATEGORI')->result();
    }

    public function getAllCapelsis()
    {
        return $this->db->query("SELECT * FROM TB_CAPELSIS A LEFT JOIN TB_SISWA B ON A.IDSISWA = B.IDSISWA 
            LEFT JOIN TB_ADMIN C ON A.IDADMIN = C.IDADMIN 
            LEFT JOIN TB_PELANGGARAN D ON D.IDPELANGGARAN = A.IDPELANGGARAN
            LEFT JOIN TB_KATEGORI E ON E.IDKATEGORI = D.IDKATEGORI
            WHERE A.STATUS_CAPELSIS='OK'")->result();
    }

    public function getAllCapelsisNotOk()
    {
        return $this->db->query("SELECT * FROM TB_CAPELSIS A LEFT JOIN TB_SISWA B ON A.IDSISWA = B.IDSISWA 
            LEFT JOIN TB_ADMIN C ON A.IDADMIN = C.IDADMIN 
            LEFT JOIN TB_PELANGGARAN D ON D.IDPELANGGARAN = A.IDPELANGGARAN
            LEFT JOIN TB_KATEGORI E ON E.IDKATEGORI = D.IDKATEGORI
            WHERE A.STATUS_CAPELSIS='NOT_OK'")->result();
    }

    public function konfirmasicapelsis($id)
    {
        $data = array(
                'IDCAPELSIS'      => $this->uri->segment(3),
                'STATUS_CAPELSIS' => 'OK',
        );

        $this->db->where('IDCAPELSIS', $id);
        $this->db->update('TB_CAPELSIS', $data); 

        if ($this->db->affected_rows() > 0) {
            return TRUE;            
        } else {
            return FALSE;
        }
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

    public function total_siswa()
    {
        $OAUTH_PROVIDER = 'google';
        return $this->db->from('TB_SISWA')->where('OAUTH_PROVIDER', $OAUTH_PROVIDER)->count_all_results();
    }

    public function total_pelanggaran()
    {
        $STATUS_CAPELSIS = 'OK';
        return $this->db->from('TB_CAPELSIS')->where('STATUS_CAPELSIS', $STATUS_CAPELSIS)->count_all_results();
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