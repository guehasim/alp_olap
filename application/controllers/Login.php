<?php 


class Login extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('login/index');
	}

	public function aksi_login()
	{
		$user = $this->input->post('user');
		$pass = sha1(md5($this->input->post('pass')));

		$this->db->where('Username', $user);
		$this->db->where('PassUser', $pass);
		$query = $this->db->get('m_user');

		if ($query->num_rows() > 0) {
			$row = $query->row();
			$data = array(
				'ses_IdUser'	=> $row->ID_User,
				'ses_NikUser'	=> $row->NikUser,
				'ses_NamaUser'	=> $row->NamaUser
				);
			$this->session->set_userdata($data);			

			$id = $this->session->userdata('ses_IdUser');
			$this->session->unset_userdata(array('ses_tgl_awal','ses_tgl_akhir'));
			$path_to_file = 'assets/upload/data_penjualan_'.$id.'.json';
			unlink($path_to_file);

			$query = $this->db->query("SELECT AksesMenu FROM m_akses WHERE ID_user = '$id' ");

			foreach ($query->result() as $ad) {
				$akses = $ad->AksesMenu;

				//menu dashboard
				if ($akses == 'dashboard') {
					$data0 = array(
						'ses_dashboard'	=> 1
					);
					$this->session->set_userdata($data0);
				}


				//menu user
				if ($akses == 'user') {
					$data1 = array(
						'ses_user'	=> 1
					);
					$this->session->set_userdata($data1);
				}

				//menu order entry
				if ($akses == 'order entry') {
					$data2 = array(
						'ses_order_entry'	=> 1
					);
					$this->session->set_userdata($data2);
				}

				//menu purchase order
				if ($akses == 'purchase order') {
					$data3 = array(
						'ses_purchase_order'	=> 1
					);
					$this->session->set_userdata($data3);
				}

				//menu inventory control
				if ($akses == 'inventory control') {
					$data4 = array(
						'ses_inventory_control'	=> 1
					);
					$this->session->set_userdata($data4);
				}

				//menu manufacturing
				if ($akses == 'manufacturing') {
					$data5 = array(
						'ses_manufacturing'	=> 1
					);
					$this->session->set_userdata($data5);
				}

				//menu blending
				if ($akses == 'blending') {
					$data6 = array(
						'ses_blending'	=> 1
					);
					$this->session->set_userdata($data6);
				}

				//menu refinery
				if ($akses == 'refinery') {
					$data7 = array(
						'ses_refinery'	=> 1
					);
					$this->session->set_userdata($data7);
				}

				//menu maintenance
				if ($akses == 'maintenance') {
					$data8 = array(
						'ses_maintenance'	=> 1
					);
					$this->session->set_userdata($data8);
				}

				//menu accounting
				if ($akses == 'accounting') {
					$data9 = array(
						'ses_accounting'	=> 1
					);
					$this->session->set_userdata($data9);
				}
			}

			$this->session->set_flashdata('success','Berhasil Login');
			// redirect('Convert');
			redirect('Dashboard');
		}else{
			// echo "tidak bisa login";
			$this->session->set_flashdata('error','Ada kesalahan dalam Login, Periksa Username atau Password');
			redirect('login');
		}
	}

	public function logout()
	{
		session_destroy();		
		redirect('Login');
	}
}
 ?>