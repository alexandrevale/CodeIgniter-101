<?php

class MHangar extends CI_Model{
   
    public function buscaTodos() {
        return $this->db->get("naves")->result_array();
    }
      
}


?>