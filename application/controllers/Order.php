<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

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
    $data['title']		= 'Data Order';
		$data['order']		= $this->M_order->get_data()->result_array();
		$this->load->view('order/data', $data);
	}

	public function riwayat()
	{
    $data['title']		= 'Riwayat Order';
		$data['order']		= $this->M_order->get_data_riwayat()->result_array();
		$this->load->view('order/data_riwayat', $data);
	}

	public function tambah()
	{
		$this->validation();
		if (!$this->form_validation->run()) {
			$data['title']		= 'Data Order';
			$data['produk']		= $this->M_produk->get_data()->result_array();
			$data['pelanggan']		= $this->M_pelanggan->get_data()->result_array();
			$this->load->view('order/tambah', $data);
		} else {
			$data		= $this->input->post(null, true);
			$produk = $this->M_produk->get_by_id($data['id_produk']);
			$data_user	= [
				'tgl_order'			=> $data['tgl_order'],
				'id_pelanggan'			=> $data['id_pelanggan'],
				'id_produk'			=> $data['id_produk'],
				'jumlah'			=> $data['jumlah'],
				'harga'			=> $data['jumlah'] * $produk['harga_produk'],
				'catatan'			=> $data['catatan'],
				'status_order'			=> 0,
				'created_at' => date('Y-m-d H:i:s')
			];
			if ($this->M_order->insert($data_user)) {
				$this->session->set_flashdata('msg', 'error');
				redirect('tambah-order');
			} else {
				$this->session->set_flashdata('msg', 'success');
				redirect('order');
			}
		}
	}

	public function edit($id_order)
	{
		$this->validation();
		if (!$this->form_validation->run()) {
			$data['title']		= 'Data Order';
			$data['order']	= $this->M_order->get_by_id($id_order);
			$data['produk']		= $this->M_produk->get_data()->result_array();
			$data['pelanggan']		= $this->M_pelanggan->get_data()->result_array();
			$this->load->view('order/edit', $data);
		} else {
			$data		= $this->input->post(null, true);
			$produk = $this->M_produk->get_by_id($data['id_produk']);
			$data_user	= [
				'id_order'		=> $id_order,
				'tgl_order'			=> $data['tgl_order'],
				'id_pelanggan'			=> $data['id_pelanggan'],
				'id_produk'			=> $data['id_produk'],
				'jumlah'			=> $data['jumlah'],
				'harga'			=> $data['jumlah'] * $produk['harga_produk'],
				'catatan'			=> $data['catatan']
			];
			
			if ($this->M_order->update($data_user)) {
				$this->session->set_flashdata('msg', 'error');
				redirect('edit-order/'.$id_order);
			} else {
				$this->session->set_flashdata('msg', 'edit');
				redirect('order');
			}
		}
	}

	private function validation()
	{
		$this->form_validation->set_rules('tgl_order', 'Tgl Order', 'required|trim');
		$this->form_validation->set_rules('id_pelanggan', 'Pelanggan', 'required|trim');
		$this->form_validation->set_rules('id_produk', 'Produk', 'required|trim');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim');
		$this->form_validation->set_rules('catatan', 'Catatan', 'required|trim');
		
	} 

	private function add_detail_order($id_order)
	{
		
		$this->db->insert('tb_keuangan', ['id_order' => $id_order]);
		$this->db->insert('tb_purchase', ['id_order' => $id_order]);
		$this->db->insert('tb_cutting', ['id_order' => $id_order]);
		$this->db->insert('tb_bordir', ['id_order' => $id_order]);
		$this->db->insert('tb_jahit', ['id_order' => $id_order]);
		$this->db->insert('tb_qc', ['id_order' => $id_order]);
		$this->db->insert('tb_pengiriman', ['id_order' => $id_order]);

		return true;
	}

	public function hapus($id_order)
	{
		$this->M_order->delete($id_order);
		$this->session->set_flashdata('msg', 'hapus');
		redirect('order');
	}

	public function update_status($id_order, $status)
	{
		$data = [
			'status_order'			=> $status,
		];
		$this->db->where('id_order', $id_order);
		$this->db->update('tb_order', $data);
		$this->session->set_flashdata('msg', 'confirm');
		redirect('order');
	}

	public function detail($id_order)
	{
    $data['title']		= 'Data Order';
		$data['order']		= $this->M_order->get_by_id($id_order);
		$this->load->view('order/detail', $data);
	}

	private function upload_file($file)
	{
		$config['upload_path'] = './assets/upload/'.$file;
		$config['allowed_types'] = 'jpg|png|jpeg|pdf|docx|xlsx|doc|xls';
		$config['max_size'] = 10000;
		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		if(! $this->upload->do_upload($file))
		{
			return '';
		}

		return $this->upload->data('file_name');
	}

	public function download_file($file)
	{
		$file = explode("7C", $file);
		force_download('/assets/upload/file_keuangan/5533-15688-1-PB.pdf', NULL);
	}
}
