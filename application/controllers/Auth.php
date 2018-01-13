<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('google');
		$this->load->model('siswa_model');
		$this->load->model('admin_model');
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
			$emailp = substr($gpInfo['email'], strpos($gpInfo['email'], '@'));
			if (strpos($emailp, 'smktelkom-mlg.sch.id') !== false) {
            //preparing data for database insertion
			$userData['OAUTH_PROVIDER'] 	= 'google';
			$userData['IDSISWA'] 			= $gpInfo['id'];
            $userData['NAMA_SISWA'] 		= $gpInfo['given_name'];
            $userData['EMAIL_SISWA']		= $gpInfo['email'];
            $userData['JURUSAN']			= substr($gpInfo['family_name'], -3);
            $userData['ANGKATAN']			= substr($gpInfo['family_name'], 0, -3);
			$userData['JK_SISWA'] 			= !empty($gpInfo['gender'])?$gpInfo['gender']:'';
            $userData['URL_PROFIL_SISWA'] 	= !empty($gpInfo['link'])?$gpInfo['link']:'';
            $userData['URL_FOTO_SISWA'] 	= !empty($gpInfo['picture'])?$gpInfo['picture']:'';
            $userData['UNAME_SISWA']		= substr($gpInfo['email'], 0, -29);
            $userData['PASS_SISWA']			= substr($gpInfo['email'], 0, -35);
			
			//insert or update user data to the database
            $userID = $this->siswa_model->checkUser($userData);
			
			//store status & user info in session
			$this->session->set_userdata('loggedIn', true);
			$this->session->set_userdata('userData', $userData);
			
			//redirect to profile page
			redirect('siswa');
			} else {
				$data['loginURL'] = $this->google->loginURL();
		
				//load google login view
				$this->session->set_flashdata('failed', 'Harap Login dengan Email Sekolah');
				$this->load->view('siswa/login', $data);
			}
		} 
		
		//google login url
		$data['loginURL'] = $this->google->loginURL();
		
		//load google login view
		$this->load->view('siswa/login',$data);
    }

    public function loginsiswa(){
    	/*
    	if ($this->input->post('submit')) {
    		$this->form_validation->set_rules('UNAME_SISWA', 'Username', 'trim|required');
    		$this->form_validation->set_rules('PASS_SISWA', 'Password', 'trim|required');

    		if ($this->form_validation->run() == TRUE) {
    			if($this->siswa_model->loginsiswa() == TRUE){
    				redirect('siswa');
    			} else {
    				redirect('Auth');
    			}
    		} else {
    			redirect('Home');
    		}
    	}
    	*/
    	if($this->siswa_model->loginsiswa() == TRUE){
			redirect('siswa');
		} else {
			//$this->session->set_flashdata('failed', 'Login Gagal, Username/Password Salah');
			$this->session->set_flashdata('failed', 'Login Gagal, Username/Password Salah');
			$data['loginURL'] = $this->google->loginURL();
			$this->load->view('siswa/login',$data);
		}
    }
    
    public function admoon(){
        $this->load->view('admin/logina');
    }

    public function loginadmin(){

    	if($this->admin_model->loginadmin() == TRUE){
			if ($this->session->userdata('loggedRole') === 'Admin') {
                redirect('admin');
            }else {
                redirect('petugas');
            }
		} else {
			//$this->session->set_flashdata('failed', 'Login Gagal, Username/Password Salah');
			$this->session->set_flashdata('failed', 'Login Gagal, Username/Password Salah');
			$this->load->view('admin/logina');
		}
		$this->load->view('admin/logina');
    }

    public function logout(){
        //delete login status & user info from session
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('loggedRole');
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