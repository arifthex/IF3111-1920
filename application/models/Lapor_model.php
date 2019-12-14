<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor_model extends CI_Model{
	//Membuat model untuk mengambil database dari tabel laporan 
	public function getLaporan(){    
		$this->db->order_by('waktu', 'DESC');
		$data = $this->db->get('laporan');
		return $data->result_array();
	}
	public function search(){  
		$key = $this->input->post('keyword');

		$this->db->like('isi',$key);
		$this->db->or_like('kategori',$key);
		$this->db->order_by('waktu', 'DESC');
		$data = $this->db->get('laporan');
		return $data->result_array();  
	}
	public function detail(){  
		$id = $_GET["detail"];
		$data = $this->db->get_where('laporan', array('ID' => $id));
		return $data->result_array();  
	}
	public function ubah(){  
		$id = $_GET["ubah_id"];
		$data = $this->db->get_where('laporan', array('ID' => $id));
		return $data->result_array();  
	}
}
?>