<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Xuly_ad extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library(array('form_validation','session'));
		$this->load->model(array('m_login', 'm_quanlydata', 'm_admin'));

		//view admin
		$this->admin['header'] = $this->load->view('admin/home/header', null, true);
		$this->admin['footer'] = $this->load->view('admin/home/footer', null, true);
		$this->admin['menu'] = $this->load->view('admin/home/menu', null, true);
	}
	
	public function index()
	{
		// $this->admin['main'] = $this->load->view('admin/page/giaodien',null,true);
		// $this->load->view('admin/home/master',$this->admin);
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
				$this->session->set_userdata('madotdk', $this->m_admin->get_MaDot());

				redirect(base_url('index.php/xuly_ad/tkpk'));
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
		$data['ds_svdangky'] = $this->m_admin->load_DSDangKyDeTai();
		$data['madotdk'] = $this->m_quanlydata->loadTable('dotdangky');
		$data['ds_detai'] = $this->m_admin->load_DSDeTai();
		$data['allgv'] = $this->m_admin->getallgv();
		$data['ds_bomon'] = $this->m_admin->load_DSBoMon();
		$data['ds_yeucaude'] = $this->m_admin->load_DSYeuCauDe($this->session->userdata('madotdk'));

		$cnpm = (int)$this->m_admin->sum_SLDeDaYeuCau($data['ds_yeucaude'][0]['mabm'])[0]['SL_DETAI'];
		$mmt = (int)$this->m_admin->sum_SLDeDaYeuCau($data['ds_yeucaude'][1]['mabm'])[0]['SL_DETAI'];
		$httt = (int)$this->m_admin->sum_SLDeDaYeuCau($data['ds_yeucaude'][2]['mabm'])[0]['SL_DETAI'];


		$data['slde_cnpm'] = (int)$data['ds_yeucaude'][0]['SLDE'] - $cnpm;
		$data['slde_mmt'] = (int)$data['ds_yeucaude'][1]['SLDE'] - $mmt;
		$data['slde_httt'] = (int)$data['ds_yeucaude'][2]['SLDE'] - $httt;

		$data['ds_hoidong'] = $this->m_quanlydata->loadTableWhere('hoidong', "MADOT = '".$this->session->userdata('madotdk')."'");
		
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

	public function update_kiemduyet()
	{
		$kiemduyet = $this->input->post('kiemduyet');

		if(!empty($kiemduyet)) 
		{
  			$this->m_admin->update_kiemduyet($kiemduyet);
		}

		header('location:tkpk');
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

		$data['CHAMHOIDONG'] = $this->input->post('hd');
		$this->m_admin->insert_madotdk($data);

		$data_bm = $this->m_admin->load_DSBoMon();

		foreach ($data_bm as $value) 
		{
			$data_slde['MADOT'] = $data['MADOT'];
			$data_slde['MABM']  = $value['MABM'];
			$data_slde['SLDE'] = $this->input->post($value['MABM']);

			$this->m_quanlydata->insertData('dotdangky_bomon', $data_slde);
		}

		header('location:tkpk');

	}

	public function filter_data()
	{
		$madot = $this->input->post('madot');
	}

	public function phanCongGiangVien ()
	{
		$dsgv_check = $this->input->post('ckbgiangvien');

		for($i = 0; $i < count($dsgv_check); $i++)
		{
			$data['MAGV'] = $dsgv_check[$i];
			$data['MABOMON'] = $this->input->post('txtbm'.$data['MAGV']);
			$data['SL_DETAI'] = $this->input->post('txt'.$data['MAGV']);
			$data['NGAYNOP'] = $this->input->post('date'.$data['MAGV']);
			$this->m_admin->insert_phanCong($data);
		}

		header('location:tkpk');
	}

	public function taoHoiDong()
	{
		$data['NoiDung'] = $this->input->post('tenhoidong');
		$data['MADOT'] = $this->input->post('madot');
		$data['SLTHANHVIEN'] = $this->input->post('slthanhvien');
		$this->m_admin->taoHoiDong($data);


		header('location:tkpk');
	}
}
?>