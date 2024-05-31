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

}
