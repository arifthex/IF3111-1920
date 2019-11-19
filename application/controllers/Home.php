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

		$this->load->view('template/header', $data);
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}
}
