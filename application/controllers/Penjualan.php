<?php 

/**
 * 
 */
class Penjualan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['menu']	= 'order entry';
		$this->load->view("template/header",$data);
		$this->load->view("pivot/penjualan");
		$this->load->view("template/footer");
	}
}
 ?>