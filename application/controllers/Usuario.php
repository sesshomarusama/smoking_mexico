<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    
    public function login(){
        if($this->input->is_ajax_request()){
            #$this->load->model('usuario');
            #$this->load->library('myencryption');
            
            #$correo = $this->input->post("email_user");
            #$pass = $this->input->post("password_user");
     
            #$existe = $this->usuario->existeUsuario($correo, $this->myencryption->encode($pass));
            $existe = "si existe XD";
            header('Content-type: application/json; charset=utf-8');
            echo json_encode(array('existe' => $existe));
            exit();
        }else{
            redirect(base_url(), "refresh");
        }
    }
}