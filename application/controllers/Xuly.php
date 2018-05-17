<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Xuly extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library(array('form_validation','session'));
		$this->load->helper('url');
		$this->load->model(array('m_login', 'm_quanlydata'));

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
				$name_user= $this->m_quanlydata->loadTableWhere("sinhvien","MASV = ".$user);

				$this->session->set_userdata('login', $name_user[0]['HOTEN']);
				$this->session->set_userdata('maso', $name_user[0]['MASV']);
				
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

	//quan ly dang ky de tai
	public function DangKyDeTai()
	{
		$this->luuDeTaiDangky();

		$data['dotdangky'] = $this->m_quanlydata->loadTable('dotdangky');
		$data['detai'] = $this->m_quanlydata->loadTableJoinTable('detai','dotdangky','MADOT','MADOT', 'detai.SLTV > 0');

		$data['tt_dangky'] = $this->m_quanlydata->load_NhomDeTai($this->session->userdata('maso'));

		$this->design['index'] = $this->load->view('giaodien/page/dangkydetai',$data,true);
		$this->load->view('giaodien/home/master',$this->design);

	}

	public function luuDeTaiDangky ()
	{
		if($this->input->post())
		{
			$madetai = $this->input->post('rdb_detai');
			if($this->m_quanlydata->ktSoLuongTV($this->input->post('rdb_detai')))
			{
				$now = getdate(); 
				$currentTime = $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"]; 
				$currentDate = $now["year"]."-".$now["mon"]."-".$now["mday"]; 
				
				$data = array(
				'madetai' => $madetai,
				'masv' => $this->session->userdata('maso'),

				'ngaydangky' => $currentDate." ".$currentTime,//date('Y-m-d H:i:s');
				);

				$this->m_quanlydata->insertData("sv_detai", $data);

				$this->m_quanlydata->update_SLTV($madetai);
			}

		}
	}
	//-----------------------------
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