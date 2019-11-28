<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_model extends CI_Model{
	//Membuat model untuk mengambil database dari tabel laporan 
    public function insert(){    
        $data = $this->db->get('laporan');
        return $data->result_array();
    }
}
?>