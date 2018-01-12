<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('google');
		$this->load->model('siswa_model');
	}

	// versi findco
	public function index() {
        if ($this->session->userdata('loggedIn') == true) {
        	redirect('siswa');
        }

        if(isset($_GET['code'])){
			//authenticate user
			$this->google->getAuthenticate();
			
			//get user info from google
			$gpInfo = $this->google->getUserInfo();
			
            //preparing data for database insertion
			$userData['OAUTH_PROVIDER'] 	= 'google';
			$userData['IDSISWA'] 			= $gpInfo['id'];
            $userData['NAMA_SISWA'] 		= $gpInfo['given_name'];
            $userData['EMAIL_SISWA']		= $gpInfo['email'];
            $userData['JURUSAN']			= substr($gpInfo['family_name'], -3);
			$userData['JK_SISWA'] 			= !empty($gpInfo['gender'])?$gpInfo['gender']:'';
            $userData['URL_PROFIL_SISWA'] 	= !empty($gpInfo['link'])?$gpInfo['link']:'';
            $userData['URL_FOTO_SISWA'] 	= !empty($gpInfo['picture'])?$gpInfo['picture']:'';
			
			//insert or update user data to the database
            $userID = $this->siswa_model->checkUser($userData);
			
			//store status & user info in session
			$this->session->set_userdata('loggedIn', true);
			$this->session->set_userdata('userData', $userData);
			
			//redirect to profile page
			redirect('siswa');
		} 
		
		//google login url
		$data['loginURL'] = $this->google->loginURL();
		
		//load google login view
		$this->load->view('view_loginhome',$data);
    }

    public function logout(){
        //delete login status & user info from session
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('userData');
        $this->session->sess_destroy();
        
        //redirect to login page
        redirect('Auth');
    }
}
    

        /* if (isset($_GET['code'])) {
            // authenticate user
            $this->google->getAuthenticate();
            //get user info from google
            $gInfo = $this->google->getUserInfo();
            // set user role from email
            $emailp = substr($gInfo['email'], strpos($gInfo['email'], '@'));
            if (strpos($emailp, 'smktelkom-mlg.sch.id') !== false) {
                    $userData = $this->siswa_model->checkUser($gInfo);
                }
                $this->session->set_userdata(md5('Logged_In'), true);
                $this->session->set_userdata(md5('UserData'), $userData);
                redirect('siswa');
            } else {
                $this->load->view('view_loginhome');
                return;
            }
        $data['loginURL'] = $this->google->loginURL();
        $this->load->view('view_loginhome',$data);    
        //redirect($this->google->loginURL());
        } */



/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */