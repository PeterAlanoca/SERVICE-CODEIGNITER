<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API_Model extends CI_Model {
	
	function getResultArray($query){
		if ($query->num_rows() > 0) {   
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function getResultRows($query){
		if($query->num_rows()>0) {
			return $query->num_rows();
		}
	}

	function getResultObject($query){
		if ($query->num_rows() > 0) { 
			$data = $query->result();  
			return $data[0];
		}
	}

	function affectedRows() {
		return ($this->db->affected_rows() > 0) ? true : false;
	}
}
?>
