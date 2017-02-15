<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function guardaRegistroUsuario($datos){
        $this->db->insert('usuarios',$datos);
        return ($this->db->affected_rows() > 0) ? true : false;
    }
}
