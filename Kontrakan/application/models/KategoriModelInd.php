<?php 
   Class KategoriModelInd extends CI_Model { 
	
    Public function __construct() { 
		parent::__construct(); 
    } 
	  
	Public function listall()
	{
		
		$query = $this->db->get('kategori_individu');
		return $query->result();
		
		/*
		$insert_user_stored_proc = "CALL sp_getrestoinbudget(?)";
        $data = array('budget' => 13000);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
		*/
	}
	public function editKategoriInd($where, $data)
	{
		$this->db->where('Kategori_ID', $where);
		$this->db->update('kategori_individu',$data);
	}
	public function deleteKategoriInd($idKategoriInd)
	{
		$this->db->where('Kategori_ID', $idKategoriInd);
		$this->db->delete('kategori_individu');
	}
	public function addKategoriInd($data)
	{
		$sql = "insert into kategori_individu (Kategori_ID, Kategori_Nama, Kategori_Nominal) values (?, ?, ?)";
		$query = $this->db->query($sql, array($data['Kategori_ID'], $data['Kategori_Nama'], $data['Kategori_Nominal']));
	}
	public function lihatKategoriInd($idKategoriInd)
	{
		$insert_user_stored_proc = "CALL sp_lihatKategoriIndividu(?)";
        $data = array('id' => $idKategoriInd);
        $query = $this->db->query($insert_user_stored_proc, $data);
		return $query->result();
	}
   } 
?> 