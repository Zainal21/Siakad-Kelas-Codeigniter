<?php 
defined('BASEPATH') OR exit('dilarang mengakses file ini');
class M_Siswa extends CI_Model{

 public function allsiswa(){
   $this->db->order_by('nis','ASC');
    return $this->db->from('siswa')
    ->join('kelas', 'siswa.id_kelas=kelas.kode_kelas')->get()->result_array();
    
 }

 public function store()
 {

 }



}



?>