<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function get_user($username)
	{
        return $this->db->select('*')->from('tb_pegawai')->where('username', $username)->get();
	}

	public function get_pelanggan($username)
	{
        return $this->db->select('*')->from('tb_pelanggan')->where('username', $username)->get();
	}
}
