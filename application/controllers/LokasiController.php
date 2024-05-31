<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LokasiController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('LokasiModel');
		$this->load->model($model);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data = array(
			'lokasi' => $this->LokasiModel->lihat_Lokasi(),
			'title' => 'Lokasi'
		);
		$this->load->view('templates/header',$data);
		$this->load->view('backend/lokasi/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
        $data = array(
			'title' => 'Tambah Lokasi'
        );
    
    if ($this->input->post('simpan')) {
        $latlng = $this->input->post('latlng');
        $namlok = $this->input->post('namlok');
        $ket = $this->input->post('ket');

		$gambar	= $_FILES['gambar']['name'];
		$dir = "assets/images/";
		$dirfile = $_FILES['gambar']['tmp_name'];
		move_uploaded_file($dirfile, $dir.$gambar);
            
 
        $data = array(
            'lat_lng' => $latlng,
            'nama_lokasi' => $namlok,
            'keterangan' => $ket,
            'gambar' => $gambar
        );
            

        $this->load->model('LokasiModel');
        $result = $this->LokasiModel->tambah_lokasi($data);
            
        if ($result) {
            $this->session->set_flashdata('alert', 'tambah_lokasi');
            redirect('lokasi');
        } else {
            redirect('lokasi');
        }
    } else {
        $this->load->view('templates/header',$data);
        $this->load->view('backend/lokasi/tambah_lokasi');
        $this->load->view('templates/footer');
    }
}

    public function edit(){
        $data = array(
            'title' => 'Edit Lokasi'
        );


        $id_lokasi = $this->input->get('id_lokasi');

        if (!$id_lokasi) {
            redirect('lokasi');
        }


        if ($this->input->post('simpan')) {
            $latlng = $this->input->post('latlng');
            $namlok = $this->input->post('namlok');
            $ket = $this->input->post('ket');

            $gambar = '';
        if (!empty($_FILES['gambar']['name'])) {
            $lokasi = $this->LokasiModel->get_lokasi_by_id($id_lokasi);
            $old_image = $lokasi['gambar'];
            if (!empty($old_image)) {
                $image_path = FCPATH . 'assets/images/' . $old_image;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $gambar	= $_FILES['gambar']['name'];
            $dir = "assets/images/";
            $dirfile = $_FILES['gambar']['tmp_name'];
            move_uploaded_file($dirfile, $dir.$gambar);
        }

            $data = array(
                'lat_lng' => $latlng,
                'nama_lokasi' => $namlok,
                'keterangan' => $ket,
                'gambar' => $gambar
            );
            
            $this->load->model('LokasiModel');
            $result = $this->LokasiModel->edit_lokasi($id_lokasi, $data);

            if ($result) {
                $this->session->set_flashdata('alert', 'edit_lokasi');
                redirect('lokasi');
            } else {
                redirect('lokasi');
            }
        } else {
            $this->load->model('LokasiModel');
            $lokasi = $this->LokasiModel->get_lokasi_by_id($id_lokasi);

            if (!$lokasi) {
                redirect('lokasi');
            }

            $data['lokasi'] = $lokasi;
            $this->load->view('templates/header',$data);
            $this->load->view('backend/lokasi/edit_lokasi', $data);
            $this->load->view('templates/footer');
        }
    }

    public function hapus($id){
        $hapus = $this->LokasiModel->hapus_lokasi($id);
        if ($hapus > 0){
            $this->session->set_flashdata('alert', 'hapus_lokasi');
            redirect('lokasi');
        }else{
            redirect('lokasi');
        }
    }
}
