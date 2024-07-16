<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_marker(){
		$this->db->select('*');
		$this->db->from('wistra_lokasi');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function cari_wisata($keyword) {
		$this->db->like('kategori', $keyword);
		$this->db->or_like('nama_lokasi', $keyword);
        $query = $this->db->get('wistra_lokasi');
        return $query->result();
    }

}
