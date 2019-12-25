<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageGuru extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_ManageGuru');
        $this->load->library('form_validation');
        $this->load->model('M_ManageJurusan');
        $this->load->model('M_ManageMapel');
    }
    public function index()
    {
        $data['guru'] = $this->M_ManageGuru->get();
        $this->load->view('BackEnd/Master/ManageGuru', $data);
        
    }
   
    public function delete($id)
    {
        $this->M_ManageGuru->hapus($id);
        $this->session->set_flashdata('Data', 'Dihapus');
         redirect('ManageGuru');
    }
    public function TambahData()
    {
        
        $data['jurusan'] = $this->M_ManageJurusan->get();
        $data['mapel'] = $this->M_ManageMapel->get();
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kode_mapel', 'Kode Mapel', 'required');
        $this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'required');
       if( $this->form_validation->run() == FALSE){
           $this->load->view('BackEnd/FormTambah/TambahManageGuru', $data);
        }else{
            $this->M_ManageGuru->tambah();
             $this->session->set_flashdata('Data', 'Ditambahkan');
             redirect('ManageGuru');
        }
    }
    

    public function UbahData($id)
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kode_mapel', 'Kode Mapel', 'required');
        $this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'required');
        $data['jurusan'] = $this->M_ManageJurusan->get();
        $data['mapel'] = $this->M_ManageMapel->get();
        $data['guru'] = $this->M_ManageGuru->getbyid($id);;
       if( $this->form_validation->run() == FALSE){
           $this->load->view('BackEnd/FormUbah/F_UbahGuru', $data);
        }else{
            $this->M_ManageGuru->Ubah();
             $this->session->set_flashdata('Data', 'DiUbah');
             redirect('ManageGuru');
        }
    }
    
}