<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_admin extends CI_Model {
		
		function __construct(){
	        parent::__construct();
	        $this->load->database();
    	}

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

	}
 ?>