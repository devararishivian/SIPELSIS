<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['main_view'] = 'view_dasboradmin';
		$this->load->view('view_templatedasbor', $data);
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */