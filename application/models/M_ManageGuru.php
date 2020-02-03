<?php
defined('BASEPATH') OR exit('dilarang mengakses file ini');

class M_ManageGuru extends CI_Model {
    public function get()
    {
      $this->db->select('*');
      $this->db->from('guru G');
      $this->db->join('mapel M', 'M.kode_mapel=G.kode_mapel', 'left');
      $this->db->join('jurusan J', 'J.kode_jurusan=G.kode_jurusan', 'left');
      $query = $this->db->get();
      return $query->result_array();
    }
   
    public function hapus($id)
    {
            $this->db->where('nip', $id);
            $this->db->delete('guru');
    }
    public function tambah()
    {
      $data = [
        'nip' => $this->input->post('nip'),
        'nama' => $this->input->post('nama'),
        'kode_mapel' => $this->input->post('kode_mapel'),
        'kode_jurusan' => $this->input->post('kode_jurusan')
      ];
      return $this->db->insert('guru', $data);
    }
    public function getbyid($id)
    {
     return $this->db->get_where('guru', ['nip' => $id])->row_array();
    }
    public function Ubah()
    {
      $data = [
        'nama' => $this->input->post('nama'),
        'kode_mapel' => $this->input->post('kode_mapel'),
        'kode_jurusan' => $this->input->post('kode_jurusan')
      ];
      $this->db->where('nip' , $this->input->post('nip'));
      $this->db->update('guru', $data);
    }

    
}