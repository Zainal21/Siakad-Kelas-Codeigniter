<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index()
    {
        $ses['user']= $this->db->get_where('user',  ['name' => $this->session->userdata('name')]);
        $this->load->view('Dashboard', $ses);
    }
    
}