<?php 
   Class RestoranModel extends CI_Model { 
	
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
	public function searchresto($budget, $loc)
	{
	}
	public function editresto()
	{
	}
	public function deleteresto($id)
	{
	}
	public function addresto()
	{
	}
	public function viewresto($id)
	{
	}
   } 
?> 