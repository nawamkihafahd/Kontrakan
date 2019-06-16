<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Restoran extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('RestoranModel');
		$this->resto = $this->RestoranModel;
	}
	public function index()
	{
		redirect( base_url() );
	}
	public function restoall()
	{
		$data['list_resto'] = $this->resto->listall();
		$this->load->view('resto_all', $data);
	}
	public function search()
	{
	}
	public function edit()
	{
	}
	public function remove()
	{
	}
	public function add()
	{
	}
	public function view()
	{
	}
	public function searchresult()
	{
	}
	
	
}
