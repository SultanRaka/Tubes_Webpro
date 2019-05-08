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
	function get_join_where($from,$join,$id,$where){
		return $this->db->select('*')
		->from($from)
		->join($join, $id)
		->where('email',$where)
		->get();
	}
	function search_by_id($query,$filter,$tabname){
		return $this->db->select('*')
		->from($tabname)
		->like($filter, $query)
		->get()->result();
	}
	function update_pengguna($table,$data_update){
		$this->db->where('email', $this->session->userdata('email'));
 	 	$update = $this->db->update($table,$data_update);
	}
}
