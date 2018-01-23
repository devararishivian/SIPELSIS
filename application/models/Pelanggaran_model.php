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
 
    }