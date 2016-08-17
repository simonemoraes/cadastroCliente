<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class cadastrocliente_control extends CI_Controller {

    var $html_mensagem = "";
    var $status = "";

    function __construct() {
        parent::__construct();

        $this->load->model('cadastrocliente_model');
    }

    public function index() {
        $this->load->view('paginaInicial.php');
    }
    
    public function formulario() {
        $retornaClientes = $this->cadastrocliente_model->listaClientes();
        $dados = array("clientesRetorno" => $retornaClientes);

        $this->load->view('cadastroCliente.php', $dados);
    }

    public function editaCliente() {
        $id = $this->input->post("id");
        $retornaCliente = $this->cadastrocliente_model->buscaPorId($id);

        $cliente = array(
            "id" => $retornaCliente->row()->id,
            "nome" => $retornaCliente->row()->nome,
            "email" => $retornaCliente->row()->email,
            "cpf" => $retornaCliente->row()->cpf
        );


        echo json_encode($cliente);
    }

    public function salvarCliente() {

        $id = $this->input->post("id");

        if ($id == 'vazio') {
            $clientes = array(
                "nome" => $this->input->post("nome"),
                "email" => $this->input->post("email"),
                "cpf" => $this->input->post("cpf")
            );
            
            $retorno = $this->cadastrocliente_model->salvar($clientes);
            
        } else {
            
            $clientes = array(
                "id" => $id,
                "nome" => $this->input->post("nome"),
                "email" => $this->input->post("email"),
                "cpf" => $this->input->post("cpf")
            );

            $retorno = $this->cadastrocliente_model->editar($clientes);
        }

        echo $retorno;
    }
    
    public function removerCliente() {

        $id = $this->input->post("id");

                  
            $clientes = array(
                "id" => $id,
                "nome" => $this->input->post("nome"),
                "email" => $this->input->post("email"),
                "cpf" => $this->input->post("cpf")
            );

            $retorno = $this->cadastrocliente_model->deletar($clientes);
       

        echo $retorno;
    }
    
    public function formularioCep() {
        $this->load->view('buscaPorCep.php');
    }
    
    public function dragAndDrop() {
        $this->load->view('dragAndDrop.php');
    }

}
