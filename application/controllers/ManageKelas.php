<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageKelas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_ManageKelas');
        $this->load->library('form_validation');
        $this->load->model('M_ManageJurusan');
    }
    public function index()
    {
        $data['kelas'] = $this->M_ManageKelas->get();
        $this->load->view('BackEnd/Master/ManageKelas', $data);
    }
    public function Tambah()
    {
        
        $data['jurusan'] = $this->M_ManageJurusan->get();
        $this->form_validation->set_rules('kode_kelas', 'kode mapel', 'required');
        $this->form_validation->set_rules('nama_kelas', 'nama_kelas', 'required');
       if( $this->form_validation->run() == FALSE){
           $this->load->view('BackEnd/FormTambah/TambahManageKelas', $data);
        }else{
            $this->M_ManageKelas->tambah();
             $this->session->set_flashdata('Data', 'Ditambahkan');
             redirect('ManageKelas');
        }
    }
     public function Ubah($id)
    {
        
        
        $this->form_validation->set_rules('kode_kelas', 'kode mapel', 'required');
        $this->form_validation->set_rules('nama_kelas', 'nama_kelas', 'required');
        $data['kelas'] = $this->M_ManageKelas->getbyid($id);
        $data['jurusan'] = $this->M_ManageJurusan->get();
       if( $this->form_validation->run() == FALSE){
           $this->load->view('BackEnd/FormUbah/F_UbahManageKelas', $data);
        }else{
            $this->M_ManageKelas->UbahData();
             $this->session->set_flashdata('Data', 'DiUbah');
             redirect('ManageKelas');
        }
    }
    public function Hapus($id)
    {
         $this->M_ManageKelas->delete($id);
             $this->session->set_flashdata('Data', 'Di Hapus');
             redirect('ManageKelas');
    }
   
    
    
}