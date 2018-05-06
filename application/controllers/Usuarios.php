<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function novo() {
        $usuario = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "senha" => md5($this->input->post("senha")) //encriptação MD5
        );
        $this->load->database();   
        $this->load->model("MUsuarios");
        $this->MUsuarios->salva($usuario);
        $this->load->view("usuarios/novo");
    }

}