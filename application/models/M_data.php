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
		return $this->db->select('*')
		->from($from)
		->join($join, $where)
		->get();
	}
	function get_join_cart($from,$join,$where,$email){
		return $this->db->select('*')
		->from($from)
		->join($join, $where)
		->where('email',$email)
		->get();
	}


	function search_by_id($query,$filter,$tabname){
		return $this->db->select('*')
		->from($tabname)
		->like($filter, $query)
		->get()->result();
	}
	public function update_pengguna($table,$data_update){
		$this->db->where('email', $this->session->userdata('email'));
 	 	$update = $this->db->update($table,$data_update);
	}

}
