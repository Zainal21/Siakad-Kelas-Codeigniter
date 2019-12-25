<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageJurusan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('M_ManageJurusan');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['jurusan'] = $this->M_ManageJurusan->get();
        $this->load->view('BackEnd/Master/ManageJurusan', $data);
    }

        public function TambahData()
    {
        
        $this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'required');
        $this->form_validation->set_rules('nama_jurusan', 'Kode Jurusan', 'required');
       if( $this->form_validation->run() == FALSE){
           $this->load->view('BackEnd/FormTambah/TambahManageJurusan');
        }else{
            $this->M_ManageJurusan->Tambah();
             $this->session->set_flashdata('Data', 'Ditambahkan');
             redirect('ManageJurusan');
        }
    }
    public function Hapus($id)
    {
        $this->db->delete('jurusan', ['kode_jurusan' => $id]);
            $this->session->set_flashdata('Data', 'DiHapus');
             redirect('ManageJurusan');
    }
   
    
    
}