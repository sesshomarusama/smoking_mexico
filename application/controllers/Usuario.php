<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model(array('usuariomodelo'));
    }
    
    public function login(){
        if($this->input->is_ajax_request()){
            $correo = $this->input->post("email_user");
            $pass = $this->input->post("password_user");
     
            $existe = $this->usuariomodelo->existeUsuario($correo, $pass);
            if($existe == 2) $this->datosSesion($correo);
            
            header('Content-type: application/json; charset=utf-8');
            echo json_encode(array('existe' => $existe));
            exit();
        }else{
            redirect(base_url(), "refresh");
        }
    }
    
    private function datosSesion($correo){
        $conf = $this->usuariomodelo->creaSesion($correo);
        $this->session->set_userdata($conf);  
    }
    
    public function cerrarSesion() {
        $datasession = array('id_user' => '',
                             'nombre' => '',
                             'logged_in' => '');
        $this->session->unset_userdata($datasession);
        session_destroy();
        redirect(base_url(), 'refresh');
    }
}