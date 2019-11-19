<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor_model extends CI_Model{

    public function getLaporan(){    
        $data = $this->db->get('laporan');
        return $data->result_array();
    }
}
?>