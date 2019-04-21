<?php

class M_data extends CI_Model{
	function get_buku(){
		return $this->db->get('buku');
	}

	function register_user($data,$table){
		$this->db->insert($table,$data);
	}

	function cek_log($table,$where){
		return $this->db->get_where($table,$where);
	}

	function get_pengguna(){
		return $this->db->get('pengguna');
	}

	function detil_pengguna($email){
		return $this->db->query("SELECT * FROM pengguna where email = '$email'");
	}

	function get_order(){
		return $this->db->get('orderan');
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function wipe_order(){
		return $this->db->empty_table('orderan');
	}


}
