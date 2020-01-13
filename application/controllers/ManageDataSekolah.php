<?php
defined('BASEPATH') OR exit('Dilarang mengakses file ini');
class ManageDataSekolah extends CI_Controller{
    public function index(){
        $this->load->view('BackEnd/Master/ManageDataSek');
    }
    public function Tambah()
    {
        $this->load->view('BackEnd/Form/TambahManageDataSekolah');
    }


}



