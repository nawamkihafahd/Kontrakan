<?php 
   Class BarangModel extends CI_Model { 
	
    Public function __construct() { 
		parent::__construct(); 
    } 
	  
	Public function listall()
	{
		
		$query = $this->db->get('barang');
		return $query->result();
		
		/*
		$insert_user_stored_proc = "CALL sp_getrestoinbudget(?)";
        $data = array('budget' => 13000);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
		*/
	}
	public function editBarang($where, $data)
	{
		$this->db->where('B_ID', $where);
		$this->db->update('barang',$data);
	}
	public function deleteBarang($idBarang)
	{
		$this->db->where('B_ID', $idBarang);
		$this->db->delete('barang');
	}
	public function addBarang($data)
	{
		$sql = "insert into barang (B_ID, B_Nama, B_Jumlah, Penanggungjawab_ID) values (?, ?, ?, ?)";
		$query = $this->db->query($sql, array($data['Barang_ID'], $data['Barang_Nama'], $data['Barang_Jumlah'], $data['Barang_Penanggungjawab']));
	}
	public function lihatBarang($idBarang)
	{
		$insert_user_stored_proc = "CALL sp_lihatbarang(?)";
        $data = array('id' => $idBarang);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
	}
   } 
?> 