<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model{

    public function checkUser($data = [])
	{
		$this->db->select('IDSISWA');
	 	$this->db->from('tb_siswa');
	 	$this->db->where(array('OAUTH_PROVIDER' => $data['Google'], 'IDSISWA' => $data['IDSISWA']));
	 	$query = $this->db->get();
	 	$row = $query->num_rows();

	 	if ($row > 0) {
	 	$result = $query->row_array();
        $update = $this->db->update('tb_siswa', $data, array('IDSISWA' => $result['IDSISWA']));
        $userData = $result['IDSISWA'];
	 	}else{
            $insert = $this->db->insert('tb_siswa', $data);
            $userData = $this->db->insert_id();
	 	}

	 	return $userData ? $userData : false;

	}
	/*
	 public function checkUser($data = array()){
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->where(array('OAUTH_PROVIDER'=>$data['Google']));
        $query = $this->db->get();
        $check = $query->num_rows();

        if($check > 0){
            $result = $query->row_array();
            $userData = $result;
            $userData['IDSISWA'] = $result['IDSISWA'];
        }else{
            $insert = $this->db->insert('tb_siswa',array(
            	'OAUTH_PROVIDER'	 => $data['Google'],
                'IDSISWA'			 => $data['id'],
				'NAMA_SISWA'		 => $data['given_name'],
				'EMAIL_SISWA'		 => $data['email'],
				// 'angkatan'      => substr($data['family_name'], 0, -3),
                'JURUSAN' 		     => substr($data['family_name'], -3),
                'JK_SISWA' 		     => !empty($data['gender'])?$data['gender']:'',
                'URL_FOTO_SISWA'	 => !empty($data['picture'])?$data['picture']:'',
                'URL_PROFIL_SISWA'	 => !empty($data['link'])?$data['link']:'',
                // $username = substr($email, 0, strpos($email, '@'));
                'UNAME_SISWA'		 => substr($data['email'], 0, strpos($data['email'], '@')),
                'PASS_SISWA'		 => 'test'
            ));

            $userID = $this->db->insert_id();
            $userData = $this->db->where('IDSISWA', $userID)->get('tb_siswa')->row_array();
            $userData['IDSISWA'] = $userID;
        }

        return $userData;
    }
    */
}
