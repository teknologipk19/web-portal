<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function hitungdataberita($where = '')
	{
		return $this->db->query("SELECT count(id_berita) as judul_berita FROM  tbl_masterdataberita $where")->result_array();
	}

	public function hitungdatakategori($where = '')
	{
		return $this->db->query("SELECT count(id_kategoriberita) as kategori_berita FROM tbl_masterdatakategori $where")->result_array();
	}

	public function hitungdataiklan($where = '')
	{
		return $this->db->query("SELECT count(id_iklan) as img_iklan FROM tbl_masterdataiklan $where")->result_array();
	}

	public function hitungdataadmin($where = '')
	{
		return $this->db->query("SELECT count(id_admin) as username FROM tbl_admin $where")->result_array();
	}

	public function getmasterdataberita($where = '')
	{
		return $this->db->query("SELECT * FROM tbl_masterdataberita $where")->result_array();
	}

	public function getmasterdatakategori($where = '')
	{
		return $this->db->query("SELECT * FROM tbl_masterdatakategori $where")->result_array();
	}

	public function getmasterdataiklan($where = '')
	{
		return $this->db->query("SELECT * FROM tbl_masterdataiklan $where")->result_array();
	}

	public function getdataadmin($where = '')
	{
		return $this->db->query("SELECT * FROM tbl_admin $where")->result_array();
	}

	public function getdataiklanheader()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan = 'atas' ")->result_array();
	}

	public function getdataiklansidebar()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan like 'kanan%' ")->result_array();
	}

	public function getdataiklanfooter()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan = 'bawah' ")->result_array();
	}

	public function InsertData($table_name,$data)
	{
		return $this->db->insert($table_name,$data);
	}

	public function UpdateData($table_name,$data,$where)
	{
		return $this->db->update($table_name,$data,$where);
	}

	public function DeleteData($table_name,$where)
	{
		return $this->db->delete($table_name,$where);
	}
}
?>		