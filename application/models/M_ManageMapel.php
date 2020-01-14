<?php
defined('BASEPATH') OR exit('dilarang mengakses file ini');

class M_ManageMapel extends CI_Model {
    public function get()
    {
      return $this->db->get('mapel')->result_array();
    }
    public function hapus($id)
    {
      $this->db->where('id', $id);
      $this->db->delete('mapel');
    }
}