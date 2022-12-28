<?php 


class Convert extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_convert');
		$this->load->helper('file');
	}

	// public function index()
	// {
	// 	$id = $this->session->userdata('ses_IdUser');
	// 	$filename = 'data_penjualan_'.$id.'.csv';

	// 	$data = $this->M_convert->lihat_data();

	// 	$file = fopen('assets/upload/' . $filename, 'w');

	// 	$header = array("Tanggal","Nama Cabang","Nama Karyawan","Jenis Kelamin","Kategori Produk","Nama Produk","Nama Propinsi","Nama Kota","Nilai Penjualan"); 
	// 	fputcsv($file, $header);

	// 	foreach ($data as $key => $line) {
	// 	    fputcsv($file, $line);
	// 	}

	// 	// Close the file
	// 	fclose($file);

	// 	// Set the appropriate headers to prompt the user to download the file
	// 	header("Content-Type: application/csv; ");
	// 	header("Content-Description: File Transfer"); 
	// 	header("Content-Disposition: attachment; filename=$filename");

	// 	redirect('Penjualan');
	// }	

	public function index()
	{
		$pilih = $this->input->post('btnsubmit');
		if ($pilih == 'Refresh') {
			$id = $this->session->userdata('ses_IdUser');

			$path_to_file = 'assets/upload/data_penjualan_'.$id.'.json';
			unlink($path_to_file);

			$filename = 'data_penjualan_'.$id.'.json';
			
			$start_date = date('Y-m-d',strtotime($this->input->post('tgl_awal')));
			$end_date 	= date('Y-m-d',strtotime($this->input->post('tgl_akhir')));

			$data = array(
				'ses_tgl_awal' 	=> $start_date,
				'ses_tgl_akhir'	=> $end_date
			);
			$this->session->set_userdata($data);

			$result = $this->M_convert->toJson($start_date,$end_date);
			if (write_file('assets/upload/'.$filename,$result)) {
				redirect('Penjualan');
			}else{
				redirect('Penjualan');
			}
		}elseif ($pilih == 'Reset') {
			$id = $this->session->userdata('ses_IdUser');
			$this->session->unset_userdata(array('ses_tgl_awal','ses_tgl_akhir'));
			$path_to_file = 'assets/upload/data_penjualan_'.$id.'.json';
			unlink($path_to_file);
			redirect('Penjualan');
		}
	}
}
 ?>