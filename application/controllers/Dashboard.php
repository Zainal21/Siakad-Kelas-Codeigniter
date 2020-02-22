
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
 }
}