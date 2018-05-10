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
	function loadTableJoinTable ($table1, $table2, $pk_table1, $pk_table2)
	{
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join($table2, $table2.'.'.$pk_table2.'='.$table1.'.'.$pk_table1);
		$query = $this->db->get();
		return $query->result_array();
	}

}
?>