<?php

class Cadastrocliente_model extends CI_Model {
    
    public function listaClientes(){
        return $this->db->query("select * from clientes")->result_array();
    }

        public function salvar($clientes) {
        return $this->db->insert("Clientes", $clientes);
    }
    
     public function editar($cliente){
      
        $this->db->where('id', $cliente["id"]);
        return $this->db->update("clientes",$cliente);
    }
    
     public function deletar($cliente){
      
        $this->db->where('id', $cliente["id"]);
        return $this->db->delete("clientes",$cliente);
    }
    
    public function buscaPorId($id_cliente) {
        $this->db->where("id", $id_cliente);
        return $this->db->get('clientes');
    }
}

