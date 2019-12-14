<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_model extends CI_Model{
	private $_table = "laporan";
	//Membuat model untuk mengambil database dari tabel laporan 
    public function tambah($data,$table){    
        return $this->db->insert($table, $data);
    }
    public function update($where,$data,$table){  
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function hapus(){    
        $id = $_GET["hapus_id"];
        $this->db->delete('laporan', array('ID' => $id));
        echo "<script>alert('Data Berhasil dihapus')</script>";
        echo "<script>location='http://localhost/IF3111-1920'</script>"; 
    }
}
?>