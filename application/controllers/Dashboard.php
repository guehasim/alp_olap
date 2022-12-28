<?php 

/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$user = $this->session->userdata('ses_IdUser');		

		if ($user=="") {
			redirect('login');
		}else{
			$data['menu'] 	= 'dashboard';
			$this->load->view('template/header',$data);
			$this->load->view('dashboard/index');
			$this->load->view('template/footer');
		}
	}
}
 ?>