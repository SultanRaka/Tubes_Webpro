<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	/** untuk load page utama */

	public function sejarah(){
		$this->load->view('header');
		$this->load->view('page_sejarah');
	}
	public function politik(){
		$this->load->view('header');
		$this->load->view('page_politik');
	}
	public function teknologi(){
		$this->load->view('header');
		$this->load->view('page_teknologi');
	}
	public function komik(){
		$this->load->view('header');
		$this->load->view('page_komik');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
	}


	function register(){
		$this->load->view('header');
		$this->load->view('page_register');
	}

	function logon(){
		$this->load->view('header');
		$this->load->view('page_login');
	}

	function keranjang(){
		$data['pengguna'] = $this->m_data->get_pengguna()->result();
		$data2['orderan'] = $this->m_data->get_order()->result();
		$this->load->view('header');
		$this->load->view('wishlistku',$data, $data2);
		$this->load->view('footer');
	}

	function akun(){
		$data['pengguna'] = $this->m_data->get_pengguna()->result();
		$this->load->view('header');
		$this->load->view('akun',$data);
		//$this->load->view('footer');
	}

	function checkout(){
		$this->load->view('header');
		$this->load->view('page_checkout');
	}

	/** untuk load page buku sejarah */

	public function heil(){

		$data['buku'] = $this->m_data->get_buku()->result();
		$this->load->view('header');
		$this->load->view('page_buku/sejarah/page_buku_sejarah_heil',$data);
	}

	public function belanda(){
		$data['buku'] = $this->m_data->get_buku()->result();
		$this->load->view('header');
		$this->load->view('page_buku/sejarah/page_buku_sejarah_belanda',$data);
	}

	public function hitler(){
		$data['buku'] = $this->m_data->get_buku()->result();
		$this->load->view('header');
		$this->load->view('page_buku/sejarah/page_buku_sejarah_hitler',$data);
	}

	/** untuk load page buku politik */

	public function pange(){
		$data['buku'] = $this->m_data->get_buku()->result();
		$this->load->view('header');
		$this->load->view('page_buku/poli/page_buku_poli_pangeran',$data);
	}

	public function mary(){
		$data['buku'] = $this->m_data->get_buku()->result();
		$this->load->view('header');
		$this->load->view('page_buku/poli/page_buku_poli_mary',$data);
	}

	public function england(){
		$data['buku'] = $this->m_data->get_buku()->result();
		$this->load->view('header');
		$this->load->view('page_buku/poli/page_buku_poli_england',$data);
	}

	/** untuk load page teknologi */

	public function c(){
		$data['buku'] = $this->m_data->get_buku()->result();
		$this->load->view('header');
		$this->load->view('page_buku/tekno/page_buku_tekno_c',$data);
	}

	public function php(){
		$data['buku'] = $this->m_data->get_buku()->result();
		$this->load->view('header');
		$this->load->view('page_buku/tekno/page_buku_tekno_php',$data);
	}

	public function python(){
		$data['buku'] = $this->m_data->get_buku()->result();
		$this->load->view('header');
		$this->load->view('page_buku/tekno/page_buku_tekno_python',$data);
	}

	/** untuk load page komik */

	public function aot(){
		$data['buku'] = $this->m_data->get_buku()->result();
		$this->load->view('header');
		$this->load->view('page_buku/komik/page_buku_komik_aot',$data);
	}

	public function naruto(){
		$data['buku'] = $this->m_data->get_buku()->result();
		$this->load->view('header');
		$this->load->view('page_buku/komik/page_buku_komik_naruto',$data);
	}

	public function spider(){
		$data['buku'] = $this->m_data->get_buku()->result();
		$this->load->view('header');
		$this->load->view('page_buku/komik/page_buku_komik_spider',$data);
	}


	/** untuk fungsi */
	function tambah_aksi(){
		$judul = $this->input->post('judul');
		$harga = $this->input->post('harga');

		$data = array(
			'judul' => $judul,
			'harga' => $harga
			);
		$this->m_data->input_data($data,'orderan');
		redirect(base_url('index.php/Welcome/keranjang'));
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'orderan');
		redirect(base_url('index.php/Welcome/keranjang'));
	}

	function wipe(){
		$this->m_data->wipe_order();
		redirect(base_url());
	}

	function register_user(){
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$alamat = $this->input->post('alamat');

		$data = array(
			'email' => $email,
			'pass' => $password,
			'nama' => $nama,
			'alamat' => $alamat
			);
		$this->m_data->register_user($data,'pengguna');
		redirect(base_url());
	}

	function login(){
		$email = $this->input->post('email');
		$pass = $this->input->post('password');


		$where = array(
			'email' => $email,
			'pass' => $pass
			);
		$cek = $this->m_data->cek_log("pengguna",$where)->num_rows();
		$query = $this->db->query("SELECT * FROM pengguna where email = '$email'");
		if($cek > 0){
			foreach ($query->result() as $row){
				$data_session = array(
					'nama' => $row->nama,
					'alamat' => $row->alamat,
					'email' => $email,
					'status' => "login"
					);
			}

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
