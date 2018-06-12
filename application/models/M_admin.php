<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_admin extends CI_Model {
		
		function __construct(){
	        parent::__construct();
	        $this->load->database();
    	}

    	//kiểm duyệt- danh sách sinh viên đăng ký
    	function load_DSMaDeTai ()
    	{
    		$this->db->select('detai.madetai, detai.ten_dt');
    		$this->db->distinct();
			$this->db->from('sv_detai');
			$this->db->join('detai', 'detai.madetai = sv_detai.madetai');

			$query = $this->db->get();
			return $query->result_array();
    	}
    	function load_SinhVien_DeTai ($madetai)
    	{
    		$this->db->select('sinhvien.masv, sinhvien.hoten');
    		$this->db->distinct();
			$this->db->from('sv_detai');
			$this->db->join('sinhvien', 'sinhvien.masv = sv_detai.masv');
			$this->db->where('sv_detai.madetai = '."'".$madetai."'");

			$query = $this->db->get();
			return $query->result_array();
    	}
    	function load_DSDangKyDeTai ()
    	{
    		$data = array();

    		$ds_made = $this->load_DSMaDeTai();

    		foreach ($ds_made as $row) {

    			array_push($data, array($row['madetai'], $row['ten_dt'], $this->load_SinhVien_DeTai($row['madetai'])));
    		} 
    		
    		return $data;	
    	}
    	
    	function load_DSDeTai ()
    	{
    		$this->db->select('detai.madetai, detai.ten_dt, detai.kiemduyet, giangvien.magv, giangvien.tengv, bomon.tenbm');
			$this->db->from('detai');
			$this->db->join('bomon', 'bomon.mabm = detai.mabm');
			$this->db->join('gv_detai', 'gv_detai.madetai = detai.madetai');
			$this->db->join('giangvien', 'giangvien.magv = gv_detai.magv');
			$this->db->where("gv_detai.idloaicv = 'CV002' OR gv_detai.idloaicv = 'CV003'");

			$query = $this->db->get();
			return $query->result_array();
    	}

    	public function get_madetai ()
		{
			$this->db->select('madetai')
				->from('detai');
          	
	        $query = $this->db->get();
	        return $query->result_array();;
		}

    	function query_update_kiemduyet ($madetai, $kiemduyet)
		{
			$data = array(
	               'KIEMDUYET' => $kiemduyet
	            );
			$this->db->where('MADETAI', $madetai);
			$this->db->update('detai', $data); 
		}

		public function update_kiemduyet($data)
		{
			$data_made = $this->get_madetai();

			foreach ($data_made as $value) 
			{
				if(in_array($value['madetai'], $data))
					$this->query_update_kiemduyet($value['madetai'], 1);
				else
					$this->query_update_kiemduyet($value['madetai'], 0);
			}
		}

		//tạo đợt đăng ký
    	public function getallgv()
		{
			return $this->db->get('giangvien')->result_array();
		}

		public function create_madot($value)
		{
			$now = getdate(); 
			$currentYear = $now["year"];

			$this->db->like("MADOT",$value);
			$this->db->order_by("MADOT","asc");
			$data['ma'] = $this->db->get('dotdangky')->result_array();

			if(!empty($data['ma']))
			{
				$macuoi = $data['ma'][count($data['ma'])-1]['MADOT'];
				$dem = (int)$macuoi[strlen($macuoi) - 1] + 1;
				
				return $value.$currentYear.$dem;
			}
			else
				return $value.$currentYear.'0';

		}

		public function insert_madotdk($data)
		{
			$this->db->insert('dotdangky',$data);
		}

		public function load_DSBoMon ()
		{
			$this->db->select("MABM, TENBM")
				->from('bomon');

			$query = $this->db->get();
	        return $query->result_array();
		}

		//phân công giảng viên
		public function get_MaDot ()
		{
			$this->db->select('MADOT');
			$this->db->order_by("TGTAO","desc");

			$data = $this->db->get('dotdangky')->result_array();
			$madot = $data[0]['MADOT'];

			return $madot;
		}
		public function load_DSYeuCauDe($madot)
		{
			$this->db->select('bomon.mabm, bomon.tenbm, dotdangky_bomon.SLDE');
			$this->db->from('dotdangky_bomon');
			$this->db->join('bomon', 'bomon.mabm = dotdangky_bomon.mabm');
			$this->db->join('dotdangky', 'dotdangky.madot = dotdangky_bomon.madot');
		
			$this->db->where("dotdangky.madot = '".$madot."'");

			$query = $this->db->get();
			return $query->result_array();
		}
		public function sum_SLDeDaYeuCau($mabm)
		{
			$this->db->select_sum('SL_DETAI');
			$this->db->where("MABOMON = '".$mabm."'");

			$query = $this->db->get('yeucautaode');
			return $query->result_array();
		}
		public function insert_phanCong($data)
		{
			$this->db->insert('yeucautaode',$data);
		}

		//tao hội đồng

		public function taoHoiDong($data)
		{
			$this->db->insert('hoidong',$data);
		}
		public function add_thanhvienHD($data)
		{
			$this->db->insert('hd_giangvien',$data);
		}

		public function load_DSMaHD($madot)
		{
			$this->db->select('MAHD, NoiDung')
				->from('hoidong')
				->where("MADOT = '".$madot."'");

			$query = $this->db->get();
			return $query->result_array();
		}

		public function load_giangvien_HD($mahd)
		{
			$this->db->select('giangvien.MAGV, giangvien.TENGV, giangvien.MABM, hd_giangvien.CHUCVU');
			$this->db->from('hd_giangvien');
			$this->db->join('hoidong', 'hoidong.MAHD = hd_giangvien.MAHD');
			$this->db->join('giangvien', 'giangvien.MAGV = hd_giangvien.MAGV');
			$this->db->where("hd_giangvien.MAHD = '".$mahd."'");

			$query = $this->db->get();
			return $query->result_array();
		}

		function load_DSHoiDong($madot)
    	{
    		$data = array();

    		$ds_mahd = $this->load_DSMaHD($madot);

    		foreach ($ds_mahd as $row) {

    			array_push($data, array($row['MAHD'], $row['NoiDung'], $this->load_giangvien_HD($row['MAHD'])));
    		} 
    		
    		return $data;	
    	}
    	function add_HoiDong_Detai ($madetai, $mahoidong, $tgcham)
		{
			$data = array(
	               'MAHD' => $mahoidong,
	               'TGCHAMHD' => $tgcham
	            );
			$this->db->where('MADETAI', $madetai);
			$this->db->update('detai', $data); 
		}
		public function loadDeTaiTheoGV($msgv)
		{
			$this->db->from('gv_detai as gvdt');
			$this->db->join('detai as dt','dt.MADETAI = gvdt.MADETAI','left');
			$this->db->where('gvdt.MAGV',$msgv);
			return $this->db->get()->result_array();
		}

		public function getTimeSpan($madetai)
		{
			// $this->db->select('TGBATDAU,TGBAOVE');
			$this->db->from('DOTDANGKY as ddk');
			$this->db->join('DETAI as dt','dt.MADOT = ddk.MADOT','left');
			$this->db->join('BAOCAO as bc','dt.MADETAI  = bc.MADETAI','left');
			$this->db->where('dt.MADETAI',$madetai);
			return $this->db->get()->row_array();
		}
		public function getLinknop($madetai)
		{
			$this->db->from('BAOCAO');
			$this->db->where('MADETAI',$madetai);
			return $this->db->get()->result_array();
		}
		
		public function load_Messenger($madetai)
		{
			$this->db->select('sv.HOTEN, gv.TENGV, sv.GIOITINH as gtsv, gv.GIOITINH as gtgv,ms.NOIDUNG,ms.NGUOIGUI');
			$this->db->from('messenger as ms');
			$this->db->join('sinhvien as sv','sv.MASV = ms.NGUOIGUI','left');
			$this->db->join('giangvien as gv','gv.MAGV = ms.NGUOIGUI','left');
			$this->db->order_by('ms.id_CMT','desc');
			$this->db->where('ms.MADT',$madetai);
			return $this->db->get()->result_array();
		}

		public function insert_noidungbaocao($data)
		{
			$this->db->insert('baocao',$data);
		}
		public function messenger($data)
		{
			$this->db->insert('messenger',$data);
		}
	}
 ?>
