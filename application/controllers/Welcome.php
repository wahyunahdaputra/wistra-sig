<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$model = array('WelcomeModel');
		$this->load->model($model);
	}

	public function index(){
		$data = array(
			'lihat_marker' => $this->WelcomeModel->lihat_marker(),
	);
	
		$this->load->view('t_landingpage/h_landingpage', $data);
		$this->load->view('backend/landing_page', $data);
		$this->load->view('t_landingpage/f_landingpage');
	}

	public function search() {
		if(isset($_POST['cari'])) {
			$keyword = $this->input->post('keyword');
			$cari_wisata = $this->WelcomeModel->cari_wisata($keyword);
	
			$data = array(
				'cari_wisata' => $cari_wisata,
			);
	
			$this->load->view('t_landingpage/h_landingpage', $data);
			$this->load->view('backend/landing_page', $data);
			$this->load->view('t_landingpage/f_landingpage');
		} 
	}
}
