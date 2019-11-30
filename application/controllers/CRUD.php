<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//Model di panggil di awal sebelum masuk ke fungsi
		$this->load->model('Input_model');
	}
	//Membuat controller Untuk Tambah data
	public function create() {
		$nama	= $this->input->post('author');
		$isi	= $this->input->post('isi');
		$judul	= $this->input->post('kategori');
		$aspek	= $this->input->post('kategori');

		$config['upload_path']          = 'upload/file/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1024;
    	// $config['max_width']            = 1024;
    	// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('lampiran')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('home/form', $error);
		} else {
			$this->upload->data('file_name');
			$data = array(
				'author' => $nama,
				'isi' => $isi,
				'kategori' => $judul,
				'kategori' => $aspek
			);
			$this->Input_model->insert($data,'laporan');
			redirect('Home/index');

    	// $this->load->view('upload_success', $data); Tempat view success upload
		}
	}

	public function add2() { //FIX
		$nama	= $this->input->post('author');
		$judul	= $this->input->post('judul');
		$isi	= $this->input->post('isi');
		$aspek	= $this->input->post('aspek');
		$lampiran	= "img.doc";

		$data = array(
			'author' 	=> $nama,
			'isi' 		=> $isi,
			'kategori' 	=> $judul,
			'kategori' 	=> $aspek,
			'lampiran' 	=> $lampiran
		);
		$this->Input_model->tambah($data,'laporan');
		redirect('Home/index');
	}

	public function add() {
		$data['title']='Buat Laporan';
		$nama	= $this->input->post('author');
		$judul	= $this->input->post('judul');
		$isi	= $this->input->post('isi');
		$aspek	= $this->input->post('aspek');

		$config['upload_path']          = 'upload/file/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             =  2048;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('lampiran')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('templates/header',$data);
			$this->load->view('home/form', $error);
			$this->load->view('templates/footer'); 
		} else {
			$uploadData = $this->upload->data();
			$data = array(
				'author' 	=> $nama,
				'isi' 		=> $isi,
				'judul' 	=> $judul,
				'kategori' 	=> $aspek,
				'lampiran' => $uploadData['file_name'] 
			);
			$this->Input_model->tambah($data,'laporan');
			redirect('home/index');
		}
	}//akhir


}