<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Xuly extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');

		//view admin
		$this->admin['header'] = $this->load->view('admin/home/header', null, true);
		$this->admin['footer'] = $this->load->view('admin/home/footer', null, true);
		$this->admin['menu'] = $this->load->view('admin/home/menu', null, true);

		//view design
		$this->design['header'] = $this->load->view('design/home/header', null, true);
		$this->design['footer'] = $this->load->view('design/home/footer', null, true);
		$this->design['menuleft'] = $this->load->view('design/home/menuleft', null, true);
	}
	
	public function index()
	{
		
	}

	public function loadViewAdmin()
	{
		//$this->admin['content1'] = $this->load->view('admin/page/content1',null,true);
		$this->load->view('admin/home/master',$this->admin);
	}

	public function loadViewDesign()
	{
		$this->design['content1'] = $this->load->view('design/page/content1',null,true);
		$this->load->view('design/home/master',$this->design);
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