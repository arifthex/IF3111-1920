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

		function readmore($string,$karakter){
			$more 	= substr($string, 0, 150);
			if ($karakter < 151) {
				echo "$string";
			}
			else {
				echo "$more...<b>[Read More]</b>";
			}
		}
		function expand($string){
			echo "$string";
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
	    $this->load->view('templates/footer'); 
	    }
	//Membuat controller untuk Fitur Detail laporan

}
