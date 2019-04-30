<?php

class M_data extends CI_Model{
	function get($table){
			return $this->db->get($table);
	}
	function get_by($table,$item){
			return $this->db->get_where($table,$item);
	}
	function insert($table,$item){
		$this->db->insert($table,$item);
	}

	function get_join($from,$join,$where){
		$this->db->select('*');
		$this->db->from($from);
		$this->db->join($join, $where);
		return $this->db->get();
	}

	function search_by_id($query,$filter,$tabname){
		$this->db->select('*');
		$this->db->from($tabname);
		$this->db->like($filter, $query);
		return $this->db->get()->result();
	}
	public function update_pengguna($table,$data_update){
		$this->db->where('email', $this->session->userdata('email'));
 	 	$update = $this->db->update($table,$data_update);
	}

}
