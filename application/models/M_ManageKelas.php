<?php
defined('BASEPATH') OR exit('dilarang mengakses file ini');

class M_ManageKelas extends CI_Model {
    public function FetchData()
    {
      return $this->db->from('kelas') 
      ->join('jurusan', 'kelas.kode_jurusan=jurusan.kode_jurusan')->get()->result_array();
    }
    public function getbyid($id)
    {
      return $this->db->get_where('kelas', ['kode_kelas' => $id])->row_array();
    }
    public function Tambah()
    {
      $data = [
        
        'kode_kelas' => $this->input->post('kode_kelas'),
        'nama_kelas' => $this->input->post('nama_kelas'),
        'kode_jurusan' => $this->input->post('kode_jurusan')
      ];
      $this->db->insert('kelas', $data);
    }
      public function UbahData()
    {
      $data = [
        
        
        'nama_kelas' => $this->input->post('nama_kelas'),
        'kode_jurusan' => $this->input->post('kode_jurusan')
      ];
      $this->db->where('kode_kelas', $this->input->post('kode_kelas'));
      $this->db->update('kelas', $data);
    }
    public function delete($id)
    {
      $this->db->delete('kelas', ['kode_kelas' => $id]);
    }
}