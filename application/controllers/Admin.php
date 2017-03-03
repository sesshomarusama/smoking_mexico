<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    
    public function index() {
        $this->load->view('admin/header');
        $this->load->view('admin/inicio');
        $this->load->view('admin/footer');
    }
    
    public function miPerfil() {
        $this->load->view('admin/header');
        $this->load->view('admin/perfil');
        $this->load->view('admin/footer');
    }
    
    public function perfilPublico() {
        $this->load->view('admin/header');
        $this->load->view('admin/perfil_publico');
        $this->load->view('admin/footer');
    }
    
    public function mapa() {
        $this->load->view('admin/header');
        $this->load->view('admin/mapa');
        $this->load->view('admin/footer');
    }
    
    public function publicacion() {
        $this->load->view('admin/header');
        $this->load->view('admin/publicacion');
        $this->load->view('admin/footer');
    }
}