<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
           redirect('home/logoff'); 
    }
    
	public function listar($id) {
		$this->load->model('escolas_model', 'escola'); 

		$dados = array(
			// 'escola'		=> $this->escola->selecionaID('escolas', $id)->result(),
			'funcionarios'	=> $this->escola->selecionaPorAtributo('funcionarios', 'escola_id', $id)->result(),
			'pagina'		=>	NULL,
			'contents'		=>	'funcionario/listar',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
            'id'			=>	$id,
		);
		$this->load->view('manager', $dados);
	}

	public function novo($id) {
		$this->load->model('escolas_model', 'escolas'); 

		$dados = array(
			'pagina'		=>	NULL,
			'contents'		=>	'funcionario/cadastrar',
			'atendimento'	=>	$this->escolas->selecionaTudo('atendimento')->result(),
			'cargos'		=>	$this->escolas->selecionaTudo('cargos')->result(),
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
            'id'            =>  $id,
		);
		$this->load->view('manager', $dados);
	}

	public function visualizar($id) {
		$this->load->model('escolas_model', 'escola'); 

		$dados = array(
			'escola'		=> $this->escola->selecionaID('escolas', $id)->result(),
			'pagina'		=>	NULL,
			'contents'		=>	'funcionario/visualizar',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
		);
		$this->load->view('manager', $dados);
	}

	public function editar($id) {
		$this->load->model('escolas_model', 'escola'); 
		$dados = array(
			'funcionario'	=> $this->escola->selecionaID('funcionarios', $id)->result(),
			'cargos'	    =>	$this->escola->selecionaTudo('cargos')->result(),
			'pagina'		=> NULL,
			'contents'		=> 'funcionario/editar',
            'mensagem'		=> NULL,
            'tipoMensagem'	=> NULL,
            'id'			=> $id,
		);
		$this->load->view('manager', $dados);
	}

	
	public function salvar() {
        $this->load->model('escolas_model', 'escola');

        $data = array(
            'escola_id'            			=> $this->input->post('escola_id'),
            'nome'                          => $this->input->post('nome'),
            'matricula'                 	=> $this->input->post('matricula'),
            'email'                  	    => $this->input->post('email'),
            'cpf'                           => $this->input->post('cpf'),
            'cargo_id'                      => $this->input->post('cargo'),
            'status'                        => $this->input->post('status'),
        );

        if($this->escola->cadastrar('funcionarios', $data)){
            $mensagem = "Funcionário Cadastrado com Sucesso!";
            $tipoMensagem = "alert-success";
         } else {
            $mensagem="Falha ao Cadastrar Funcionário.";
            $tipoMensagem = "alert-danger";
        }


        $dados = array(
            'mensagem'      => $mensagem,
            'tipoMensagem'  => $tipoMensagem,
            'contents'      => 'funcionario/listar',
            'funcionarios'  => $this->escola->selecionaPorAtributo('funcionarios', 'escola_id', $this->input->post('escola_id'))->result(),
            'tipo'          => 'table',
            'id'            => $this->input->post('escola_id'),
        );

        $this->load->view('manager', $dados);
    }

    public function atualizar($id) {
        $this->load->model('escolas_model', 'escola');
        $escola = $this->escola->selecionaID('funcionarios', $id)->result();
        $data = array(
            'nome'                          => $this->input->post('nome'),
            'matricula'                     => $this->input->post('matricula'),
            'email'                         => $this->input->post('email'),
            'cpf'                           => $this->input->post('cpf'),
            'cargo_id'                      => $this->input->post('cargo'),
            'status'                        => $this->input->post('status'),
        );

        if($this->escola->alterarPorId('funcionarios', $data, $id)){
            $mensagem = "Funcionário Atualizado com Sucesso!";
            $tipoMensagem = "alert-success";
         } else {
            $mensagem="Falha ao Atualizar Funcionário.";
            $tipoMensagem = "alert-danger";
        }


        $dados = array(
            'mensagem'      => $mensagem,
            'tipoMensagem'  => $tipoMensagem,
            'contents'      => 'funcionario/listar',
            'funcionarios'  => $this->escola->selecionaPorAtributo('funcionarios', 'escola_id', $escola[0]->escola_id)->result(),
            'tipo'          => 'table',
            'id'            => $this->input->post('escola_id'),
        );

        $this->load->view('manager', $dados);
    }

}
