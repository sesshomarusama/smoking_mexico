<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Validacion extends CI_Controller {
   
    public function __construct(){
        parent::__construct();
    }
    
    public function existeEmail(){
        if($this->input->is_ajax_request()){
            $this->load->model('usuario');
            $correo = $this->input->post('email');
            $status = $this->usuario->existeCorreo($correo);
            echo $status;
        }else{
            redirect(base_url(), 'refresh');
        }
    }
    
    public function prueba($email) {
        $this->load->model('usuario');
        #$correo = $this->input->post($email);
        if($this->usuario->existeCorreo($email)) echo TRUE;
        else echo FALSE;
    }

}