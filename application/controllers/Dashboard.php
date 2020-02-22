<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('name')){
            redirect('Auth');
        }


        if(!$this->session->userdata['role'] == 'Admin'){
             $this->load->view('error');
        }
        
    }
    public function index()
    {
        $ses['user']= $this->db->get_where('user',  ['name' => $this->session->userdata('name')]);
        $ses['user']= $this->db->get_where('user',  ['role' => $this->session->userdata('role')]);
         if(!$this->session->userdata['role'] == 'Admin'){
             $this->load->view('error');
         }else{
             $this->load->view('Dashboard', $ses);
         }
<<<<<<< HEAD
=======
    }
    
=======
<?php
defined('BASEPATH') OR exit('dilarang mengakses file ini');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('name')){
            redirect('Auth');
        }


        if(!$this->session->userdata['role'] == 'Admin'){
             $this->load->view('error');
        }
        
>>>>>>> a97929e791a6ae828ed899667dad6c7189cc6d71
    }
    public function index()
    {
        $ses['user']= $this->db->get_where('user',  ['name' => $this->session->userdata('name')]);
        $ses['user']= $this->db->get_where('user',  ['role' => $this->session->userdata('role')]);
         if(!$this->session->userdata['role'] == 'Admin'){
             $this->load->view('error');
         }else{
             $this->load->view('Dashboard', $ses);
         }

   
    
>>>>>>> d218089b615ef190f2762115b1e7cb640c306826
}