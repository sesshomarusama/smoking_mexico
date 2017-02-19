<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Correos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('email', 'myencryption'));
    }

    public function enviarEmail() {
        if ($this->input->is_ajax_request()) {
            $correo = $this->input->post('email_user');
            $nombres = $this->input->post('nombres_user');
            $apat = $this->input->post('apellidos');
            $contrasena = $this->input->post('pass_user');

            $datos['data_user'] = array('correo' => $this->myencryption->encode($correo), 'nombres' => $this->myencryption->encode($nombres),
                'apat' => $this->myencryption->encode(str_replace(' ', '', $apat)), 'pass' => $this->myencryption->encode($contrasena));
            $body = $this->load->view('emails/registrar', $datos, TRUE);

            $this->email->set_newline("\r\n");
            $this->email->from('noreply@smoking-mexico.com', 'Smoking México')->to($correo, 'Registro de Usuario')
                        ->subject('Solicitud de registro')->message($body);
            //Enviamos el email y si se produce bien o mal imprimimos un true o false
            #if ($this->email->send()) echo true;
            #else echo false;
            echo $this->email->send();
            
        } else {
            redirect(base_url(), 'refresh');
        }
    }
    
    public function activarRegistro() {
        if ($this->input->is_ajax_request()) {
            $this->load->model(array('usuariomodelo'));

            $correo = $this->input->post('email_user');
            $nombres = $this->input->post('nombres_user');
            $apat = $this->input->post('apellidos');
            $contrasena = $this->input->post('pass_user');

            $datos = array('nombres' => ucwords($this->myencryption->decode($nombres)),
                           'apaterno' => ucfirst($this->myencryption->decode($apat)),
                           'correo' => $correo, 'contrasena' => $contrasena,
                           'activo' => 'Si');

            $status = $this->usuariomodelo->guardaRegistroUsuario($datos);
            echo $status;
        }else{
            redirect(base_url(), 'refresh');
        }
    }

}
