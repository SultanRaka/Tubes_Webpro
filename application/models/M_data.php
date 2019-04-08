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
	
		
		
}
