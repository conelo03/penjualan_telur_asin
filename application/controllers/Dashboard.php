<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') != TRUE)
		{
			set_pesan('Silahkan login terlebih dahulu', false);
			redirect('administrator');
		}
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		$data['title']	= 'Dashboard';
		$date = date('Y-m-d');
		$data['data_penjualan'] = $this->db->query("SELECT tb_produk.nama_produk as nama_produk, SUM(tb_order.jumlah) as jumlah_terjual from tb_order join tb_produk on tb_produk.id_produk=tb_order.id_produk group by tb_order.id_produk")->result_array();
		$data['jml_order'] = $this->db->get_where('tb_order', ['tgl_order' => $date])->num_rows();
		$data['jml_produk'] = $this->db->get('tb_produk')->num_rows();
		$data['jml_pelanggan'] = $this->db->get('tb_pelanggan')->num_rows();
		$this->load->view('dashboard', $data);
	}
}
