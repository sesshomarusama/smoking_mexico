<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $datos_header['titulo'] = "Inicio";
        $this->union('webapp/inicio', $datos_header);
    }

    public function login(){
        $datos_header['titulo'] = "Iniciar Sesión";
        $this->union('cuentas/login', $datos_header);
    }

    public function registrar(){
        $datos_header['titulo'] = "Crear Cuenta";
        $datos_header['css'] = array('validaciones/screen.css', 'jquery-confirm.min.css');
        $datos_footer['js'] = array('validaciones/jquery.validate.min.js', 'validaciones/valida_registro.js', 'jquery-confirm.min.js');
        $this->union('cuentas/registrar', $datos_header, $datos_header, $datos_footer);
    }
    
    public function condiciones(){
        $datos_header['titulo'] = "Términos y Condiciones";
        $this->union('webapp/condiciones', $datos_header);
    }
    
    public function precios(){
        $datos_header['titulo'] = "Planes y Precios";
        $this->union('webapp/precios', $datos_header);
    }
    
    public function pagina404(){
        $this->union('webapp/404');
    }
    
    public function detalle_personal(){
        $this->union('webapp/detalle_personal');
    }
    
    public function catchData($correo, $nombres, $apat, $pass) {
        # metodo para cachar los datos por url, los flasheamos y redirecionamos para evitar que estos se muestren en la url
        $datos = array('correo' => $correo, 'nombres' => $nombres, 'apellidos' => $apat, 'pass' => $pass);
        $this->session->set_flashdata('registered', $datos);
        redirect(base_url("confirmar-cuenta"));
    }
    
    public function acepto() {
        $this->session->keep_flashdata('registered');
        $message = $this->session->flashdata('registered');
        
        $datos_header['titulo'] = "Confirmar Registro";
        $datos_header['css'] = array('jquery-confirm.min.css');
        $datos_content['userdata'] = array('correo' => $message['correo'], 'nombres' => $message['nombres'],
                                           'apellidos' => $message['apellidos'], 'pass' => $message['pass']);
        $datos_footer['js'] = array('jquery-confirm.min.js' ,'guarda_registro.js');
        $this->union('cuentas/acepto', $datos_header, $datos_content, $datos_footer);
    }
    
    private function union($vista, $data_header = null, $data_content = null, $data_footer = null){
        $this->load->view('header', $data_header);
        $this->load->view($vista, $data_content);
        $this->load->view('footer', $data_footer);
    }
    
}
