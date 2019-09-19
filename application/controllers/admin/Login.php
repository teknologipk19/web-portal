<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		//Validasi
		$valid 		= $this->form_validation;
		$username	= $this->input->post('username');
		$password	= md5($this->input->post('password'));

		$valid->set_rules('username','Username','required');
		$valid->set_rules('password','Password','required');

		if ($valid->run())
		{
			$this->simple_login->LoginData($username,$password);
		}
		$data = array(
					'title' => 'Halaman Login Administrator',
		);
		$this->load->view('admin/v_login',$data);
	}

	public function logout()
	{
		$this->simple_login->logout();
	}
}
?>