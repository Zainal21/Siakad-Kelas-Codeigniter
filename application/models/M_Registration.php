<?php
defined('BASEPATH') OR exit('dilarang mengakses file ini');

class M_Registration extends CI_Model {
    public function register()
    {
      $data = [
        'username' => $this->input->post('username'),
        'password' =>password_hash( $this->input->post('password'), PASSWORD_DEFAULT),
        'name' => $this->input->post('nama'),
        'role' => $this->input->post('role')
      ];
      $this->db->insert('user', $data);
    }
}