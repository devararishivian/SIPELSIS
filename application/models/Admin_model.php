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

    public function insertadmin(){
        
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