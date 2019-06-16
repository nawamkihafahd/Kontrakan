<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('LaporanModel');
		$this->phn = $this->LaporanModel;
	}
	public function index()
	{
		$this->load->view('laporan_home');
	}
	public function brgrsk()
	{
		$data['list_Barang'] = $this->phn->daftarbarangrusak();
		$this->load->view('laporan_daftarbarangrusak', $data);
	}
	public function jbt()
	{
		$data['list_Barang'] = $this->phn->detiljabatan();
		$this->load->view('laporan_detiljabatan', $data);
	}
	public function htg()
	{
		$data['list_Barang'] = $this->phn->hutang();
		$this->load->view('laporan_hutangpenghuni', $data);
	}
	public function htgttl()
	{
		$data['list_Barang'] = $this->phn->hutangtotal();
		$this->load->view('laporan_hutangpenghunitotal', $data);
	}
	public function ukas()
	{
		$data['list_Barang'] = $this->phn->uangkas();
		$this->load->view('laporan_uangkas', $data);
	}
	public function kasbln()
	{
		$data['list_Barang'] = $this->phn->kasperbulan();
		$this->load->view('laporan_kasperbulan', $data);
	}
	public function listrik()
	{
		$data['list_Barang'] = $this->phn->listrik();
		$this->load->view('laporan_listrik', $data);
	}
	public function pdam()
	{
		$data['list_Barang'] = $this->phn->pdam();
		$this->load->view('laporan_pdam', $data);
	}
	public function urunan()
	{
		$data['list_Barang'] = $this->phn->urunan();
		$this->load->view('laporan_urunan', $data);
	}
	public function ubend()
	{
		$data['list_Barang'] = $this->phn->uangbendahara();
		$this->load->view('laporan_uangbendahara', $data);
	}
	public function uluar()
	{
		$data['list_Barang'] = $this->phn->uangkeluar();
		$this->load->view('laporan_uangkeluar', $data);
	}
	
	
}
