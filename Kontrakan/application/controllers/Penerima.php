<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Penerima extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('PenerimaModel');
		$this->phn = $this->PenerimaModel;
	}
	public function index()
	{
		redirect( base_url() );
	}
	public function Penerimaall()
	{
		$data['list_Penerima'] = $this->phn->listall();
		$this->load->view('penerima_all', $data);
	}
	public function viewPenerima($idPenerima)
	{
		$data['list_Penerima'] = $this->phn->lihatPenerima($idPenerima);
		$this->load->view('penerima_view', $data);
	}
	public function editPenerima()
	{
		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$status = $this->input->post('status');
		$jk = $this->input->post('jk');
		$data = array(
			'Penerima_Nama' => $nama,
			'Penerima_Status' => $status,
			'Penerima_JK' => $jk
		);
		
		$qstatus = $this->phn->editPenerima($id, $data);
		redirect('/Penerima/formeditPenerima/'.$id);
	}
	public function formeditPenerima($idPenerima)
	{
		$data['list_Penerima'] = $this->phn->lihatPenerima($idPenerima);
		$this->load->view('penerima_edit', $data);
	}
	public function deletePenerima($idPenerima)
	{
		$qstatus = $this->phn->deletePenerima($idPenerima);
		redirect('/Penerima/Penerimaall/');
	}
	public function formaddPenerima()
	{
		$this->load->view('penerima_add');
	}
	public function addPenerima()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$status = $this->input->post('status');
		$jk = $this->input->post('jk');
		$data = array(
			'Penerima_ID' => $id,
			'Penerima_Nama' => $nama,
			'Penerima_Status' => $status,
			'Penerima_JK' => $jk
		);
		$qstatus = $this->phn->addPenerima($data);
		redirect('/Penerima/Penerimaall/');
	}
	public function searchresult()
	{
	}
	
	
}
