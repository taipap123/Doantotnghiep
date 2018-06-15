<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."\libraries\PHPExcel.php";

class Xuly_ad extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library(array('form_validation','session', 'upload'));
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
				$name_user= $this->m_quanlydata->loadTableWhere("giangvien","MAGV = '".$user."'");

				$this->session->set_userdata('login', $name_user[0]['TENGV']);
				$this->session->set_userdata('maso', $name_user[0]['MAGV']);
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
	
	public function tkpk($tab='loadpage1')
	{

		$data['ds_svdangky'] = $this->m_admin->load_DSDangKyDeTai();
		$data['madotdk'] = $this->m_quanlydata->loadTable('dotdangky');
		$data['ds_detai'] = $this->m_admin->load_DSDeTai($this->session->userdata('madotdk'));
		$data['ds_detai_kiemduyet'] = $this->m_admin->load_DSDeTai_KiemDuyet($this->session->userdata('madotdk'));
		$data['allgv'] = $this->m_admin->getallgv();
		$data['ds_bomon'] = $this->m_admin->load_DSBoMon();

		$data['ds_yeucaude'] = $this->m_admin->load_DSYeuCauDe($this->session->userdata('madotdk'));

		if(empty($data['ds_yeucaude']))
		{
			$data['ds_yeucaude'] = -1;
		}
		else
		{
			$cnpm = (int)$this->m_admin->sum_SLDeDaYeuCau($data['ds_yeucaude'][0]['mabm'], $this->session->userdata('madotdk'))[0]['SL_DETAI'];
			$mmt = (int)$this->m_admin->sum_SLDeDaYeuCau($data['ds_yeucaude'][1]['mabm'], $this->session->userdata('madotdk'))[0]['SL_DETAI'];
			$httt = (int)$this->m_admin->sum_SLDeDaYeuCau($data['ds_yeucaude'][2]['mabm'], $this->session->userdata('madotdk'))[0]['SL_DETAI'];

			$data['slde_cnpm'] = (int)$data['ds_yeucaude'][0]['SLDE'] - $cnpm;
			$data['slde_mmt'] = (int)$data['ds_yeucaude'][1]['SLDE'] - $mmt;
			$data['slde_httt'] = (int)$data['ds_yeucaude'][2]['SLDE'] - $httt;

			$sl_gv = $this->m_admin->countGV_BoMon();

			$data['sldemo_cnpm']= round((int)$data['ds_yeucaude'][0]['SLDE'] / $sl_gv['gv_cnpm'], 0);
			$data['sldemo_mmt']= round((int)$data['ds_yeucaude'][1]['SLDE'] / $sl_gv['gv_mmt'], 0);
			$data['sldemo_httt']= round((int)$data['ds_yeucaude'][2]['SLDE'] / $sl_gv['gv_httt'], 0);

		}

		$data['ds_hoidong'] = $this->m_quanlydata->loadTableWhere('hoidong', "MADOT = '".$this->session->userdata('madotdk')."'");
		$data['ds_gv_hd'] = $this->m_admin->load_DSHoiDong($this->session->userdata('madotdk'));
		$data[$tab] = "active";

		$this->admin['main'] = $this->load->view('admin/page/giaodien',$data,true);
		$this->load->view('admin/home/master',$this->admin);


	}
	public function giangvien()
	{
		$mssv = $this->session->userdata('maso');
		$data['ds_bomon'] = $this->m_admin->load_DSBoMon();
		$data['ds_detai'] = $this->m_admin->loadDeTaiTheoGV($mssv);
		$this->admin['main'] = $this->load->view('admin/page/giangvien',$data,true);
		$this->load->view('admin/home/master',$this->admin);
	}
	public function thongbao()
	{
		$this->admin['main'] = $this->load->view('admin/page/thongbao',null,true);
		$this->load->view('admin/home/master',$this->admin);
	}
	public function qladmin()
	{
		$loaitk = $this->uri->segment(3);
		$data['user'] = $this->m_admin->User($loaitk);
		$this->admin['main'] = $this->load->view('admin/page/ad',$data,true);
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
			$this->m_admin->update_kiemduyet($kiemduyet, $this->session->userdata('madotdk'));
		}

		$tab = "loadpage5";
		$this->tkpk($tab);
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
		if($this->input->post('hd') !=null)
		{
			$this->m_admin->insert_madotdk($data);

			$data_bm = $this->m_admin->load_DSBoMon();
			
			foreach ($data_bm as $value) 
			{
				$data_slde['MADOT'] = $data['MADOT'];
				$data_slde['MABM']  = $value['MABM'];
				$data_slde['SLDE'] = $this->input->post($value['MABM']);

				$this->m_quanlydata->insertData('dotdangky_bomon', $data_slde);
			}
			echo '<script type="text/javascript">alert("Thành Công!!")
			window.location.replace("tkpk");
			</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Thất Bại!!")
			window.location.replace("tkpk");
			</script>';
		}
		// header('location:tkpk');

	}


	public function phanCongGiangVien ()
	{
		$dsgv_check = $this->input->post('ckbgiangvien');

		for($i = 0; $i < count($dsgv_check); $i++)
		{
			$data['MAGV'] = $dsgv_check[$i];
			$data['MABOMON'] = $this->input->post('txtbm'.$data['MAGV']);
			$data['MADOT'] = $this->session->userdata('madotdk');
			$data['SL_DETAI'] = $this->input->post('txt'.$data['MAGV']);
			$data['NGAYNOP'] = $this->input->post('date'.$data['MAGV']);

			if(!$this->m_admin->ktYeuCauTaoDe($data))
				$this->m_admin->insert_phanCong($data);
			else $this->m_admin->update_phanCong($data);
		}

		$tab = "loadpage2";
		$this->tkpk($tab);
	}

	public function taoHoiDong()
	{
		$data['NoiDung'] = $this->input->post('tenhoidong');
		$data['MADOT'] = $this->input->post('madot');
		$data['SLTHANHVIEN'] = $this->input->post('slthanhvien');
		$this->m_admin->taoHoiDong($data);

		$tab = "loadpage4";
		$this->tkpk($tab);
	}

	public function add_thanhvienHD()
	{
		$magv= $this->input->post('ckbthamgia');
		
		for($i = 0; $i < count($magv); $i++)
		{
			$data['MAHD'] = $this->input->post('rdbmahd');
			$data['MAGV'] = $magv[$i];
			$data['CHUCVU'] = $this->input->post('chucvu'.$magv[$i]);

			$this->m_admin->add_thanhvienHD($data);
		}

		$tab = "loadpage4";
		$this->tkpk($tab);
	}
	public function add_HoiDong_Detai ()
	{
		$made= $this->input->post('ckbhoidong_detai');
		$mahd = $this->input->post('mahd');
		$tgcham = $this->input->post('tgcham');
		for($i = 0; $i < count($made); $i++)
		{
			$this->m_admin->add_HoiDong_Detai($made[$i], $mahd, $tgcham);
		}
		$tab = "loadpage4";
		$this->tkpk($tab);
	}
	public function getTimeSpan()
	{
		$madetai = $this->input->post('madetai');
		$data['detail'] = $this->m_admin->getTimeSpan($madetai);
		// $data['detail'] = $this->m_admin->getTimeSpan('DA0007');
		$date1=date_create($data['detail']['TGBAOVE']);
		$date2=date_create($data['detail']['TGBATDAU']);
		$diff=date_diff($date2,$date1);
		$datetemp = $diff->format('%a');
		$data['day'] = (int)$datetemp;
		echo json_encode($data);
	}
	public function getLinknop()
	{
		$madetai = $this->input->post('madetai');
		$data['linknop'] = $this->m_admin->getLinknop($madetai);
		echo json_encode($data['linknop']);
	}
	public function getMessenger()
	{
		$madetai = $this->input->post('madetai');
		$data['detail'] = $this->m_admin->load_Messenger($madetai);
		// $data['detail'] = $this->m_admin->load_Messenger('DA0007');
		echo json_encode($data['detail']);
	}
	public function messenger()
	{
		$mssv = $this->session->userdata('maso');
		$data['NGUOIGUI'] = $this->session->userdata('maso');
		$data['NOIDUNG'] = $this->input->post('comment');
		$data['MADT'] = $this->input->post('MADETAI');
		$this->m_admin->messenger($data);
		header('location:giangvien');
	}
	public function insert_noidungbaocao()
	{
		$data['NOIDUNGBAOCAO'] = $this->input->post('noidungbc');
		$data['MADETAI'] = $this->input->post('madetaii');
		$data['TUAN'] = $this->input->post('tuann');
		$insert = $this->m_admin->insert_noidungbaocao($data);
		echo json_encode($data); 
	}

	public function setMaDotDK2 ()
	{
		$this->session->set_userdata('madotdk', $this->input->post('maDotDK'));
		$tab = "loadpage2";
		$this->tkpk($tab);
	}
	public function setMaDotDK3 ()
	{
		$this->session->set_userdata('madotdk', $this->input->post('maDotDK'));
		$tab = "loadpage3";
		$this->tkpk($tab);
	}
	public function setMaDotDK4 ()
	{
		$this->session->set_userdata('madotdk', $this->input->post('maDotDK'));
		$tab = "loadpage4";
		$this->tkpk($tab);
	}
	public function setMaDotDK5 ()
	{
		$this->session->set_userdata('madotdk', $this->input->post('maDotDK'));
		$tab = "loadpage5";
		$this->tkpk($tab);
	}
	public function setMaDotDK6 ()
	{
		$this->session->set_userdata('madotdk', $this->input->post('maDotDK'));
		$tab = "loadpage6";
		$this->tkpk($tab);
	}
	public function setMaDotDK7 ()
	{
		$this->session->set_userdata('madotdk', $this->input->post('maDotDK'));
		$tab = "loadpage7";
		$this->tkpk($tab);
	}

	
	//xu ly file

	public function saveFile ()
	{
		$data = $this->m_admin->load_DSHoiDong($this->session->userdata('madotdk'));
		//Khởi tạo đối tượng
		$excel = new PHPExcel();
		//Chọn trang cần ghi (là số từ 0->n)
		$excel->setActiveSheetIndex(0);
		//Tạo tiêu đề cho trang. (có thể không cần)
		$excel->getActiveSheet()->setTitle('Danh sách hội đồng');

		//Xét chiều rộng cho từng, nếu muốn set height thì dùng setRowHeight()
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);

		//Xét in đậm cho khoảng cột
		$excel->getActiveSheet()->getStyle('A1:B3')->getFont()->setBold(true);
		
		//Tạo thông tin xuất
		$excel->getActiveSheet()->setCellValue('A1', 'Ngày xuất danh sách:');
		$excel->getActiveSheet()->setCellValue('B1', ''.date('Y-m-d H:i:s'));

		$noidung = $this->m_admin->getNoiDungDot($this->session->userdata('madotdk'));

		$excel->getActiveSheet()->getStyle('B3')->getFont()->setSize(20);
		$excel->getActiveSheet()->setCellValue('B3', 'Danh sách hội đồng');
		
		// thực hiện thêm dữ liệu vào từng ô bằng vòng lặp
		// dòng bắt đầu = 4
		$numRow = 4;
		foreach($data as $row){

			$excel->getActiveSheet()->getStyle('A'.$numRow.':D'.($numRow+1))->getFont()->setBold(true);

			$excel->getActiveSheet()->setCellValue('A'.$numRow, 'Mã hội đồng: '.$row[0]);
			$excel->getActiveSheet()->setCellValue('B'.$numRow, 'Nội dung: '.$row[1]);

			$numRow++;   
            //Tạo tiêu đề cho từng cột
            $excel->getActiveSheet()->setCellValue('A'.$numRow, 'Mã Giảng Viên');
            $excel->getActiveSheet()->setCellValue('B'.$numRow, 'Tên Giảng Viên');
            $excel->getActiveSheet()->setCellValue('C'.$numRow, 'Mã Bộ Môn');
            $excel->getActiveSheet()->setCellValue('D'.$numRow, 'Chức vụ');

			for($j = 0; $j < count($row[2]); $j++)
            {
               
                $numRow++; 
                $excel->getActiveSheet()->setCellValue('A'.$numRow, $row[2][$j]['MAGV']);
                $excel->getActiveSheet()->setCellValue('B'.$numRow, $row[2][$j]['TENGV']);
                $excel->getActiveSheet()->setCellValue('C'.$numRow, $row[2][$j]['MABM']);
                $excel->getActiveSheet()->setCellValue('D'.$numRow, $row[2][$j]['CHUCVU']);
  
            }
			
			$numRow+=2;
		}
		// Khởi tạo đối tượng PHPExcel_IOFactory để thực hiện ghi file
		// ở đây lưu file dưới dạng excel2007
		header('Content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="danhsachhoidong.xls"');
		PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');

	}

	//Tab giang vien
	// public function giangvien($tab='loadpage1')
	// {
	// 	$data['ds_bomon'] = $this->m_admin->load_DSBoMon();
	// 	$data['madotdk'] = $this->m_quanlydata->loadTable('dotdangky');
		
	// 	$this->admin['main'] = $this->load->view('admin/page/giangvien',$data,true);
	// 	$this->load->view('admin/home/master',$this->admin);
	// }

	public function taoDeTai($noidung)
	{
		$dotdangky = $this->m_quanlydata->loadTableWhere('dotdangky', "MADOT = '".$this->session->userdata('madotdk')."'");
		$data['MADETAI'] = $this->m_admin->getMaDeTai();

		$data['TEN_DT'] = $noidung['TEN_DT'];
		$data['YEUCAU'] = $noidung['YEUCAU'];
		$data['MABM'] = $noidung['MABM'];

		$data['KIEMDUYET'] = 0;
		$data['SLTV'] = $dotdangky[0]['SLTVNHOM'];
		$data['MADOT'] = $dotdangky[0]['MADOT'];
		$data['TGCHAMHOIDONG'] = $dotdangky[0]['TGBAOVE'];

		$this->m_quanlydata->insertData('detai', $data);

		$tab = "loadpage1";
		$this->giangvien($tab);
	}

	public function taoDeTai_ThuCong ()
	{
		$data['TEN_DT'] = $this->input->post('noidungdt');
		$data['YEUCAU'] = $this->input->post('yeucaudt');
		$data['MABM'] = $this->input->post('mabomon');

		$this->taoDeTai($data);
	}

	public function setMaDotDK_gv_1 ()
	{
		$this->session->set_userdata('madotdk', $this->input->post('maDotDK'));

		header('location:giangvien');
	}

	public function xuatFileMau ()
	{
		//Khởi tạo đối tượng
		$excel = new PHPExcel();
		//Chọn trang cần ghi (là số từ 0->n)
		$excel->setActiveSheetIndex(0);
		//Tạo tiêu đề cho trang. (có thể không cần)
		$excel->getActiveSheet()->setTitle('Danh sách đề tài');

		//Xét chiều rộng cho từng, nếu muốn set height thì dùng setRowHeight()
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);

		//Xét in đậm cho khoảng cột
		$excel->getActiveSheet()->getStyle('A1:C3')->getFont()->setBold(true);
		//Tạo thông tin xuất
		$excel->getActiveSheet()->getStyle('B1')->getFont()->setSize(20);
		$excel->getActiveSheet()->setCellValue('B1', 'Danh sách đề tài');

		
		$excel->getActiveSheet()->setCellValue('A3', 'Nội dung đề tài');
		$excel->getActiveSheet()->setCellValue('B3', 'Yêu cầu đề tài');
		$excel->getActiveSheet()->setCellValue('C3', 'Mã bộ môn');
		
		
		header('Content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="danhsachdetai.xls"');
		PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');
	}

	public function taoDeTai_file()
	{
		
		$file = $_FILES['filepath']['tmp_name'];
		//Tiến hành xác thực file
		$objFile = PHPExcel_IOFactory::identify($file);
		$objData = PHPExcel_IOFactory::createReader($objFile);

		//Chỉ đọc dữ liệu
		$objData->setReadDataOnly(true);

		// Load dữ liệu sang dạng đối tượng
		$objPHPExcel = $objData->load($file);

		//Chọn trang cần truy xuất
		$sheet  = $objPHPExcel->setActiveSheetIndex(0);

		//Lấy ra số dòng cuối cùng 
		$Totalrow = $sheet->getHighestRow();
		//Lấy ra tên cột cuối cùng
		$LastColumn = $sheet->getHighestColumn();

		//Chuyển đổi tên cột đó về vị trí thứ, VD: C là 3,D là 4
		$TotalCol = PHPExcel_Cell::columnIndexFromString($LastColumn);

		//Tạo mảng chứa dữ liệu
		$data = [];

		//Tiến hành lặp qua từng ô dữ liệu
		//----Lặp dòng, Vì dòng đầu là tiêu đề cột nên chúng ta sẽ lặp giá trị từ dòng 4
		for ($i = 4; $i <= $Totalrow; $i++)
		{
			//----Lặp cột
			for ($j = 0; $j < $TotalCol; $j++)
			{
		    	// Tiến hành lấy giá trị của từng ô đổ vào mảng
				$data[$i-4][$j]=$sheet->getCellByColumnAndRow($j, $i)->getValue();
			}
		}
		
		for($i = 0; $i < count($data); $i++)
		{
			$noidung['TEN_DT'] = $data[$i][0];
			$noidung['YEUCAU'] = $data[$i][1];
			$noidung['MABM'] = $data[$i][2];

			$this->taoDeTai($noidung);
		}
	}

	public function editUser()
	{
		$page = '';
		$data['IDUser'] = $this->input->post('idUser');
		$data['MatKhau'] = $this->input->post('matkhau');
		$data['IDQuyenSuDung'] = $this->input->post('quyensd');
		$this->m_admin->editUser($this->input->post('idUser1'),$data);
		if(substr($data['IDUser'], 0,3) == '200')
		{
			$page = 'sinhvien';
		}
		else if(substr($data['IDUser'], 0,3) == '010')
		{
			$page = 'giangvien';
		}
		else{
			$page = 'admin';
		}
		header('location:qladmin/'.$page.'');
	}

	public function deleteUser()
	{
		$page = '';
		$data['IDUser'] = $this->input->post('idUser');
		$this->m_admin->deleteUser($this->input->post('idUser'));
		if(substr($data['IDUser'], 0,3) == '200')
		{
			$page = 'sinhvien';
		}
		else if(substr($data['IDUser'], 0,3) == '010')
		{
			$page = 'giangvien';
		}
		else{
			$page = 'admin';
		}
		header('location:qladmin/'.$page.'');
	}

	public function insertUser()
	{
		$page = '';
		$data['IDUser'] = $this->input->post('idUser');
		$data['MatKhau'] = $this->input->post('matkhau');
		$data['IDQuyenSuDung'] = $this->input->post('quyensd');
		$data['loaitk']='';
		if(substr($data['IDUser'], 0,3) == '200')
		{
			$page = 'sinhvien';
			$data['loaitk']='sinhvien';
		}
		else if(substr($data['IDUser'], 0,3) == '010')
		{
			$page = 'giangvien';
			$data['loaitk'] = 'giangvien';
		}
		else{
			$page = 'admin';
			$data['loaitk'] = 'admin';
		}
		$this->m_admin->insertUser($data);
		
		header('location:qladmin/'.$page.'');
	}
}
?>