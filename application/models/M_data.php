<?php

class M_data extends CI_Model{
	function get_data($table){
			return $this->db->get($table)->result();
	}
	function get_buku(){
		return $this->db->get('buku');
	}

	function get_wishlist(){
		return $this->db->get('wishlist');
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
<<<<<<< HEAD


=======
<<<<<<< HEAD
=======

>>>>>>> c9e8647ba2b04aa7d5d357d7741a4fde5a7076a3
>>>>>>> a2706a53d8ecff072a4388db5bd5e4b4dfa052e5

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

<<<<<<< HEAD
	function get_join($from,$join,$where){
		$this->db->select('*');
		$this->db->from($from);
		$this->db->join($join, $where);
		return $this->db->get()->result();
	}

	function get_by_id($id,$col,$tabname){
		$this->db->where($col,$id);
		$data = $this->db->get($tabname);
		return $data->row_array();
	}
	function search_by_id($query,$filter,$tabname){
		$this->db->select('*');
		$this->db->from($tabname);
		$this->db->like($filter, $query);
		return $this->db->get()->row_array();
=======
	public function update_pengguna($table,$data_update){

		$this->db->where('email', $this->session->userdata('email'));

 	 $update = $this->db->update($table,$data_update);


>>>>>>> c9e8647ba2b04aa7d5d357d7741a4fde5a7076a3
	}


	function get_join($from,$join,$where){
		$this->db->select('*');
		$this->db->from($from);
		$this->db->join($join, $where);
		return $this->db->get()->result();
	}

	function get_by_id($id,$col,$tabname){
		$this->db->where($col,$id);
		$data = $this->db->get($tabname);
		return $data->row_array();
	}
	function search_by_id($query,$filter,$tabname){
		$this->db->select('*');
		$this->db->from($tabname);
		$this->db->like($filter, $query);
		return $this->db->get()->row_array();
	}
	public function update_pengguna($table,$data_update){

		$this->db->where('email', $this->session->userdata('email'));

 	 $update = $this->db->update($table,$data_update);


	}


}
