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

        if ($query->num_rows() > 0) {

            $result = $query->result();

        	$data = array(
        			'UNAME_ADMIN'	   => $UNAME_ADMIN,
        			'loggedIn'		   => TRUE,
        			'loggedRole'	   => $result['ROLE'],
                    'loggedAdminName'  => $result['NAMA_ADMIN']
        	);
        	$this->session->set_userdata($data);
        	return TRUE;
        } else {
        	return FALSE;
        }
        
    }

    public function get_data_admin(){
        $ROLE = 'Admin';
    	$this->db->select('*')->where('ROLE', $ROLE);
		$this->db->from('TB_ADMIN');
		$this->db->order_by('IDADMIN', 'ASC');

		return $this->db->get()->result();
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

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */