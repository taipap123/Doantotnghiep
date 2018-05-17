<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_admin extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
			$this->load->database();
	}
		public function getallgv()
		{
			return $this->db->get('giangvien')->result_array();
		}
		public function create_madot($value)
		{
			$this->db->like("MADOT",$value);
			$this->db->order_by("MADOT","asc");
			$data['ma'] = $this->db->get('dotdangky')->result_array();

			$macuoi = $data['ma'][count($data['ma'])-1]['MADOT'];
			$dem = (int)(substr($macuoi,strlen($value), strlen($macuoi) -strlen($value)));
			$dem = $dem + 1;
			if($dem < 10000)
				return $value.$dem;
			// else if($dem < 100)
			// 	return $value."0".$dem;
			// else if($dem < 1000)
			// 	return $value."".$dem;
			else
				return "";

		}
		public function insert_madotdk($data)
		{
			$this->db->insert('dotdangky',$data);
		}
	}	
?>