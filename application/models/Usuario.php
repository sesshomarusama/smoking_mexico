<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function guardaRegistroUsuario($datos){
        $this->db->insert('usuarios', $datos);
        if($this->db->affected_rows() > 0){
            $datos_perfil = array('id_perfil' => $this->db->insert_id());
            $this->db->insert('perfiles', $datos_perfil);
            return true;
        }else{
            return false;
        }
        #return ($this->db->affected_rows() > 0) ? true : false;
    }
    
    public function existeCorreo($correo){
        $this->db->where("correo", $correo);
        $this->db->from("usuarios");
        return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
    }
    
    public function existeUsuario($correo, $pass){
        $procedure = "CALL loginUser(".$correo.", ".$pass.", @resultado)";
        $this->db->query($procedure);
        $call_total = "SELECT @resultado as resul";
        $query = $this->db->query($call_total);
        return $query->result();
    }
    
    public function cerrarSesion() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url(), 'refresh');
    }

}
