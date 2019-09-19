<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	//Login
	public function LoginData($username, $password)
	{
		//query untuk pencocokan data
		$query = $this->CI->db->get_where('tbl_admin', array(	'username' => $username,
																'password' => $password,
		));

		//Jika ada hasilnya
		if ($query->num_rows() > 0)
		{
			$row 		= $this->CI->db->query('SELECT * FROM tbl_admin WHERE username = "'.$username.'"');
			$admin 		= $row->row();
			$id 		= $admin->id_admin;
			$hak_akses 	= $admin->hak_akses;
			$status 	= $admin->status;

			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('status', $status);
			$this->CI->session->set_userdata('hak_akses', $hak_akses);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);

			foreach ($query->result() as $row)
			{
				if ($status == "Aktif")
				{
					if($row->hak_akses=="Super Admin")
					{
						redirect(base_url('admin/superadmin/dashboardadmin'));
					}
			}else{
					$this->CI->session->set_flashdata('sukses', 'Username dan Password Tidak Aktif');
					redirect(base_url().'admin/login');
				}	
			}
		}else{
			$this->CI->session->set_flashdata('sukses', 'Username dan Password Salah');
			redirect(base_url().'admin/login');
		}
	}

	//Cek login
	public function cek_login()
	{
		if ($this->CI->session->userdata('username') == '' && $this->CI->session->userdata('hak_akses') == '')
		{
			$this->CI->session->set_flashdata('sukses', 'silakan login dulu');
			redirect(base_url('admin/login'));
		}
	}

	//Logout
	public function logout()
	{
		$this->CI->session->set_userdata('username');
		$this->CI->session->set_userdata('hak_akses');
		$this->CI->session->set_userdata('id_login');
		$this->CI->session->set_userdata('id');
		unset($_SESSION['admin/login']);
		session_destroy();
		$this->CI->session->set_flashdata('sukses', 'Terimakasih anda berhasil logout');
		redirect(base_url().'admin/login');
	}
}
?>