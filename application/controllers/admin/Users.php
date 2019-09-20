<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function __Construct()
	{
		$this->load->model('m_users');
	}

	public function datausers()
	{
		$id_user = $this->session->userdata('id');
		$data = array(
					'title' => 'Data Komentar Berita', 
					'subtitle' => 'Data Komentar Berita', 
					'users_aktif' => $this->m_users->getdatausers("WHERE id_users = '$id_users' "),
		);
		$this->load->view('users/datausers', $data);
	}
}
?>