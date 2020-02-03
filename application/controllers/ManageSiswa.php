<<<<<<< HEAD
<?php 
defined('BASEPATH') OR exit('dilarang mengakses file ini');
class ManageSiswa extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Siswa');
        $this->load->library('form_validation');
        
    }
    public function index(){
        $data['siswa'] = $this->M_Siswa->allsiswa();
        $this->load->view('BackEnd/Master/ManageSiswa', $data);
    }
    public function TambahSiswa()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'nis', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
       
      if($this->form_validation->run()== FALSE){
          $data['kelas'] = $this->M_Siswa->FetchData();
           $this->load->view('BackEnd/FormTambah/TambahManageSiswa', $data);
      }else{
          $this->M_Siswa->Add();
          $this->session->set_flashdata('Data', 'Berhasil Ditambahkan');
          redirect('ManageSiswa');
      }
    }
    public function delete($id)
    {
        $data = $this->M_Siswa->Delete($id);
        json_encode($data);
        $this->session->set_flashdata('Data', 'Berhasil Ditambahkan');
        redirect('ManageSiswa');
    }


}


=======
<?php 
defined('BASEPATH') OR exit('dilarang mengakses file ini');
class ManageSiswa extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Siswa');
        $this->load->library('form_validation');
        
    }
    public function index(){
        $data['siswa'] = $this->M_Siswa->allsiswa();
        $this->load->view('BackEnd/Master/ManageSiswa', $data);
    }
    public function TambahSiswa()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'nis', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
       
      if($this->form_validation->run()== FALSE){
          $data['kelas'] = $this->M_Siswa->FetchData();
           $this->load->view('BackEnd/FormTambah/TambahManageSiswa', $data);
      }else{
          $this->M_Siswa->Add();
          $this->session->set_flashdata('Data', 'Berhasil Ditambahkan');
          redirect('ManageSiswa');
      }
    }
    public function delete($id)
    {
        $data = $this->M_Siswa->Delete($id);
        json_encode($data);
        $this->session->set_flashdata('Data', 'Berhasil Ditambahkan');
        redirect('ManageSiswa');
    }


}


>>>>>>> d218089b615ef190f2762115b1e7cb640c306826
?>