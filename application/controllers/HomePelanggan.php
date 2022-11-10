<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		$data['title']	= 'Home';
		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->order_by('id_produk', 'DESC');
		$data['produk']		= $this->db->get()->result_array();
		$this->load->view('pelanggan-page/dashboard', $data);
	}

	public function detail_produk($id_produk)
	{
		$data['title']	= 'Home';
		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->where('id_produk', $id_produk);
		$data['produk']		= $this->db->get()->row_array();
		$this->db->select('*');
		$this->db->from('tb_order');
		$this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan=tb_order.id_pelanggan');
		$this->db->where('id_produk', $id_produk);
		$this->db->where('ulasan !=', NULL);
		$data['order']		= $this->db->get()->result_array();
		$this->load->view('pelanggan-page/detail_produk', $data);
	}

	public function registrasi()
	{
		$this->validation();
		if (!$this->form_validation->run()) {
			$data['title']		= 'Data Pelanggan';
			$this->load->view('pelanggan-page/registrasi', $data);
		} else {
			$data		= $this->input->post(null, true);
			$data_akun	= [
				'nama_pelanggan'		=> $data['nama_pelanggan'],
				'jenis_kelamin'		=> $data['jenis_kelamin'],
				'email'		=> $data['email'],
				'no_telepon'		=> $data['no_telepon'],
				'alamat'		=> $data['alamat'],
				'username'		=> $data['username'],
				'password'		=> password_hash($data['password'], PASSWORD_DEFAULT),
			];
			if ($this->M_pelanggan->insert($data_akun)) {
				$this->session->set_flashdata('msg', 'error');
				redirect('registrasi-pelanggan');
			} else {
				set_pesan('Pendaftaran Berhasil! Silahkan Login!', true);
				redirect('LoginPelanggan');
			}
		}
	}

	private function validation($username = null)
	{
		$username		= $username;
		$username_baru 	= $this->input->post('username');
		if($username == $username_baru){
			$this->form_validation->set_rules('username', 'Username', 'required');	
		} else {
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tb_pelanggan.username]', ['is_unique'	=> 'Username Sudah Ada']);
		}
		$this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required|trim');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[tb_pelanggan.email]', ['is_unique'	=> 'Email Sudah Ada']);
		$this->form_validation->set_rules('no_telepon', 'No Telepon', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'trim');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');
		
	}
}
