<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends API_Model {
	
	function getAll() {
		$this->db->where('state', 'A');
		$query = $this->db->get('user');
		return $this->getResultArray($query);
	}

	function get($id) {
		$this->db->where('id', $id);
		$this->db->where('state', 'A');
		$query = $this->db->get('user');
		return $this->getResultObject($query);
	}

	function insert($user) {
		$this->db->insert('user', $user);
		return $this->affectedRows();
	}

	function update($user) {
		$this->db->where('id', $user->id);
		$this->db->update('user', $user);
		return $this->affectedRows();
	}


	function delete($user) {
		$this->db->where('id', $user->id);
		$this->db->delete('user');
		return $this->affectedRows();
	}
}
