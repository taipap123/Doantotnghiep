<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Xuly extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');

		//view design
		$this->design['header'] = $this->load->view('giaodien/home/header', null, true);
		$this->design['footer'] = $this->load->view('giaodien/home/footer', null, true);
	}
	
	public function index()
	{
		
	}

	public function loadViewDesign()
	{
		$this->design['index'] = $this->load->view('giaodien/page/index',null,true);
		$this->load->view('giaodien/home/master',$this->design);
	}

	// public function themdata()
	// {
	// 	$data['IDLOAI'] =  $this->input->post('noidung');
	// 	$data['TENLOAI'] = $this->input->post('noidung2');	
	// 	$data['GHICHU'] = $this->input->post('noidung3');
	// 	$this->load->model('qlkl');
	// 	$this->qlkl->insertdata($data);
	// }

	// public function xoadata()
	// {
	// 	$this->load->model('qlkl');
	// 	$this->qlkl->deletedata(1);
	// }
}
?>