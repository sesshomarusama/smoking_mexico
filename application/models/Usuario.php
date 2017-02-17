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
        return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
    }
    
    public function existeUsuario($correo, $pass){
        $procedure = "CALL getIdComponente(".$correo.", ".$pass.", @resultado)";
        $this->db->query($procedure);
        $call_total = "SELECT @resultado as resul";
        $query = $this->db->query($call_total);
        return $query->result();
    }
}
