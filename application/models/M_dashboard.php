<?php
class M_dashboard extends CI_Model
{
	public function getdataiklanheader()
	{
	    return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan = 'atas' ")->row_array();
	}

  	public function getdataiklansidebar1()
  	{
    	return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan = 'kanan1' ")->row_array();
  	}

  	public function getdataiklansidebar2()
  	{
    	return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan = 'kanan2' ")->row_array();
  	}

  	public function getdataiklansidebar3()
  	{
    	return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan = 'kanan3' ")->row_array();
  	}

  	public function getdataiklanfooter()
  	{
    	return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan = 'bawah' ")->row_array();
  	}

	public function getberitateknologi()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataberita where kategori_berita = 'Teknologi' LIMIT 2 ")->result_array();
	}

	public function getberitasport()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataberita where kategori_berita = 'Sport' LIMIT 2 ")->result_array();
	}

	public function getberitaotomotif()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataberita where kategori_berita = 'Otomotif' LIMIT 2 ")->result_array();
	}

	public function getberitafinance()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataberita where kategori_berita = 'Finance' LIMIT 2 ")->result_array();
	}

	public function getberitafood()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataberita where kategori_berita = 'Food' LIMIT 2 ")->result_array();
	}

	public function getberitahealth()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataberita where kategori_berita = 'Health' LIMIT 2 ")->result_array();
	}

	public function getdetailberita($where = '')
	{
		return $this->db->query("SELECT * FROM tbl_masterdataberita $where;")->result_array();
	}
}
?>