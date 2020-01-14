<?php 

class MY_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

    }
    public function pageRender($data= [])
    {
        $this->var['konten'] = 'BackEnd/Master';
        $this->load->view($this->var, $data);
    }

}




?>