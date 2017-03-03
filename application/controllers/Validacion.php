<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Validacion extends CI_Controller {
   
    public function __construct(){
        parent::__construct();
        $this->load->library(array('myencryption'));
    }
    
    public function existeEmail(){
        if($this->input->is_ajax_request()){
            $this->load->model(array('usuariomodelo'));
            $correo = $this->input->post('email_user');
            $status = $this->usuariomodelo->existeCorreo($this->myencryption->encode($correo));
            if($status) echo "taken";
            else echo "available";
        }else{
            redirect(base_url(), 'refresh');
        }
    }
}