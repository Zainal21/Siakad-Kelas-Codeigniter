<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuSiswa extends CI_Controller {
      public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('name')){
            redirect('Auth');
        }
    }
    public function index()
    {
        $ses['user']= $this->db->get_where('user',  ['name' => $this->session->userdata('name')]);
        $this->load->view('SiswaMenu');
    }

}