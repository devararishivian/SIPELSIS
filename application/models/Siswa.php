<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Model{
    public function checkUser($data = [])
	 {
	 	$this->db->select('IDSISWA');
	 	$this->db->from('tb_siswa');
	 	$this->db->where(array('OAUTH_PROVIDER' => $data['Google'], 'IDSISWA' => $data['IDSISWA']));
	 	$query = $this->db->get();
	 	$row = $query->num_rows();

	 	if ($row > 0) {
	 		$result = $query->row_array();
            $update = $this->db->update('tb_siswa', $data, array('id' => $result['id']));
            $userID = $result['id'];
	 	}else{
            $insert = $this->db->insert('tb_siswa', $data);
            $userID = $this->db->insert_id();
	 	}

	 	return $userID ? $userID : false;

	 }
}

/* End of file Auth.php */
/* Location: ./application/models/Auth.php */