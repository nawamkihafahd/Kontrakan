<?php 
   Class KategorikomunalModel extends CI_Model { 
	
    Public function __construct() { 
		parent::__construct(); 
    } 
	  
	Public function listall()
	{
		
		$query = $this->db->get('kategori_komunal');
		return $query->result();
		
		/*
		$insert_user_stored_proc = "CALL sp_getrestoinbudget(?)";
        $data = array('budget' => 13000);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
		*/
	}
	public function editKategori($where, $data)
	{
		$this->db->where('KKomunal_ID', $where);
		$this->db->update('kategori_komunal',$data);
	}
	public function deleteKategori($idkategori)
	{
		$this->db->where('KKomunal_ID', $idkategori);
		$this->db->delete('kategori_komunal');
	}
	public function addKategori($data)
	{
		$sql = "insert into kategori_komunal (KKomunal_ID, KKomunal_Nama) values (?, ?)";
		$query = $this->db->query($sql, array($data['id'], $data['nama']));
	}
	public function lihatKategori($idkategori)
	{
		$insert_user_stored_proc = "CALL sp_lihatkategorikomunal(?)";
        $data = array('id' => $idkategori);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
	}
   } 
?> 