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

	public function login($data = '')
	{

		if($this->input->post())
		{
			$this->form_validation->set_rules("user", "Username", "callback_ktDangNhap");
			if($this->form_validation->run())
			{
				$user = $this->input->post('user');
				$name_user= $this->m_quanlydata->loadTableWhere("sinhvien","MASV = ".$user);
				if ($name_user != null) {
					$this->session->set_userdata('login', $name_user[0]['HOTEN']);
					$this->session->set_userdata('maso', $name_user[0]['MASV']);
				}else{
					$name_user= $this->m_quanlydata->loadTableWhere("giangvien","MAGV = ".$user);
					$this->session->set_userdata('login', $name_user[0]['TENGV']);
					$this->session->set_userdata('maso', $name_user[0]['MAGV']);
				}
				
				
				redirect(base_url('index.php/xuly/thongbao'));
			}
		}

		$this->load->view("giaodien/home/login",$data);
	}

	function ktDangNhap()
	{
		$user = $this->input->post("user");
		$pass = md5($this->input->post("pass"));
		$where = array('IDUser' => $user, 'MatKhau' => $pass);
		if($this->m_login->ktDangNhap($where, "user"))
			return true;
		else 
			return false;
	}

	public function ThongBao()
	{
		if($this->session->userdata('login'))
		{
		$this->design['index'] = $this->load->view('giaodien/page/index',null,true);
		$this->load->view('giaodien/home/master',$this->design);
		}
		else
		{
			header('location:login');
		}
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
		$mssv = $this->session->userdata('maso');
		$madetai = $this->m_quanlydata->getMadetai($mssv);
		$data['sinhvien'] = $this->m_quanlydata->getSVdetai($madetai['MADETAI']);
		$data['sinhvien_detai'] = $this->m_quanlydata->load_Baocaotiendo($madetai);
		$data['messenger'] = $this->m_quanlydata->load_Messenger($madetai['MADETAI']);
		$this->design['index'] = $this->load->view('giaodien/page/baocaotiendo',$data,true);
		$this->load->view('giaodien/home/master',$this->design);
	}
	public function Taikhoan()
	{
		$this->design['index'] = $this->load->view('giaodien/page/taikhoan',null,true);
		$this->load->view('giaodien/home/master',$this->design);
	}
	public function messenger()
	{
		$data['NGUOIGUI'] = $this->session->userdata('maso');
		$data['NOIDUNG'] = $this->input->post('comment');
		$data['MADT'] = $this->input->post('MADETAI');
		$this->m_quanlydata->messenger($data);
		header('location:Baocaotiendo');
	}
	public function logout()
	{
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('maso');
		header('location:login');
	}
	public function doimatkhau()
	{
		$data['MatKhau'] = md5($this->input->post('pass_new'));
		$this->m_quanlydata->update_password($this->session->userdata('maso'),$data);
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('maso');
		$data['tb'] = "Đổi mật khẩu thành công, bạn vui lòng đăng nhập lại";
		$this->login($data);

	}
	public function checkpass()
	{
		$pass =  md5($this->input->post('pass_old'));
		$where = array('IDUser' => $this->session->userdata('maso'), 'MatKhau' => $pass);
		if($this->m_login->ktDangNhap($where, "user"))
			echo "1";
		else 
			echo "0";
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