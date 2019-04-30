<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct(){
		parent::__construct();
		$this->load->model('M_data');
	}


	public function update_pengguna(){
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

		$this->where('email',$data['email']);
		$query = $this->db->update('pengguna',$data);
		if ($query) {
			redirect(base_url());
		}else{
			echo "gagal";
		}
}

	public function loadpage($name){
		$this->load->view('imports');
		$this->load->view('header');
		$this->load->view($name);
		$this->load->view('footer');
	}
	public function loadpagecarry($name,$data){
		$this->load->view('imports');
		$this->load->view('header');
		$this->load->view($name,$data);
		$this->load->view('footer');
	}


	public function index()
	{
			$this->loadpage('home');
	}


	function register(){
		$this->load->view('imports');
		$this->load->view('page_register');
	}

	function bookpage($id){
		$data['book'] = $this->m_data->get_by_id($id,'id_buku','buku');
		$this->loadpagecarry('bookpage',$data);
	}

	function keranjang(){
			$this->loadpage('keranjang');
	}

	function akun(){
		$data['pengguna'] = $this->m_data->get_pengguna()->result();
		$this->loadpagecarry('akun',$data);
	}

	function checkout(){
		$this->loadpage('page_checkout');
	}

	function wishlist(){
		$data['buku'] = $this->m_data->get_buku()->result();
		$this->loadpagecarry('wishlist',$data);
	}


	function search(){
		$query = $this->input->post('search-bar');
		$data['buku'] = $this->m_data->get_by_id($query,'nama','buku');
		$this->load->view('imports');
		$this->load->view('header');
		$this->load->view('search',$data);
		$this->load->view('footer');
	}

	function promo(){
		$this->loadpage('promo');
	}

	function flash(){
		$this->loadpage('flash_sale');
	}


	function register_user(){
		$data = array(
			'email' => $this->input->post('email'),
			'pass' => $this->input->post('password'),
			'nama' => $this->input->post('name'),
			'alamat' => $this->input->post('alamat')
			);
		$this->m_data->register_user($data,'pengguna');
		redirect(base_url());
	}

	function login(){

		$where = array(
			'email' => $this->input->post('email'),
			'pass' => $this->input->post('password')
		);
		$query = $this->m_data->get_by('pengguna',$where);

		if($query > 0){
			$data_session = array(
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


}
?>
<!--
$data_session = array(
	'nama' => $row->nama,
	'pass' => $row->pass,
	'alamat' => $row->alamat,
	'email' => $email,
	'gender'=>$row->gender,
	'birthdate'=>$row->birthdate,
	'telp'=>$row->telp,
	'job'=>$row->job,
	'hobi'=>$row->hobi,
	'favbook'=>$row->favbook,
	'status' => "login"
	); -->
