<?php
defined('BASEPATH') OR exit('dilarang mengakses file ini');

class M_ManageMapel extends CI_Model {
    public function get()
    {
      return $this->db->get('mapel')->result_array();
    }
    public function hapus($id)
    {
      $this->db->where('kode_mapel', $id);
      $this->db->delete('mapel');
    }
    public function Insert()
    {
      $data = [
        'kode_mapel' => $this->input->post('kode_mapel'),
        'nama_mapel' => $this->input->post('nama_mapel')
      ];
      $this->db->insert('mapel', $data);
    }
    public function Ubah($id)
    {
   $data = [
        'kode_mapel' => $this->input->post('kode_mapel'),
        'nama_mapel' => $this->input->post('nama_mapel')
      ];
      $this->db->where('kode_mapel', $id);
      $this->db->update('mapel', $data);
    }
}