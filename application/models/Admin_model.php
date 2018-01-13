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
        				->get('tb_admin');

        if ($query->num_rows() > 0) {
        	$data = array(
        			'UNAME_ADMIN'	=> $UNAME_ADMIN,
        			'loggedIn'		=> TRUE,
        			'loggedRole'	=> $query->row()->ROLE
        	);
        	$this->session->set_userdata($data);
        	return true;
        } else {
        	return false;
        }
        
    }
	

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */