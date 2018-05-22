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
    		$this->db->select('detai.madetai, detai.ten_dt, detai.kiemduyet, giangvien.tengv, bomon.tenbm');
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
			$this->db->insert('hoidong',$data);
		}
	}
 ?>
