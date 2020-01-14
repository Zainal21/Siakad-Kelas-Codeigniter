<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageMapel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_ManageMapel');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['mapel'] = $this->M_ManageMapel->get();
        $this->load->view('BackEnd/Master/ManageMapel', $data);
    }

    public function delete($id)
    {
        $this->m_ManageMapel->hapus($id);
        redirect('ManageMapel');
    }
   
    
    
}