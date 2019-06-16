<?php 
   Class PenghuniModel extends CI_Model { 
	
    Public function __construct() { 
		parent::__construct(); 
    } 
	  
	Public function listall()
	{
		
		$query = $this->db->get('penghuni');
		return $query->result();
		
		/*
		$insert_user_stored_proc = "CALL sp_getrestoinbudget(?)";
        $data = array('budget' => 13000);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
		*/
	}
	public function editpenghuni($where, $data)
	{
		$this->db->where('Penghuni_ID', $where);
		$this->db->update('penghuni',$data);
	}
	public function deletepenghuni($idpenghuni)
	{
		$this->db->where('Penghuni_ID', $idpenghuni);
		$this->db->delete('penghuni');
	}
	public function addpenghuni($data)
	{
		$sql = "insert into penghuni (Penghuni_ID, Penghuni_Nama, Penghuni_Tgllahir, Penghuni_JK, Penghuni_Kamar, Penghuni_NRP, Penghuni_Alamat, Penghuni_NoTelp) values (?, ?, ?, ?, ?, ?, ?, ?)";
		$query = $this->db->query($sql, array($data['Penghuni_ID'], $data['Penghuni_Nama'], $data['Penghuni_Tgllahir'], $data['Penghuni_JK'], $data['Penghuni_Kamar'], $data['Penghuni_NRP'], $data['Penghuni_Alamat'], $data['Penghuni_NoTelp']));
	}
	public function lihatpenghuni($idpenghuni)
	{
		$insert_user_stored_proc = "CALL sp_lihatpenghuni(?)";
        $data = array('id' => $idpenghuni);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
	}
   } 
?> 