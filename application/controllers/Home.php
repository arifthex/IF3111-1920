<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//Model di panggil di awal sebelum masuk ke fungsi
		$this->load->model('Lapor_model');
	}
	//Membuat controller Untuk Fitur beranda/Home
	public function index() {
		$data['title']='SIMPLE LAPOR!';
		$data['laporan'] = $this->Lapor_model->getLaporan();

		function readmore($string) {
			$more = substr($string, 0,10);
			$karakter = strlen($string);
			if ($karakter < 301) {
				echo "$more ...[Read More]";
			} else {
				echo "$string";
			}
		}

		$this->load->view('templates/header',$data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');  
	}
	//Membuat controller untuk Fitur Input Laporan
	public function form() {
		$data['title']='Buat Laporan';
    
	    //Memuat view
	    $this->load->view('templates/header',$data);
	    $this->load->view('home/form', array('error' => ' ' ));
	    }
	//Membuat controller untuk Fitur Detail laporan
	public function detail() {
		$data['title']='Detail Laporan';
		$data['detail'] = $this->Lapor_model->detail();

		$this->load->view('templates/header',$data);
		$this->load->view('home/detail', $data);
	}
	public function ubah() {
		$data['title']='Detail Laporan';
		$data['ubah'] = $this->Lapor_model->ubah();

		$this->load->view('templates/header',$data);
		$this->load->view('home/ubah', $data);
	}
}
