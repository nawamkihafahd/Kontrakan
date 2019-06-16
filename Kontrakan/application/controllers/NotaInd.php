<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NotaInd extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('NotaIndModel');
		$this->phn = $this->NotaIndModel;
	}
	public function index()
	{
		redirect( base_url() );
	}
	public function NotaIndall()
	{
		$data['list_NotaInd'] = $this->phn->listall();
		$this->load->view('notaind_all', $data);
	}
	public function viewNotaInd($idNotaInd)
	{
		$data['list_NotaInd'] = $this->phn->lihatNotaInd($idNotaInd);
		$this->load->view('notaind_view', $data);
	}
	/*public function editNotaInd()
	{
		
		$id = $this->input->post('id');
		$penghuni = $this->input->post('penghuni');
		$nominal = $this->input->post('nominal');
		$tanggal = $this->input->post('tgl');
		$kategori = $this->input->post('kategori');
		$penerima = $this->input->post('penerima');
		$periode = $this->input->post('periode');
		$data = array(
			'NI_ID' => $id,
			'Penghuni_ID' => $penghuni,
			'NI_Nominal' => $nominal,
			'NI_tanggal' => $tanggal,
			'Kategori_ID' => $kategori,
			'ID_Penerima' => $penerima,
			'NI_Periode' => $periode
		);
		
		$qstatus = $this->phn->editNotaInd($id, $data);
		redirect('/NotaInd/formeditNotaInd/'.$id);
	}
	public function formeditNotaInd($idNotaInd)
	{
		$data['list_NotaInd'] = $this->phn->lihatNotaInd($idNotaInd);
		$this->load->view('notaind_edit', $data);
	}*/
	public function deleteNotaInd($idNotaInd)
	{
		$qstatus = $this->phn->deleteNotaInd($idNotaInd);
		redirect('/NotaInd/NotaIndall/');
	}
	public function formaddNotaInd()
	{
		$this->load->view('notaind_add');
	}
	public function addNotaInd()
	{
		$id = $this->input->post('id');
		$penghuni = $this->input->post('penghuni');
		$nominal = $this->input->post('nominal');
		$tanggal = $this->input->post('tgl');
		$kategori = $this->input->post('kategori');
		$penerima = $this->input->post('penerima');
		$periode = $this->input->post('periode');
		$data = array(
			'NI_ID' => $id,
			'Penghuni_ID' => $penghuni,
			'NI_Nominal' => $nominal,
			'NI_tanggal' => $tanggal,
			'Kategori_ID' => $kategori,
			'ID_Penerima' => $penerima,
			'NI_Periode' => $periode
		);
		$qstatus = $this->phn->addNotaInd($data);
		redirect('/NotaInd/NotaIndall/');
	}
	public function searchresult()
	{
	}
	
	
}
