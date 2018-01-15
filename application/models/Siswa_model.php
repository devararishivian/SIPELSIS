<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	/* versi findco
	public function checkUser($data = array()){
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->where(array('OAUTH_ID'=>$data['id']));
        $query = $this->db->get();
        $check = $query->num_rows();

        if($check > 0){
            $result = $query->row_array();
            // $data['modified'] = date("Y-m-d H:i:s");
            // $update = $this->db->update($this->tableName,$data,array('id'=>$result['id']));
            $userData = $result;
            $userData['id_user'] = $result['IDSISWA'];
        }else{
            // $data['created'] = date("Y-m-d H:i:s");
            // $data['modified']= date("Y-m-d H:i:s");
            $insert = $this->db->insert('tb_siswa',array(
                //'angkatan'    	  => substr($data['family_name'], 0, -3),
                'OAUTH_ID'   	  => $data['id'],
                'NAMA_SISWA'  	  => $data['given_name'],
                'EMAIL_SISWA'	  => $data['email'],
                'JURUSAN'         => substr($data['family_name'], -3),
                'JK_SISWA'        => !empty($data['gender'])?$data['gender']:'',
                'URL_FOTO_SISWA'  => !empty($data['picture'])?$data['picture']:'',
                'URL_PROFIL_SISWA'=> !empty($gInfo['link'])?$gInfo['link']:''
            ));
            $userID = $this->db->insert_id();
            $userData = $this->db->where('IDSISWA', $userID)->get('tb_siswa')->row_array();
            $userData['id_user'] = $userID;
        }

        return $userData;
    }
	*/ 

    
    public function checkUser($data = [])
	{
		$this->db->select('IDSISWA');
	 	$this->db->from('TB_SISWA');
	 	$this->db->where(array('OAUTH_PROVIDER' => $data['OAUTH_PROVIDER'], 'IDSISWA' => $data['IDSISWA']));
	 	$query = $this->db->get();
	 	$row = $query->num_rows();

	 	if ($row > 0) {
	 	$result = $query->row_array();
        $update = $this->db->update('TB_SISWA', $data, array('IDSISWA' => $result['IDSISWA']));
        $userID = $result['IDSISWA'];
        $loggedRole = 'Siswa';
	 	}else{
            $insert = $this->db->insert('TB_SISWA', $data);
            $userID = $this->db->insert_id();
	 	}

	 	return $userID ? $userID : false;

	}

	public function loginsiswa() {
        $UNAME_SISWA = $this->input->post('UNAME_SISWA');
        $PASS_SISWA = $this->input->post('PASS_SISWA');
        $query = $this->db->where('UNAME_SISWA', $UNAME_SISWA)
        				->where('PASS_SISWA', $PASS_SISWA)
        				->get('TB_SISWA');

        if ($query->num_rows() > 0) {
        	$data = array(
        			'UNAME_SISWA'	=> $UNAME_SISWA,
        			'loggedIn'		=> TRUE,
                    'loggedRole'    => 'Siswa'
        	);
        	$this->session->set_userdata($data);
        	return true;
        } else {
        	return false;
        }
        
    }

    public function getAllSiswa(){
        return $this->db->get('TB_SISWA')->result();
    }
}
