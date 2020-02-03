<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Registration');
    }


    public function Registration()
    {
        $data['role'] = ['Admin', 'Guru', 'Siswa'];
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('Registration', $data);
        }else{
            $this->M_Registration->register();
            $this->session->set_flashdata('Success', 'Berhasil Terdaftar');
            redirect('Auth');
        }
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
       if( $this->form_validation->run() == FALSE){
           $this->load->view('Login');
        } else{
           $this->login();
        
                   
        }
    }

    private function login()
    {
        // buat variable untuk cek username dan password login
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $Auth_user = $this->db->get_where('user', ['username' => $username])->row_array();
        if($username){
                if(password_verify($password, $Auth_user['password'])){
                $ses = [
                    'name' => $Auth_user['name'],
                    'role' => $Auth_user['role']
                ];
            //cek rolenya dan siapkan data dalam session
                    if($Auth_user['role'] == 'Admin'){
                    $this->session->set_userdata($ses);
                    $this->session->set_flashdata('Success', 'Anda Berhasil Login, Mohon Tunggu Sebentar');
                    redirect('Dashboard');
                    }elseif($Auth_user['role'] == 'Siswa'){
                        $ses = [
                        'name' => $Auth_user['name'],
                        'role' => $Auth_user['role']
                    ];
                    
                    $this->session->set_userdata($ses);
                        redirect('MenuSiswa');
                    }else{
                           $ses = [
                        'name' => $Auth_user['name'],
                        'role' => $Auth_user['role']
                    ];
                    $this->session->set_userdata($ses);
                        redirect('MenuGuru');
                    }
                }
                else{
                        $this->session->set_flashdata('Success', 'Login Anda gagal, Mohon coba kembali');
                        redirect('Auth');
                    }
            }
    }
    public function logout()
    {
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('Success', 'Anda Berhasil Logout');
        redirect('Auth');

    }
    
}