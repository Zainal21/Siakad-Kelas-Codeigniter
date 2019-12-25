<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Registration');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('role_id', 'Role_id', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('Registration');
        }else{
            $this->M_Registration->register();
            $this->session->set_flashdata('Success', 'Berhasil Terdaftar');
            redirect('Auth');
        }
    }
    
}