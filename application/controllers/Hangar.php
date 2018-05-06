<?php
class Hangar extends CI_Controller {
    public function index()
    {
        $this->load->database();
        $this->load->model("MHangar");
        $hangar = $this->MHangar->buscaTodos();
        
        //Array que será enviado para a View
        $dados = array("hangar" => $hangar);
        
        $this->load->view("hangar/index.php", $dados);
    }
}

?>