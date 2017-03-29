<?php

class Idioma_model extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function saludo(){
        $this->db->where('idpalabra','1');
        $this->db->where('estado','1');
        $query = $this->db->get('palabras');
        return $query->row();
    }

        public function despedida(){
        $this->db->where('idpalabra','2');
        $this->db->where('estado','1');
        $query = $this->db->get('palabras');
        return $query->row();
    }

        public function lista_palabras(){
        $this->db->where('idpalabra','1');
        $this->db->where('estado','1');
        $query = $this->db->get('palabras');
        return $query->row();
    }
}
?>