<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __Construct()
	{
		parent::__Construct();
		$this->load->model('m_dashboard');
	}

	public function index()
	{
		$data = array(
					'title' => 'Web Portal - Terdepan, Tajam, Terpecaya dan Berimbang', 
					'listberitateknologi' => $this->m_dashboard->getberitateknologi(),
					'listberitasport' => $this->m_dashboard->getberitasport(),
					'listberitaotomotif' => $this->m_dashboard->getberitaotomotif(),
					'listberitafinance' => $this->m_dashboard->getberitafinance(),
					'listberitafood' => $this->m_dashboard->getberitafood(),
					'listberitahealth' => $this->m_dashboard->getberitahealth(),
					'iklan_header'  =>  $this->m_dashboard->getdataiklanheader(),
			        'iklan_sidebar1' =>  $this->m_dashboard->getdataiklansidebar1(),
			        'iklan_sidebar2' =>  $this->m_dashboard->getdataiklansidebar2(),
			        'iklan_sidebar3' =>  $this->m_dashboard->getdataiklansidebar3(),
			        'iklan_footer' =>  $this->m_dashboard->getdataiklanfooter()
		);
		$this->load->view('halaman_depan',$data);
	}

	public function detailberita($id_berita = 'id_berita')
	{	
		$data = array(
					'title' => 'Detail Berita', 
					'iklan_header'  =>  $this->m_dashboard->getdataiklanheader(),
					'listdetailberita' => $this->m_dashboard->getdetailberita("WHERE id_berita = '$id_berita' "),
		);
		$this->load->view('detail_berita', $data);
	}
}
?>
