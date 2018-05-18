<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_quanlydata extends CI_Model {

	function __construct(){
        parent::__construct();
        $this->load->database();
    }

	function loadTable ($table)
	{
		$query = $this->db->get($table);
		return $query->result_array();
	}

	function loadTableWhere ($table, $match)
	{
		$this->db->select()
            ->from($table)
            ->where($match);
        $query = $this->db->get();
        return $query->result_array();

	}
	function loadTableJoinTable ($table1, $table2, $pk_table1, $pk_table2, $where)
	{
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join($table2, $table2.'.'.$pk_table2.'='.$table1.'.'.$pk_table1);
		$this->db->where($where);

		$query = $this->db->get();
		return $query->result_array();
	}

	function insertData($table, $data)
	{
		$this->db->insert($table, $data);
	}



	//dang ky de tai
	function get_SLTV ($madetai)
	{
		$this->db->select('SLTV')
            ->from('detai')
            ->where('madetai = '."'".$madetai."'");

        $query = $this->db->get()->result_array();
        return $query[0]['SLTV'];
	}

	function ktSoLuongTV ($madetai)
	{
        if((int)$this->get_SLTV($madetai) <= 0)
        {
        	return false;
        }
        return true;
	}

	function update_SLTV ($madetai)
	{
		$data = array(
               'SLTV' => (int)$this->get_SLTV($madetai) - 1
            );
		$this->db->where('madetai', $madetai);
		$this->db->update('detai', $data); 
	} 

	function tim_MaDeTai_SV($masv)
	{
		$this->db->select('madetai')
            ->from('sv_detai')
            ->where('masv = '.$masv);

        $query = $this->db->get()->result_array();
        return $query;
    }

	function load_NhomDeTai($masv)
	{
		$madetai = $this->tim_MaDeTai_SV($masv);
		if(!empty($madetai))
		{
	        $this->db->select('sinhvien.masv, sinhvien.hoten, sinhvien.sdt, sinhvien.email, detai.ten_dt, sv_detai.ngaydangky');
			$this->db->from('sv_detai');
			$this->db->join('sinhvien', 'sinhvien.masv = sv_detai.masv');
			$this->db->join('detai', 'detai.madetai = sv_detai.madetai');
			$this->db->where('sv_detai.madetai = '."'".$madetai[0]['madetai']."'");

			$query = $this->db->get();
			return $query->result_array();
		}
		else return 0;
	}

	
}
?>