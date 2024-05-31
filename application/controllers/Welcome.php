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
	
		$this->load->view('backend/landing_page', $data);
	}
}
