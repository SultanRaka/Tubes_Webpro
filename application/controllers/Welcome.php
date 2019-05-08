<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  function __construct(){
		parent::__construct();
		$this->load->model('M_data');
	}
	function loadpage($name,$data,$label){
		$this->load->view('imports');
		$this->load->view('header',$label);
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
      $label['title'] = 'Home';
      $where = 'buku.id_buku = flash_sale.id_buku';
			$data['sale_item'] = $this->m_data
        ->get_join('flash_sale','buku',$where)
        ->result();
			$this->loadpage('home',$data,$label);
	}
	function bookpage($id){
    $label['title'] = $data['book']['nama'];
		$where = array('id_buku'=> $id);
		$data['book'] = $this->m_data->get_by('buku',$where)->row_array();
    $data['id'] = $id;
		$this->loadpage('bookpage',$data,$label);
	}
	function keranjang(){
      $label['title'] = "Cart";
			$where ='buku.id_buku = keranjang.id_buku';
      $email = $this->session->userdata('email');
			$data['cart_item'] = $this->m_data
        ->get_join_where('keranjang','buku',$where,$email)
        ->result();
      $data['count_result'] = count($data['cart_item']);
			$this->loadpage('page_keranjang',$data,$label);
	}
	function akun($active){
    $label['title'] = "Account";
    $where1 ='wishlist.id_buku = buku.id_buku';
    $where2 = array('email'=>$this->session->email);
		$email = $this->session->email;
    $data['active'] = $active;
		$data['user'] = $this->m_data
      ->get_by('pengguna',$where2)
      ->row_array();
    $data['wishlist'] = $this->m_data
      ->get_join_where('wishlist','buku',$where1,$email)
      ->result();
		$this->loadpage('akun',$data,$label);
	}
	function search(){
    $label['title'] = 'Search';
		$query = $this->input->post('search-bar');
		$data['buku'] = $this->m_data
      ->search_by_id($query,'nama','buku');
    $this->loadpage('search',$data,$label);
	}
	function promo(){
    $label['title'] = 'Promo' ;
		$data['promo_item'] = $this->m_data->get('promo');
		$this->loadpage('promo',$data,$label);
	}
	function flash(){
    $data['sale_item'] = $this->m_data->get_join('flash_sale','buku','buku.id_buku = flash_sale.id_buku')->result();
		$this->loadpagecarry('flash_sale',$data);
	}
	function register_user(){
		$data = array(
			'email' => $this->input->post('email'),
			'pass' => $this->input->post('password'),
			'nama' => $this->input->post('name')
			);
		$this->m_data->insert('pengguna',$data);
    $this->direct_login($data);
	}
	function login(){
		$where = array(
			'email' => $this->input->post('email'),
			'pass' => $this->input->post('password')
		);
		$query = $this->m_data->get_by('pengguna',$where)->row_array();
    $this->direct_login($query);
	}
  function direct_login($query){
    if(($query > 0) || ($query)) {
      $data_session = array(
        'nama' => $query['nama'],
        'email' => $query['email'],
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
      $data_email = array(
        'email' => $data['email']
      );
      $session_data = array(
        'email' => $data['email'],
        'nama' => $data['nama']
      );
      $this->m_data->update_pengguna('pengguna',$data);
      $this->m_data->update_pengguna('keranjang',$data_email);
      $this->m_data->update_pengguna('wishlist',$data_email);
      $this->session->set_userdata($session_data);
			redirect(site_url('Welcome/akun/akun_saya'));
	}
  function tambah_wishlist($id){
    $data = array(
      'email' => $this->session->email,
      'id_buku' => $id
    );
    $this->m_data->insert('wishlist',$data);
  }
  function tambah_keranjang($id){
    $data = array(
      'email' => $this->session->email,
      'id_buku' => $id
    );
    $this->m_data->insert('keranjang',$data);
    redirect(site_url('Welcome/keranjang'));
  }
  function wipe_wishlist(){

  }
  function wipe_keranjang(){

  }
}
?>
