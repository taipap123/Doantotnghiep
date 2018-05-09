<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class m_login extends CI_Model {

		function ktDangNhap ($where = array(), $table)
		{
			$this->load->database();

			$this->db->where($where);

			$query =  $this->db->get($table);

			if($query->num_rows() > 0)
				return true;
			else 
				return false;
		}

	}
?>