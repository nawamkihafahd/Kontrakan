<?php 
   Class LaporanModel extends CI_Model { 
	
    Public function __construct() { 
		parent::__construct(); 
    } 
	  
	Public function daftarbarangrusak()
	{
		
		$insert_user_stored_proc = "SELECT * FROM `daftar barang rusak`";
        $query = $this->db->query($insert_user_stored_proc);
		return $query->result();
		
		/*
		$insert_user_stored_proc = "CALL sp_getrestoinbudget(?)";
        $data = array('budget' => 13000);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
		*/
	}
	public function detiljabatan()
	{
		$insert_user_stored_proc = "SELECT * FROM `detil jabatan`";
        $query = $this->db->query($insert_user_stored_proc);
		return $query->result();
	}
	public function hutang()
	{
		$insert_user_stored_proc = "SELECT * FROM `hutang penghuni`";
        $query = $this->db->query($insert_user_stored_proc);
		return $query->result();
	}
	public function hutangtotal()
	{
		$insert_user_stored_proc = "SELECT * FROM `hutang penghuni total`";
        $query = $this->db->query($insert_user_stored_proc);
		return $query->result();
	}
	public function uangkas()
	{
		$insert_user_stored_proc = "SELECT * FROM `jumlah uang di kas`";
        $query = $this->db->query($insert_user_stored_proc);
		return $query->result();
	}
	public function kasperbulan()
	{
		$insert_user_stored_proc = "SELECT * FROM `laporan kas perbulan`";
        $query = $this->db->query($insert_user_stored_proc);
		return $query->result();
	}
	public function listrik()
	{
		$insert_user_stored_proc = "SELECT * FROM `pengeluaran listrik`";
        $query = $this->db->query($insert_user_stored_proc);
		return $query->result();
	}
	public function pdam()
	{
		$insert_user_stored_proc = "SELECT * FROM `pengeluaran pdam`";
        $query = $this->db->query($insert_user_stored_proc);
		return $query->result();
	}
	public function urunan()
	{
		$insert_user_stored_proc = "SELECT * FROM `uang komunal yang dibayarkan penghuni`";
        $query = $this->db->query($insert_user_stored_proc);
		return $query->result();
	}
	public function uangbendahara()
	{
		$insert_user_stored_proc = "SELECT * FROM `uang yang diterima penghuni`";
        $query = $this->db->query($insert_user_stored_proc);
		return $query->result();
	}
	public function uangkeluar()
	{
		$insert_user_stored_proc = "SELECT * FROM `uang yang diterima penerima`";
        $query = $this->db->query($insert_user_stored_proc);
		return $query->result();
	}
   } 
?> 