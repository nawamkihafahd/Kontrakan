<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notakomunal extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('NotakomunalModel');
		$this->phn = $this->NotakomunalModel	;
	}
	public function index()
	{
		redirect( base_url() );
	}
	public function nkall()
	{
		$data['list_nota'] = $this->phn->listall();
		$this->load->view('nk_all', $data);
	}
	public function viewnk($idnota)
	{
		$data['list_nota'] = $this->phn->lihatnota($idnota);
		$this->load->view('nk_view', $data);
	}
	public function formaddnk()
	{
		$this->load->view('nk_add');
	}
	public function addnk()
	{
		$id = $this->input->post('idnota');
		$nama = $this->input->post('idpenghuni');
		$tgllahir = $this->input->post('idkategori');
		$jk = $this->input->post('idpenerima');
		$kamar = $this->input->post('nominal');
		$nrp = $this->input->post('tgl');
		$alamat = $this->input->post('periode');
		$data = array(
			'idnota' => $id,
			'idpenghuni' => $nama,
			'idkategori' => $tgllahir,
			'idpenerima' => $jk,
			'nominal' => $kamar,
			'tgl' => $nrp,
			'periode' => $alamat
		);
		$qstatus = $this->phn->addnota($data);
		redirect('/Notakomunal/nkall/');
	}
	public function searchresult()
	{
	}
	
	
}
