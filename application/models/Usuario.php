<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function guardaRegistroUsuario($datos){
        $this->db->insert('usuarios',$datos);
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    
    public function existeCorreo($correo){
        $this->db->where("correo", $correo);
        $this->db->from("usuarios");
        #$count = $this->db->count_all_results();
        return ($this->db->count_all_results() > 0) ? true : false;
        /*
        if ($count > 0) return true;
        else return false;
        */
    }
}
