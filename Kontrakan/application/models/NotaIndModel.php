<?php 
   Class NotaIndModel extends CI_Model { 
	
    Public function __construct() { 
		parent::__construct(); 
    } 
	  
	Public function listall()
	{
		
		$insert_user_stored_proc = "CALL sp_allnotaind()";
        $query = $this->db->query($insert_user_stored_proc);
		return $query->result();
		
		/*
		$insert_user_stored_proc = "CALL sp_getrestoinbudget(?)";
        $data = array('budget' => 13000);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
		*/
	}
	/*public function editNotaInd($where, $data)
	{
		$this->db->where('NI_ID', $where);
		$this->db->update('nota_individu',$data);
	}*/
	public function deleteNotaInd($idNotaInd)
	{
		$this->db->where('NI_ID', $idNotaInd);
		$this->db->delete('nota individu');
	}
	public function addNotaInd($data)
	{
		$sql = "insert into `nota individu` (NI_ID, Penghuni_ID, NI_Nominal, NI_tanggal, Kategori_ID, ID_Penerima, NI_Periode) values (?, ?, ?, ?, ?, ?, ?)";
		$query = $this->db->query($sql, array($data['NI_ID'], $data['Penghuni_ID'], $data['NI_Nominal'], $data['NI_tanggal'], $data['Kategori_ID'], $data['ID_Penerima'], $data['NI_Periode']));
	}
	public function lihatNotaInd($idNotaInd)
	{
		$insert_user_stored_proc = "CALL sp_lihatNotaInd(?)";
        $data = array('id' => $idNotaInd);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
	}
   } 
?> 