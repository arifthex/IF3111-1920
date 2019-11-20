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

		$this->load->view('templates/header');
		$this->load->view('home/index', $data);
		//$this->load->view('templates/footer'); //hdupkan untuk memanggil template footer
	}
}
