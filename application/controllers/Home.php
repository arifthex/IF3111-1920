<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Lapor_model');
	}

	public function index() {
		$data['title']='SIMPLE LAPOR!';
		$data['laporan'] = $this->Lapor_model->getLaporan();

		$this->load->view('templates/header',$data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');  
	}
	public function form() {
		$data['title']='Buat Laporan';
		$data['laporan'] = $this->Lapor_model->getLaporan();

		$this->load->view('templates/header',$data);
		$this->load->view('home/form', $data);
		$this->load->view('templates/footer'); 
	}
}
