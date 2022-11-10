<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') != TRUE)
		{
			set_pesan('Silahkan login terlebih dahulu', false);
			redirect('administrator');
		}
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library('upload');
	}

	public function index()
	{
    $data['title']		= 'Data Pegawai';
		$data['pegawai']		= $this->M_pegawai->get_data()->result_array();
		$this->load->view('pegawai/data', $data);
	}

	public function tambah()
	{
		$this->validation();
		if (!$this->form_validation->run()) {
			$data['title']		= 'Data Pegawai';
			$this->load->view('pegawai/tambah', $data);
		} else {
			$data		= $this->input->post(null, true);
			$data_user	= [
				'nama'			=> $data['nama'],
				'username'		=> $data['username'],
				'password'		=> password_hash($data['password'], PASSWORD_DEFAULT),
				'role'			=> $data['role']
			];
			if ($this->M_pegawai->insert($data_user)) {
				$this->session->set_flashdata('msg', 'error');
				redirect('tambah-pegawai');
			} else {
				$this->session->set_flashdata('msg', 'success');
				redirect('pegawai');
			}
		}
	}

	public function edit($id_pegawai)
	{
		$p = $this->M_pegawai->get_by_id($id_pegawai);
		$this->validation($p['username']);
		if (!$this->form_validation->run()) {
			$data['title']		= 'Data Pegawai';
			$data['pegawai']	= $this->M_pegawai->get_by_id($id_pegawai);
			$this->load->view('pegawai/edit', $data);
		} else {
			$data		= $this->input->post(null, true);
			if(!empty($data['password'])){
				$data_user	= [
					'id_pegawai'		=> $id_pegawai,
					'username'		=> $data['username'],
					'password'		=> password_hash($data['password'], PASSWORD_DEFAULT),
					'role'			=> $data['role']
				];
			} else {
				$data_user	= [
					'id_pegawai'		=> $id_pegawai,
					'username'		=> $data['username'],
					'role'			=> $data['role']
				];
			}
			
			if ($this->M_pegawai->update($data_user)) {
				$this->session->set_flashdata('msg', 'error');
				redirect('edit-pegawai/'.$id_pegawai);
			} else {
				$this->session->set_flashdata('msg', 'edit');
				redirect('pegawai');
			}
		}
	}

	private function validation($username = null)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('role', 'Role', 'required|trim');
		$username		= $username;
		$username_baru 	= $this->input->post('username');
		if($username == $username_baru){
			$this->form_validation->set_rules('username', 'Username', 'required');	
		} else {
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tb_pegawai.username]', ['is_unique'	=> 'Username Sudah Ada']);
		}
		
		$this->form_validation->set_rules('password', 'Password', 'trim');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');
		
	}

	public function hapus($id_pegawai)
	{
		$this->M_pegawai->delete($id_pegawai);
		$this->session->set_flashdata('msg', 'hapus');
		redirect('pegawai');
	}
}
