<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turma extends CI_Controller {

	public function __construct() {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
           redirect('home/logoff'); 
    }
    
	public function listar() {
		$this->load->model('turmas_model', 'turmas'); 

		$dados = array(
			'pagina'		=>	NULL,
			'contents'		=>	'turma/listar',
			'turmas'      	=> $this->turmas->selecionaPorAtributo('turmas','escola_id', $this->session->userdata('usuario_escola'))->result(),
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
		);
		$this->load->view('manager', $dados);
	}

	public function novo() {
		$this->load->model('escolas_model', 'escolas'); 
		$dados = array(
			'pagina'		=>	NULL,
			'contents'		=>	'turma/cadastrar',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
            'escolas'		=>	$this->escolas->selecionaTudo('escolas')->result(),
		);
		$this->load->view('manager', $dados);
	}

	public function visualizar($id) {
		$this->load->model('turmas_model', 'turma'); 

		$dados = array(
			'turma'			=> $this->turma->selecionaID('turmas', $id)->result(),
			'alunos'		=> $this->turma->selecionaPorAtributo('matriculas','turma_id', $id)->result(),
			'pagina'		=>	NULL,
			'contents'		=>	'turma/visualizar',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
		);
		$this->load->view('manager', $dados);
	}

	public function editar($id) {
		$this->load->model('turmas_model', 'turma'); 
		$this->load->model('escolas_model', 'escolas'); 
		$dados = array(
			'turma'		=> $this->turma->selecionaID('turmas', $id)->result(),
            'escolas'		=>	$this->escolas->selecionaTudo('escolas')->result(),
			'pagina'		=> NULL,
			'contents'		=> 'turma/editar',
            'mensagem'		=> NULL,
            'tipoMensagem'	=> NULL,
            'id'			=> $id,
		);
		$this->load->view('manager', $dados);
	}

	public function salvar() {
		$this->load->model('turmas_model', 'turma'); 

        $data = array(
            'nome'                  		=> $this->input->post('nome'),
            'turno'            				=> $this->input->post('turno'),
            'ano'            				=> $this->input->post('ano'),
            'escola_id'     				=> $this->input->post('escola'),
        );

        if($this->turma->cadastrar('turmas', $data)){
            $mensagem = "Turma Cadastrada com Sucesso!";
            $tipoMensagem = "alert-success";
         } else {
            $mensagem="Falha ao Cadastrar Turma.";
            $tipoMensagem = "alert-danger";
        }
    
	    $dados = array(
	        'mensagem'      => $mensagem,
	        'tipoMensagem'  => $tipoMensagem,
	        'contents'      => 'turma/listar',
	        'turmas'      	=> $this->turma->selecionaPorAtributo('turmas','escola_id', $this->session->userdata('usuario_escola'))->result(),
	        'tipo'          => 'table'
	    );

        $this->load->view('manager', $dados);
    }

    public function atualizar($id){
        $this->load->model('turmas_model', 'turma');

        $data = array(
            'nome'				=> $this->input->post('nome'),
            'turno'     		=> $this->input->post('turno'),
            'ano'            	=> $this->input->post('ano'),
            'escola_id'     	=> $this->input->post('escola'),
        );

        if($this->turma->alterarPorId('turmas', $data, $id)){
            $mensagem = "Turma Atualizada com Sucesso!";
            $tipoMensagem = "alert-success";
         } else {
            $mensagem="Falha ao Atualizar Turma.";
            $tipoMensagem = "alert-danger";
        }

        $dados = array(
            'mensagem'      => $mensagem,
            'tipoMensagem'  => $tipoMensagem,
            'contents'      => 'turma/listar',
            'turmas'      	=> $this->turma->selecionaPorAtributo('turmas','escola_id', $this->session->userdata('usuario_escola'))->result(),
            'tipo'          => 'table',
        );

        $this->load->view('manager', $dados);
    }

    public function acessar($id) {
		$this->load->model('turmas_model', 'turma');

		$dados = array(
			'turma'			=> $this->turma->selecionaID('turmas', $id)->result(),
			'matricula'		=> $this->turma->selecionaPorAtributo('matriculas','turma_id', $id)->result(),
			'pagina'		=>	NULL,
			'contents'		=>	'turma/acessar',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
            'uid'			=>	$id,
            'tipo'          => 'table',
		);
		$this->load->view('manager', $dados);
	}

	public function alunos($id) {
		$this->load->model('alunos_model', 'alunos'); 
		$this->load->model('turmas_model', 'turma');
		
		$dados = array(
			'pagina'		=>	NULL,
			'turma'			=> $this->turma->selecionaID('turmas', $id)->result(),
			'contents'		=>	'turma/alunos',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
            'matricula'		=> $this->turma->selecionaPorAtributo('matriculas','turma_id', $id)->result(),
            'alunos'      	=> $this->alunos->selecionaPorAtributo('alunos','escola_id', $this->session->userdata('usuario_escola'))->result(),
            'id'			=>	$id,
		);
		$this->load->view('manager', $dados);
	}

	public function vinculaAlunoTurma(){
		$this->load->model('turmas_model', 'turma');

		if($this->turma->procuraRegistroExistente('matriculas', null, 'aluno_id', $this->input->post('aluno'))->result()){
            $dados = array(
                'mensagem'      => 'O Aluno Selecionado já está Vinculado a uma Turma.',
                'matricula'		=> $this->turma->selecionaPorAtributo('matriculas','turma_id', $this->input->post('turma_id'))->result(),
            	'alunos'      	=> $this->turma->selecionaPorAtributo('alunos','escola_id', $this->session->userdata('usuario_escola'))->result(),
            	'turma'			=> $this->turma->selecionaID('turmas', $this->input->post('turma_id'))->result(),
                'tipoMensagem'  => 'alert-danger',
                'contents'      => 'turma/alunos',
                'id'			=> $this->input->post('turma_id')
            );

        } else {

	        $data = array(
	            'turma_id'                  		=> $this->input->post('turma_id'),
	            'aluno_id'            				=> $this->input->post('aluno'),
	        );

	        if($this->turma->cadastrar('matriculas', $data)){
	            $mensagem = "Aluno Vinculado com Sucesso!";
	            $tipoMensagem = "alert-success";
	         } else {
	            $mensagem="Falha ao Vincular Aluno à Turma.";
	            $tipoMensagem = "alert-danger";
	        }

		    $dados = array(
		        'mensagem'      => $mensagem,
		        'tipoMensagem'  => $tipoMensagem,
		        'contents'      => 'turma/alunos',
		        'matricula'		=> $this->turma->selecionaPorAtributo('matriculas','turma_id', $this->input->post('turma_id'))->result(),
            	'alunos'      	=> $this->turma->selecionaPorAtributo('alunos','escola_id', $this->session->userdata('usuario_escola'))->result(),
            	'turma'			=> $this->turma->selecionaID('turmas', $this->input->post('turma_id'))->result(),
		        'tipo'          => 'table',
		        'id'			=> $this->input->post('turma_id')
		    );
		}

        $this->load->view('manager', $dados);
	}

	public function transferir($id) {
		$this->load->model('alunos_model', 'alunos'); 
		$this->load->model('turmas_model', 'turma');

		$matricula = $this->alunos->selecionaPorAtributo('matriculas','id', $id)->result();
		
		$dados = array(
			'pagina'		=>	NULL,
			'turmas'		=> 	$this->turma->selecionaPorAtributo('turmas','escola_id', $this->session->userdata('usuario_escola'))->result(),
			'aluno'      	=> 	$this->alunos->selecionaPorAtributo('alunos','id', $matricula[0]->aluno_id)->result(),
			'contents'		=>	'turma/transferir',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
            'id'			=>	$id,           
		);
		$this->load->view('manager', $dados);
	}

	public function transfereAlunoTurma($id){
		$this->load->model('turmas_model', 'turma');

        $data = array(
            'turma_id'                  		=> $this->input->post('turma'),
            'aluno_id'            				=> $this->input->post('aluno'),
        );

        if($this->turma->alterarPorId('matriculas', $data, $id)){
            $mensagem = "Aluno Transferido com Sucesso!";
            $tipoMensagem = "alert-success";
         } else {
            $mensagem="Falha ao Transferir Aluno à Turma.";
            $tipoMensagem = "alert-danger";
        }

	    $dados = array(
	       'mensagem'      => $mensagem,
            'tipoMensagem'  => $tipoMensagem,
            'contents'      => 'turma/listar',
            'turmas'      	=> $this->turma->selecionaPorAtributo('turmas','escola_id', $this->session->userdata('usuario_escola'))->result(),
            'tipo'          => 'table',
	    );

        $this->load->view('manager', $dados);
	}
}
