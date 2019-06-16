<?php 
   Class NotakomunalModel extends CI_Model { 
	
    Public function __construct() { 
		parent::__construct(); 
    } 
	  
	Public function listall()
	{
		$insert_user_stored_proc = "CALL sp_allnotakomunal()";
		$query = $this->db->query($insert_user_stored_proc);
		return $query->result();
		
		/*
		$insert_user_stored_proc = "CALL sp_getrestoinbudget(?)";
        $data = array('budget' => 13000);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
		*/
	}
	public function addnota($data)
	{
		$sql = "insert into `nota komunal` (NK_ID, Penghuni_ID, Kategori_ID, Penerima_ID, NK_Nominal, NK_Tgl, NK_Periode) values (?, ?, ?, ?, ?, ?, ?)";
		$query = $this->db->query($sql, array($data['idnota'], $data['idpenghuni'], $data['idkategori'], $data['idpenerima'], $data['nominal'], $data['tgl'], $data['periode']));
	}
	public function lihatnota($idnota)
	{
		$insert_user_stored_proc = "CALL sp_lihatnotakomunal(?)";
        $data = array('id' => $idnota);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
	}
   } 
?> 