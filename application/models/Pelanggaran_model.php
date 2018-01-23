<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
 
    class Pelanggaran_model extends CI_Model {
     
    public function getKaPel()
    {
        return $this->db->get('TB_KATEGORI')->result();
    }

    public function getPel()
    {
        return $this->db->get('TB_PELANGGARAN')->result();
    }
 
    public function getPoPel()
    {
        return $this->db->get('TB_POINT')->result();
    }

    public function petugasinsertpelanggaran()
    {   
        $date = date('Y-m-d');
        $data = array(
                'IDPELANGGARAN'         => $this->input->post('IDPELANGGARAN'),
                'IDSISWA'               => $this->input->post('IDSISWA'),
                'IDADMIN'               => $this->session->userdata('loggedID'),
                'STATUS_CAPELSIS'       => 'NOT_OK',
                'TGL_CAPELSIS'          => $date,
        );

        $this->db->insert('TB_CAPELSIS', $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;            
        } else {
            return FALSE;
        }
    }

    public function admininsertpelanggaran()
    {   
        $date = date('Y-m-d');
        $data = array(
                'IDPELANGGARAN'         => $this->input->post('IDPELANGGARAN'),
                'IDSISWA'               => $this->input->post('IDSISWA'),
                'IDADMIN'               => $this->session->userdata('loggedID'),
                'STATUS_CAPELSIS'       => 'OK',
                'TGL_CAPELSIS'          => $date,
        );

        $this->db->insert('TB_CAPELSIS', $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;            
        } else {
            return FALSE;
        }
    }

}
