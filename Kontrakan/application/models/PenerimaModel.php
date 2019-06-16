<?php 
   Class PenerimaModel extends CI_Model { 
	
    Public function __construct() { 
		parent::__construct(); 
    } 
	  
	Public function listall()
	{
		
		$query = $this->db->get('Penerima');
		return $query->result();
		
		/*
		$insert_user_stored_proc = "CALL sp_getrestoinbudget(?)";
        $data = array('budget' => 13000);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
		*/
	}
	public function editPenerima($where, $data)
	{
		$this->db->where('penerima_ID', $where);
		$this->db->update('penerima',$data);
	}
	public function deletePenerima($idPenerima)
	{
		$this->db->where('penerima_ID', $idPenerima);
		$this->db->delete('penerima');
	}
	public function addPenerima($data)
	{
		$sql = "insert into penerima (Penerima_ID, Penerima_Nama, Penerima_Status, Penerima_JK) values (?, ?, ?, ?)";
		$query = $this->db->query($sql, array($data['Penerima_ID'], $data['Penerima_Nama'], $data['Penerima_Status'], $data['Penerima_JK']));
	}
	public function lihatPenerima($idPenerima)
	{
		$insert_user_stored_proc = "CALL sp_lihatPenerima(?)";
        $data = array('id' => $idPenerima);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
	}
   } 
?> 