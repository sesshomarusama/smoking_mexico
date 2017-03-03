<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model(array('usuariomodelo'));
        $this->load->library(array('myencryption'));
    }
    
    public function login(){
        if($this->input->is_ajax_request()){
            $correo = $this->input->post("email_user");
            $pass = $this->input->post("password_user");
     
            $existe = $this->usuariomodelo->existeUsuario($this->myencryption->encode($correo), $this->myencryption->encode($pass));
            if($existe == 2) $this->datosSesion($this->myencryption->encode($correo));
            
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
    
    public function prueba(){
        $email = "al221411717@gmail.com";
        $pass = "12345678";
        
        echo $this->usuariomodelo->existeUsuario($this->myencryption->encode($email), $this->myencryption->encode($pass));
    }
}