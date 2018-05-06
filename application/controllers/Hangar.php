<?php
class Hangar extends CI_Controller {
    public function index()
    {
        $hangar = array();
        $xwing = array(
            "nome" => "X-Wing",
            "descricao" => "Principal caça estelar da aliança",
            "preco" => 800
            );
        $ywing = array(
            "nome" => "Y-Wing",
            "descricao" => "Bombardeiro de assalto",
            "preco" => 1000           
            ); 
        array_push($hangar, $xwing, $ywing);
        
        //Array que será enviado para a View
        $dados = array("hangar" => $hangar);
        
        $this->load->view("hangar/index.php", $dados);
    }
}

?>