<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function guardaRegistroUsuario($datos){
        $this->db->trans_begin();
            $this->db->insert('usuarios', $datos);
            
            $id_usuario = array('id_usuario' => $this->db->insert_id());
            $this->db->insert('perfiles', $id_usuario);
            
            $id_perfil = array('id_perfil' => $this->db->insert_id());
            $this->db->insert('horarios', $id_perfil);
            $this->db->insert('redessociales', $id_perfil);
        $this->db->trans_complete();
        
        if ($this->db->trans_status() === TRUE){
            # if everything went right, delete the data from the database
            $this->db->trans_commit();
            return true;
        }else{
            # if something went wrong, rollback everything
            $this->db->trans_rollback();
            return false;
        }
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
