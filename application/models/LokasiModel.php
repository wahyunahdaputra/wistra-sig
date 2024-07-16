<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LokasiModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_lokasi(){
		$this->db->select('*');
		$this->db->from('wistra_lokasi');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function lihat_Lokasi_paginasi($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        $query = $this->db->get('wistra_lokasi');
        return $query->result_array();
    }

    public function hitung_total_Lokasi()
    {
        return $this->db->count_all('wistra_lokasi');
    }

	public function tambah_lokasi($data) {
		$this->db->insert('wistra_lokasi', $data);
		return $this->db->affected_rows() > 0;
	}
	

	public function edit_lokasi($id, $data) {
		$this->db->where('id_lokasi', $id);
		$this->db->update('wistra_lokasi', $data);
		return $this->db->affected_rows();
	}
	
	public function get_lokasi_by_id($id) {
		$query = $this->db->get_where('wistra_lokasi', array('id_lokasi' => $id));
		return $query->row_array();
	}
	
	public function hapus_lokasi($id){
		$this->db->where('id_lokasi', $id);
		$this->db->delete('wistra_lokasi');
		return $this->db->affected_rows();
	}
}
