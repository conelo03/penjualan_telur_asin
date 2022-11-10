<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') != TRUE)
		{
			set_pesan('Silahkan login terlebih dahulu', false);
			redirect('');
		}
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library('upload');
	}

	public function index()
	{
    $data['title']		= 'Data Produk';
		$data['produk']		= $this->M_produk->get_data()->result_array();
		$this->load->view('produk/data', $data);
	}

	public function tambah()
	{
		$this->validation();
		if (!$this->form_validation->run()) {
			$data['title']		= 'Data Produk';
			$this->load->view('produk/tambah', $data);
		} else {
			$data		= $this->input->post(null, true);
			$file = $this->upload_file();
			$data_user	= [
				'nama_produk'			=> $data['nama_produk'],
				'stok_produk'			=> $data['stok_produk'],
				'harga_produk'			=> $data['harga_produk'],
				'deskripsi_produk'			=> nl2br($data['deskripsi_produk']),
				'foto_produk'			=> $file,
			];

			if ($this->M_produk->insert($data_user)) {
				$this->session->set_flashdata('msg', 'error');
				redirect('tambah-produk');
			} else {
				$this->session->set_flashdata('msg', 'success');
				redirect('produk');
			}
		}
	}

	public function edit($id_produk)
	{
		$this->validation();
		if (!$this->form_validation->run()) {
			$data['title']		= 'Data Produk';
			$data['produk']	= $this->M_produk->get_by_id($id_produk);
			$this->load->view('produk/edit', $data);
		} else {
			$data		= $this->input->post(null, true);

			if (empty($_FILES['foto_produk']['name'][0]) || $_FILES['foto_produk']['name'][0] == '') {
				$file = $data['foto_produk_old'];
			}else{
				$file = $this->upload_file();
			}
			$data_user	= [
				'id_produk'		=> $id_produk,
				'nama_produk'			=> $data['nama_produk'],
				'stok_produk'			=> $data['stok_produk'],
				'harga_produk'			=> $data['harga_produk'],
				'deskripsi_produk'			=> nl2br($data['deskripsi_produk']),
				'foto_produk'			=> $file,
			];
			
			if ($this->M_produk->update($data_user)) {
				$this->session->set_flashdata('msg', 'error');
				redirect('edit-produk/'.$id_produk);
			} else {
				$this->session->set_flashdata('msg', 'edit');
				redirect('produk');
			}
		}
	}

	private function validation()
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim');
		$this->form_validation->set_rules('stok_produk', 'Stok Produk', 'required|trim');
		$this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk', 'required|trim');
		$this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required|trim');
		
	}

	public function hapus($id_produk)
	{
		$this->M_produk->delete($id_produk);
		$this->session->set_flashdata('msg', 'hapus');
		redirect('produk');
	}

	private function upload_file()
	{
		$data = '';
   
		$count = count($_FILES['foto_produk']['name']);

		for($i=0;$i<$count;$i++){

	        if(!empty($_FILES['foto_produk']['name'][$i])){
	    
						$_FILES['file']['name'] = $_FILES['foto_produk']['name'][$i];
						$_FILES['file']['type'] = $_FILES['foto_produk']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['foto_produk']['tmp_name'][$i];
						$_FILES['file']['error'] = $_FILES['foto_produk']['error'][$i];
						$_FILES['file']['size'] = $_FILES['foto_produk']['size'][$i];

						$config['upload_path'] = './assets/upload/foto_produk'; 
						$config['allowed_types'] = 'jpg|jpeg|png';
						$config['max_size'] = 50000;
						$config['file_name'] = $_FILES['foto_produk']['name'][$i];

						$this->upload->initialize($config);
						$this->load->library('upload',$config); 
	    
		        if($this->upload->do_upload('file')){
		            $uploadData = $this->upload->data();
		            $filename = $uploadData['file_name'];
		            $data .= $filename.'||';
		        }
	        }
	   
	    }

	    return substr($data, 0, -2);
	}
}
