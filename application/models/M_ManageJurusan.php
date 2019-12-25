<?php
defined('BASEPATH') OR exit('dilarang mengakses file ini');

class M_ManageJurusan extends CI_Model {
    public function get()
    {
      return $this->db->get('jurusan')->result_array();
    }
      public function Tambah()
    {
      $data = [
        
        'kode_jurusan' => $this->input->post('kode_jurusan'),
        'nama_jurusan' => $this->input->post('nama_jurusan')
      ];
      $this->db->insert('jurusan', $data);
    }
}