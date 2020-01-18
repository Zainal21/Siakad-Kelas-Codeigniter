<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageMapel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_ManageMapel');
        $this->load->library('form_validation');
        if(!$this->session->userdata('name'))
        {
            redirect('Auth');
        }
    }
    public function index()
    {
        $data['mapel'] = $this->M_ManageMapel->get();
        $this->load->view('BackEnd/Master/ManageMapel', $data);
    }

    public function delete($id)
    {
        $this->M_ManageMapel->hapus($id);
        $this->session->set_flashdata('Data', 'Dihapus');
        redirect('ManageMapel');
    }
    public function Tambah()
    {
        $this->form_validation->set_rules('kode_mapel', 'Kode Mapel', 'required');
        $this->form_validation->set_rules('nama_mapel', 'nama Mapel', 'required');
        if($this->form_validation->run()== FALSE){
            $this->load->view('BackEnd/FormTambah/TambahManageMapel');
        }else{
            $this->M_ManageMapel->Insert();
            $this->session->set_flashdata('Data', 'Ditambahkan');
            redirect('ManageMapel');
        }
        

    }
    public function Update($id)
    {
        $this->form_validation->set_rules('kode_mapel', 'Kode Mapel', 'required');
        $this->form_validation->set_rules('nama_mapel', 'nama Mapel', 'required');
        $data['mapel'] = $this->db->get_where('mapel', ['kode_mapel' => $id])->row_array();
        if($this->form_validation->run()== FALSE){
            $this->load->view('BackEnd/FormUbah/F_UbahManageMapel', $data);
        }else{
            $this->M_ManageMapel->Ubah($id);
            $this->session->set_flashdata('Data', 'Diubah');
            redirect('ManageMapel');
        }
    }
    
}