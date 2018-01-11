<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('google');
		$this->load->model('siswa');
	}

	public function index(){
        //redirect to profile page if user already logged in
        if($this->session->userdata('loggedIn') == true){
            redirect('siswa/dasbor');
        }
        
        
		if (isset($_GET['code'])) {
			//Google Auth
			$this->google->getAuthenticate();

			$gInfo = $this->google->getUserInfo();
			print_r($gInfo);
			$userData['OAUTH_PROVIDER'] = 'Google';
			$userData['IDSISWA'] = $gInfo['id'];
			$userData['NAMA_SISWA'] = $gInfo['given_name'];
			$userData['EMAIL_SISWA'] = $gInfo['email'];
			$userData['JK_SISWA'] = !empty($gInfo['gender'])?$gInfo['gender']:'';
            $userData['URL_PROFIL_SISWA'] = !empty($gInfo['link'])?$gInfo['link']:'';
            $userData['URL_FOTO_SISWA'] = !empty($gInfo['picture'])?$gInfo['picture']:'';
			
            $check = $this->siswa->checkUser($userData);

            $this->session->set_userdata('loggedIn',true);
            $this->session->set_userdata('userData',$userData);

           	redirect('home/');

		}

		$data['loginURL'] = $this->google->loginURL();
        $this->load->view('view_loginhome',$data);
    }
        
    public function logout(){
        //delete login status & user info from session
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('userData');
        $this->session->sess_destroy();
        
        //redirect to login page
        redirect('auth');
    }

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */