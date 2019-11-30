<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//Model di panggil di awal sebelum masuk ke fungsi
		$this->load->model('Input_model');
	}
	//Membuat controller Untuk Tambah data
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
		//Ketika lampiran di upload
		if (! $_FILES['lampiran']['error'] <> 4) {
			$uploadData = $this->upload->data();
			$data = array(
				'author' 	=> $nama,
				'isi' 		=> $isi,
				'judul' 	=> $judul,
				'kategori' 	=> $aspek,
				'lampiran' 	=> $uploadData['file_name'] 
			);
			$this->Input_model->tambah($data,'laporan');
			redirect('home/index');
		} elseif (!$this->upload->do_upload('lampiran')) { //Ketika eror ketika upload file
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('templates/header',$data);
			$this->load->view('home/form', $error);
			$this->load->view('templates/footer'); 
		} else { //Ketika tidak ada upload file
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
	}


}