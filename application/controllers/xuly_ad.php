<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Xuly_ad extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');

		//view admin
		$this->admin['header'] = $this->load->view('admin/home/header', null, true);
		$this->admin['footer'] = $this->load->view('admin/home/footer', null, true);
		$this->admin['menu'] = $this->load->view('admin/home/menu', null, true);
	}
	
	public function index()
	{
		$this->admin['main'] = $this->load->view('admin/page/giaodien',null,true);
		$this->load->view('admin/home/master',$this->admin);
	}
	public function tkpk()
	{
		$this->admin['main'] = $this->load->view('admin/page/giaodien',null,true);
		$this->load->view('admin/home/master',$this->admin);
	}
	public function giangvien()
	{
		$this->admin['main'] = $this->load->view('admin/page/giangvien',null,true);
		$this->load->view('admin/home/master',$this->admin);
	}
	public function thongbao()
	{
		$this->admin['main'] = $this->load->view('admin/page/thongbao',null,true);
		$this->load->view('admin/home/master',$this->admin);
	}
}
?>