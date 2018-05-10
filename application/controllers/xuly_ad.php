<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Xuly_ad extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library(array('form_validation','session'));
		$this->load->model('m_login');
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

	public function login()
	{

		if($this->input->post())
		{
			$this->form_validation->set_rules("user", "Username", "callback_ktDangNhap");
			if($this->form_validation->run())
			{
				$user = $this->input->post('user');

				$this->session->set_userdata('login', $user);

				redirect(base_url('index.php/xuly_ad/index'));
			}
		}

		$this->load->view("admin/home/login");
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
	public function qladmin()
	{
		$this->admin['main'] = $this->load->view('admin/page/ad',null,true);
		$this->load->view('admin/home/master',$this->admin);
	}


}
?>