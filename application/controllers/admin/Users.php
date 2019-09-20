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
	 				'title' => 'Data User', 
	 				'subtitle' => 'Data User', 
	 	);
	 	$this->load->view('users/v_datausers', $data);
	} 	
}
?>