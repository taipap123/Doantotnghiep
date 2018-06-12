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
	public function update_password($id,$data)
	{
		
		$this->db->where('IDUser', $id);
		$this->db->update('user', $data); 

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

	public function load_Baocaotiendo($madetai)
	{
		// $this->db->where('MASV',$mssv);
		// $this->db->select('MADETAI');
		// $madetai = $this->db->get('sv_detai')->row_array();

		$this->db->from('baocao as bc');
		$this->db->join('detai as dt','dt.MADETAI = bc.MADETAI','left');
		$this->db->join('dotdangky as ddk','ddk.MADOT = dt.MADOT','left');
		// $this->db->join('sinhvien as sv','sv.MASV = svdt.MASV','left');
		// $this->db->join('baocao as bc','bc.MADETAI = svdt.MADETAI','inner');
		$this->db->where('bc.MADETAI',$madetai['MADETAI']);
		
		return $this->db->get()->result_array();
	}
	public function messenger($data)
	{
		$this->db->insert('messenger',$data);
	}
	public function load_Messenger($madetai)
	{
		$this->db->select('sv.HOTEN, gv.TENGV, sv.GIOITINH as gtsv, gv.GIOITINH as gtgv,ms.NOIDUNG,ms.NGUOIGUI');
		$this->db->from('messenger as ms');
		$this->db->join('sinhvien as sv','sv.MASV = ms.NGUOIGUI','left');
		$this->db->join('giangvien as gv','gv.MAGV = ms.NGUOIGUI','left');
		$this->db->where('ms.MADT',$madetai);
		return $this->db->get()->result_array();
	}
	public function getMadetai($mssv)
	{
		$this->db->where('MASV',$mssv);
		$this->db->select('MADETAI');
		return $this->db->get('sv_detai')->row_array();

	}
	public function getSVdetai($maDetai)
	{
		
		$this->db->select();
		$this->db->from('sv_detai as svdt');
		$this->db->join('sinhvien as sv','sv.MASV = svdt.MASV');
		$this->db->where('svdt.MADETAI',$maDetai);
		return $this->db->get()->result_array();

	}
	
}
?>