<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct(){
		parent::__construct();
		$this->load->model('M_data');
	}
	function loadpage($name){
		$this->load->view('imports');
		$this->load->view('header');
		$this->load->view($name);
		$this->load->view('footer');
	}
	function loadpagecarry($name,$data){
		$this->load->view('imports');
		$this->load->view('header');
		$this->load->view($name,$data);
		$this->load->view('footer');
	}
	function secload($name){
		$this->load->view('imports');
		$this->load->view($name);
	}
// Non-Carry Pages
	function register(){
		$this->secload('page_register');
	}
// Carry Pages
	function index(){
			$data['sale_item'] = $this->m_data->get_join('flash_sale','buku','buku.id_buku = flash_sale.id_buku')->result();
			$this->loadpagecarry('home',$data);
	}
	function bookpage($id){
		$where = array('id_buku'=> $id);
		$data['book'] = $this->m_data->get_by('buku',$where)->row_array();
		$this->loadpagecarry('bookpage',$data);
	}

	function keranjang(){
			$this->loadpage('keranjang');
	}

	function akun(){
		$where = array('email'=>$this->session->email);
		$data['user'] = $this->m_data->get_by('pengguna',$where)->row_array();
		$this->loadpagecarry('akun',$data);
	}

	function checkout(){
		$this->loadpage('page_checkout');
	}

	function wishlist(){
		$data['buku'] = $this->m_data->get('buku')->result();
		$this->loadpagecarry('wishlist',$data);
	}


	function search(){
		$query = $this->input->post('search-bar');
		$data['buku'] = $this->m_data->search_by_id($query,'nama','buku');
		$this->load->view('imports');
		$this->load->view('header');
		$this->load->view('search',$data);
		$this->load->view('footer');
	}

	function promo(){
		 $data['promo_item'] = $this->m_data->get('promo');
		$this->loadpagecarry('promo',$data);
	}

	function flash(){
		$this->loadpage('flash_sale');
	}


	function register_user(){
		$data = array(
			'email' => $this->input->post('email'),
			'pass' => $this->input->post('password'),
			'nama' => $this->input->post('name')
			);
		$this->m_data->register_user('pengguna',$data);
		redirect(base_url());
	}

	function login(){

		$where = array(
			'email' => $this->input->post('email'),
			'pass' => $this->input->post('password')
		);
		$query = $this->m_data->get_by('pengguna',$where)->row_array();

		if($query > 0){
			$data_session = array(
				'nama' => $query['nama'],
				'email' => $where['email'],
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect(base_url());
		}else{
			echo "Username dan password salah !"; ?>
			<form>
				<input type="button" value="Kembali" onclick="history.back()">
			</form>
			<?php
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}


	function update_pengguna(){
			$data = array(
				'email' => $this->input->post('email'),
				'nama' => $this->input->post('nama'),
				'gender' => $this->input->post('gender'),
				'birthdate' => $this->input->post('birthdate'),
				'telp' => $this->input->post('telp'),
				'job' => $this->input->post('job'),
				'hobi' => $this->input->post('hobi'),
				'favbook' =>$this->input->post('favbook')
			);

			$this->db->where('email',$data['email']);
			$this->db->update('pengguna',$data);
				redirect(base_url());
	}
}
?>
