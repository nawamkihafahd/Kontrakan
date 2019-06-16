<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barang extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('BarangModel');
		$this->phn = $this->BarangModel;
	}
	public function index()
	{
		redirect( base_url() );
	}
	public function Barangall()
	{
		$data['list_Barang'] = $this->phn->listall();
		$this->load->view('barang_all', $data);
	}
	public function viewBarang($idBarang)
	{
		$data['list_Barang'] = $this->phn->lihatBarang($idBarang);
		$this->load->view('barang_view', $data);
	}
	public function editBarang()
	{
		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jumlah = $this->input->post('jml');
		$pj = $this->input->post('idj');
		$data = array(
			'B_Nama' => $nama,
			'B_Jumlah' => $jumlah,
			'Penanggungjawab_ID' => $pj
		);
		
		$qstatus = $this->phn->editBarang($id, $data);
		redirect('/Barang/formeditBarang/'.$id);
	}
	public function formeditBarang($idBarang)
	{
		$data['list_Barang'] = $this->phn->lihatBarang($idBarang);
		$this->load->view('barang_edit', $data);
	}
	public function deleteBarang($idBarang)
	{
		$qstatus = $this->phn->deleteBarang($idBarang);
		redirect('/Barang/Barangall/');
	}
	public function formaddBarang()
	{
		$this->load->view('barang_add');
	}
	public function addBarang()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jumlah = $this->input->post('jml');
		$pj = $this->input->post('idj');
		$data = array(
			'Barang_ID' => $id,
			'Barang_Nama' => $nama,
			'Barang_Jumlah' => $jumlah,
			'Barang_Penanggungjawab' => $pj
		);
		$qstatus = $this->phn->addBarang($data);
		redirect('/Barang/Barangall/');
	}
	public function searchresult()
	{
	}
	
	
}
