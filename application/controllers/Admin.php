<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    
    public function index() {
        $this->unionAdmin('inicio');
    }
    
    public function misDatos() {
        $this->unionAdmin('perfil_user');
    }
    
    private function unionAdmin($vista, $data_header = null, $data_content = null, $data_footer = null) {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('admin/header', $data_header);
            $this->load->view('admin/' . $vista, $data_content);
            $this->load->view('admin/footer', $data_footer);
        }else{
            redirect(base_url());
        }
    }

}
