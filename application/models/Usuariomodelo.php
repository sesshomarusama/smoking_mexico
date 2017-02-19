<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuariomodelo extends CI_Model {

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
            $this->db->trans_commit();
            return true;
        }else{
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
        $sql = "CALL loginUser(".$this->db->escape($correo).", ".$this->db->escape($pass).", @resultado)";
        $this->db->trans_start();
            $this->db->query($sql);
            $query = $this->db->query("SELECT @resultado as resul");
        $this->db->trans_complete();
        return $query->row()->resul;
    }
    
    public function creaSesion($correo) {
        $this->db->select("id_usuario , CONCAT(nombres, ' ', apaterno) AS nombre");
        $this->db->from('usuarios');
        $this->db->where('correo', $correo);
        $query = $this->db->get();
        $conf = array(
            'id_user' => $query->row()->id_usuario,
            'nombre' => $query->row()->nombre,
            'logged_in' => TRUE
        );
        return $conf;
    }

}
