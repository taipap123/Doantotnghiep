<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Xuly_ad extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->helper('url');
		$this->load->helper('form');
		
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
		$data['allgv'] = $this->m_admin->getallgv();
		$this->admin['main'] = $this->load->view('admin/page/giaodien',$data,true);
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
	public function qladmin()
	{
		$this->admin['main'] = $this->load->view('admin/page/ad',null,true);
		$this->load->view('admin/home/master',$this->admin);
	}
	public function create_madot()
	{
		$madk = $this->input->post('madk');
		$data =  $this->m_admin->create_madot($madk);
		echo json_encode($data);
	}
	public function insert_madotdk() 
	{
		$data['MADOT'] =  $this->input->post('madk');
		$data['NOIDUNGDT'] = $this->input->post('nddk');
		$data['TGRADE'] = $this->input->post('tgrade');
		$data['TGDANGKYNHOM'] = $this->input->post('tgrade');
		$data['TGBATDAU'] = $this->input->post('tgbatdau');
		$data['TGBAOVE'] = $this->input->post('tgbaove');
		$data['TGPHUCKHAO'] = $this->input->post('tgphuckhao');
		$data['SLTVNHOM'] = $this->input->post('sltv');
		$pm = $this->input->post('pm');
		$httt = $this->input->post('httt');
		$mtt = $this->input->post('mtt');
		$data['SLDETAI'] = $pm+$httt+$mtt;
		$data['CHAMHOIDONG'] = $this->input->post('hd');
		$this->m_admin->insert_madotdk($data);
		header('location:tkpk');

	}
}
?>