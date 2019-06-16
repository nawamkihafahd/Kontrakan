<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class KategoriInd extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('KategoriModelInd');
		$this->phn = $this->KategoriModelInd;
	}
	public function index()
	{
		redirect( base_url() );
	}
	public function KategoriIndall()
	{
		$data['list_KategoriInd'] = $this->phn->listall();
		$this->load->view('kategoriind_all', $data);
	}
	public function viewKategoriInd($idKategoriInd)
	{
		$data['list_KategoriInd'] = $this->phn->lihatKategoriInd($idKategoriInd);
		$this->load->view('kategoriind_view', $data);
	}
	public function editKategoriInd()
	{
		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nominal = $this->input->post('nmnl');
		$data = array(
			'Kategori_Nama' => $nama,
			'Kategori_Nominal' => $nominal
		);
		
		$qstatus = $this->phn->editKategoriInd($id, $data);
		redirect('/KategoriInd/formeditKategoriInd/'.$id);
	}
	public function formeditKategoriInd($idKategoriInd)
	{
		$data['list_KategoriInd'] = $this->phn->lihatKategoriInd($idKategoriInd);
		$this->load->view('kategoriind_edit', $data);
	}
	public function deleteKategoriInd($idKategoriInd)
	{
		$qstatus = $this->phn->deleteKategoriInd($idKategoriInd);
		redirect('/KategoriInd/KategoriIndall/');
	}
	public function formaddKategoriInd()
	{
		$this->load->view('kategoriind_add');
	}
	public function addKategoriInd()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nominal = $this->input->post('nmnl');
		$data = array(
			'Kategori_ID' => $id,
			'Kategori_Nama' => $nama,
			'Kategori_Nominal' => $nominal
		);
		$qstatus = $this->phn->addKategoriInd($data);
		redirect('/KategoriInd/KategoriIndall/');
	}
	public function searchresult()
	{
	}
	
	
}
