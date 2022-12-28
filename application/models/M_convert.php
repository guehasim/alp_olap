<?php 

/**
 * 
 */
class M_convert extends CI_Model
{
	
	public function lihat_data()
	{
		$response 	= array();

		$this->db->select('Tanggal,Nama_Cabang,Nama_Karyawan,Jenis_Kelamin,Kategori_Produk,Nama_Produk,Nama_Propinsi,Nama_Kota,Nilai_Penjualan');
		$q = $this->db->get('tbl_penjualan');
		$response = $q->result_array();

		return $response;
	}

	public function toJson($startdate,$enddate)
	{
		$query = $this->db->query("SELECT Tanggal,Nama_Cabang,Nama_Karyawan,Jenis_Kelamin,Kategori_Produk,Nama_Produk,Nama_Propinsi,Nama_Kota,Nilai_Penjualan FROM tbl_penjualan WHERE Tanggal BETWEEN '$startdate' AND '$enddate' ");
		return json_encode($query->result(), JSON_PRETTY_PRINT);
	}
}
 ?>