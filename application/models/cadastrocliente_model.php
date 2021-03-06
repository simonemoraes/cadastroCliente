<?php
if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Cadastrocliente_model extends CI_Model {
    
    var $tabela_clientes = "clientes";
    
    function __construct() {
        parent::__construct();
    }

    
    public function listaClientes($id = 'id', $ordernar = 'asc', $limit = null, $offset = null) {

        $this->db->order_by($id, $ordernar);
        
        if($limit){
            $this->db->limit($limit, $offset);
        }
        
        $result = $this->db->get($this->tabela_clientes);

        if ($result->num_rows() > 0) {
            return $result -> result_array();
        } else {
            return null;
        }
    }

    public function salvar($clientes) {
        return $this->db->insert($this->tabela_clientes, $clientes);
    }

    public function editar($cliente) {

        $this->db->where('id', $cliente["id"]);
        return $this->db->update($this->tabela_clientes, $cliente);
    }

    public function deletar($cliente) {

        $this->db->where('id', $cliente["id"]);
        return $this->db->delete($this->tabela_clientes, $cliente);
    }

    public function buscaPorId($id_cliente) {
        $this->db->where("id", $id_cliente);
        return $this->db->get($this->tabela_clientes);
    }

    function countAll() {
        return $this->db->count_all($this->tabela_clientes);
    }

}
