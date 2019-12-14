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
		date_default_timezone_set('Asia/jakarta'); //Menambah zona waktu asia jakarta
		$data['title']='Buat Laporan';
		$nama	= $this->input->post('author');
		$isi	= $this->input->post('isi');
		$aspek	= $this->input->post('aspek');
		$waktu	= date('Y-m-d H:i:s'); //Format penulisan waktu sesuai database
		$samaran = "Anonymous";

		$config['upload_path']          = 'upload/file/';
		$config['allowed_types']        = 'doc|docx|xls|xlsx|ppt|pptx|pdf';
		$config['max_size']             =  2048;

		$this->load->library('upload', $config);

		if ($nama == NULL) { //Ketika pelapor tidak memasukkan nama
			$nama = $samaran;
		}

		//Ketika lampiran di upload
		if (! $_FILES['lampiran']['error'] <> 4) {
			$uploadData = $this->upload->data();
			$data = array(
				'author' 	=> $nama,
				'isi' 		=> $isi,
				'kategori' 	=> $aspek,
				'lampiran' 	=> $uploadData['file_name'],
				'waktu' 	=> $waktu
			);
			$this->Input_model->tambah($data,'laporan');
			redirect('home/index');
		} else { //Ketika eror ketika upload file
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('templates/header',$data);
			$this->load->view('home/form', $error);
			$this->load->view('templates/footer'); 
		} 
	}
	public function update(){
		
	}
}