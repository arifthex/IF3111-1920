<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor_model extends CI_Model{
	//Membuat model untuk mengambil database dari tabel laporan 
	public function getLaporan(){    
		$data = $this->db->get('laporan');
		return $data->result_array();
	}
	public function search(){  
		$key = $this->input->post('keyword');

		$this->db->like('judul',$key);
		$this->db->or_like('isi',$key);
		$data = $this->db->get('laporan');
		return $data->result_array();  
	}
}
?>