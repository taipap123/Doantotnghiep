<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qlkl extends CI_Model {
	
	public function getdata()
	{
		$this->load->database();
		return $this->db->get('dotdangky')->result_array();
	}
	
	public function insertdata($data)
	{
		$this->load->database();
		return $this->db->insert('theloaitin',$data);	
	}
	public function deletedata($idloai)
	{
		$this->load->database();
		$this->db->where('IDLOAI',$idloai);
		return $this->db->delete('theloaitin');
	}
	
}

?>