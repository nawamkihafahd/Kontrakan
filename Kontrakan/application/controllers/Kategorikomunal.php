<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategorikomunal extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('KategorikomunalModel');
		$this->phn = $this->KategorikomunalModel;
	}
	public function index()
	{
		$this->load->view('kk_home');
	}
	public function kategoriall()
	{
		$data['list_Barang'] = $this->phn->listall();
		$this->load->view('kk_all', $data);
	}
	public function viewkategori($id)
	{
		$data['list_Barang'] = $this->phn->lihatkategori($id);
		$this->load->view('kk_view', $data);
	}
	public function editkategori()
	{
		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$data = array(
			'KKomunal_Nama' => $nama
		);
		
		$qstatus = $this->phn->editKategori($id, $data);
		redirect('/Kategorikomunal/formeditkategori/'.$id);
	}
	public function formeditkategori($id)
	{
		$data['list_Barang'] = $this->phn->lihatKategori($id);
		$this->load->view('kk_edit', $data);
	}
	public function deletekategori($id)
	{
		$qstatus = $this->phn->deleteKategori($id);
		redirect('/Kategorikomunal/kategoriall/');
	}
	public function formaddkategori()
	{
		$this->load->view('kk_add');
	}
	public function addkategori()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$data = array(
			'id' => $id,
			'nama' => $nama
		);
		$qstatus = $this->phn->addKategori($data);
		redirect('/Kategorikomunal/kategoriall/');
	}
	public function searchresult()
	{
	}
	
	
}
