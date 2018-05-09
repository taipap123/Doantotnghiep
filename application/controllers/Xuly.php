<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Xuly extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library(array('form_validation','session'));
		$this->load->helper('url');
		$this->load->model('m_login');

		//view design
		$this->design['header'] = $this->load->view('giaodien/home/header', null, true);
		$this->design['footer'] = $this->load->view('giaodien/home/footer', null, true);
	}
	
	public function index()
	{
		
	}

	public function login()
	{

		if($this->input->post())
		{
			$this->form_validation->set_rules("user", "Username", "callback_ktDangNhap");
			if($this->form_validation->run())
			{
				$user = $this->input->post('user');

				$this->session->set_userdata('login', $user);

				redirect(base_url('index.php/xuly/thongbao'));
			}
		}

		$this->load->view("giaodien/home/login");
	}

	function ktDangNhap()
	{
		$user = $this->input->post("user");
		$pass = $this->input->post("pass");
		$where = array('IDUser' => $user, 'MatKhau' => $pass);
		if($this->m_login->ktDangNhap($where, "user"))
			return true;
		else 
			return false;
	}

	public function ThongBao()
	{
		$this->design['index'] = $this->load->view('giaodien/page/index',null,true);
		$this->load->view('giaodien/home/master',$this->design);
	}

	public function DangKyDeTai()
	{
		$this->design['index'] = $this->load->view('giaodien/page/dangkydetai',null,true);
		$this->load->view('giaodien/home/master',$this->design);
	}
	public function Baocaotiendo()
	{
		$this->design['index'] = $this->load->view('giaodien/page/baocaotiendo',null,true);
		$this->load->view('giaodien/home/master',$this->design);
	}
	public function Taikhoan()
	{
		$this->design['index'] = $this->load->view('giaodien/page/taikhoan',null,true);
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