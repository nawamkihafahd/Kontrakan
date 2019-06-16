<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Penghuni extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('PenghuniModel');
		$this->phn = $this->PenghuniModel;
	}
	public function index()
	{
		redirect( base_url() );
	}
	public function penghuniall()
	{
		$data['list_penghuni'] = $this->phn->listall();
		$this->load->view('penghuni_all', $data);
	}
	public function viewpenghuni($idpenghuni)
	{
		$data['list_penghuni'] = $this->phn->lihatpenghuni($idpenghuni);
		$this->load->view('penghuni_view', $data);
	}
	public function editpenghuni()
	{
		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$tgllahir = $this->input->post('tgllahir');
		$jk = $this->input->post('jk');
		$kamar = $this->input->post('kamar');
		$nrp = $this->input->post('nrp');
		$alamat = $this->input->post('alamat');
		$notelp = $this->input->post('nomortelepon');
		$data = array(
			'Penghuni_Nama' => $nama,
			'Penghuni_Tgllahir' => $tgllahir,
			'Penghuni_JK' => $jk,
			'Penghuni_Kamar' => $kamar,
			'Penghuni_NRP' => $nrp,
			'Penghuni_Alamat' => $alamat,
			'Penghuni_NoTelp' => $notelp
		);
		
		$qstatus = $this->phn->editpenghuni($id, $data);
		redirect('/Penghuni/formeditpenghuni/'.$id);
	}
	public function formeditpenghuni($idpenghuni)
	{
		$data['list_penghuni'] = $this->phn->lihatpenghuni($idpenghuni);
		$this->load->view('penghuni_edit', $data);
	}
	public function deletepenghuni($idpenghuni)
	{
		$qstatus = $this->phn->deletepenghuni($idpenghuni);
		redirect('/Penghuni/penghuniall/');
	}
	public function formaddpenghuni()
	{
		$this->load->view('penghuni_add');
	}
	public function addpenghuni()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$tgllahir = $this->input->post('tgllahir');
		$jk = $this->input->post('jk');
		$kamar = $this->input->post('kamar');
		$nrp = $this->input->post('nrp');
		$alamat = $this->input->post('alamat');
		$notelp = $this->input->post('nomortelepon');
		$data = array(
			'Penghuni_ID' => $id,
			'Penghuni_Nama' => $nama,
			'Penghuni_Tgllahir' => $tgllahir,
			'Penghuni_JK' => $jk,
			'Penghuni_Kamar' => $kamar,
			'Penghuni_NRP' => $nrp,
			'Penghuni_Alamat' => $alamat,
			'Penghuni_NoTelp' => $notelp
		);
		$qstatus = $this->phn->addpenghuni($data);
		redirect('/Penghuni/penghuniall/');
	}
	public function searchresult()
	{
	}
	
	
}
