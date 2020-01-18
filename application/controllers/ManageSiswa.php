<?php 
defined('BASEPATH') OR exit('dilarang mengakses file ini');
class ManageSiswa extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Siswa');
    }
    public function index(){
        $data['siswa'] = $this->M_Siswa->allsiswa();
        $this->load->view('BackEnd/Master/ManageSiswa', $data);
    }


}


?>