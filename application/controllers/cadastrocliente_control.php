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
        $config = array(
            "base_url" => base_url('index.php/cadastrocliente/formulario'),
            "per_page" => 3,//numero de registro por link
            "num_links" => 3,// numero de links na pagina
            "uri_segment" => 3,
            "total_rows" => $this->cadastrocliente_model->countAll(),
            "full_tag_open" => "<ul class='pagination'>", //tag de abertura
            "full_tag_close" => "</ul>", //tag de fechamento
            "first_link" => false, //link puxando para a primeira pagina
            "last_link" => false, //link puxando para a ultima pagina
            "first_tag_open" => "<li>", //tag de abertura do primeiro link
            "first_tag_close" => "</li>", //tag de fechamento do primeiro link
            "prev_link" => "Anterior", //conteudo a ser exibido para o link de paginação que leva a pagina anterior 
            "prev_tag_open" => "<li class='prev'>", //tag de abertura para prev link
            "prev_tag_close" => "</li>", //tag de fechamento para prev link
            "next_link" => "Próxima", //conteudo a ser exibido para o link de paginação que leva a proxima pagina
            "next_tag_open" => "<li class='next'>", //tag de abertura para next link
            "next_tag_close" => "</li>", //tag de fechamento para next link
            "last_tag_open" => "<li>", //tag de abertura para a ultima pagina
            "last_tag_close" => "</li>", //tag de fechemento para a ultima pagina 
            "cur_tag_open" => "<li class='active'><a href='#'>", //tag de abertura a ser adicionada para o item ativo
            "cur_tag_close" => "</a></li>", //tag de fechamento a ser adicionada para o item ativo
            "num_tag_open" => "<li>", //tag de abertura a ser adicionada para os itens numericos(as paginas da nossa aplicação
            "num_tag_close" => "</li>"//tag de fechamento a ser adicionada para os itens numericos(as paginas da nossa aplicação
        );

        $this->pagination->initialize($config);

        $data['paginacao'] = $this->pagination->create_links();

        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['clientesRetorno'] = $this->cadastrocliente_model->listaClientes('id', 'asc', $config['per_page'], $offset);

        $this->load->view('cadastroCliente.php', $data);
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
