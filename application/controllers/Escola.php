<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escola extends CI_Controller {

	public function __construct() {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
           redirect('home/logoff'); 
    }

	public function listar() {
		$this->load->model('escolas_model', 'escolas'); 

		if($this->session->userdata('usuario_tipo') == 3){
            $escolas = $this->escolas->selecionaPorAtributo('usuario_escola','usuario_id', $this->session->userdata('usuario_id'))->result();
        } else {
            $escolas = $this->escolas->selecionaTudo('escolas')->result();
        }

		$dados = array(
			'pagina'		=>	NULL,
			'contents'		=>	'escola/listar',
			'escolas'		=>	$escolas,
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
		);
		$this->load->view('manager', $dados);
	}

	public function novo() {
		$this->load->model('escolas_model', 'escolas'); 
		$interno = $this->escolas->selecionaPorAtributo('usuario_interno','usuario_id', $this->session->userdata('usuario_id'))->result();

		$dados = array(
			'pagina'		=>	NULL,
			'contents'		=>	'escola/cadastrar',
			'municipio'		=> 	$this->escolas->selecionaID('interno', $interno[0]->interno_id)->result(),
			'atendimento'	=>	$this->escolas->selecionaTudo('atendimento')->result(),
			'estados'		=>	$this->escolas->selecionaTudo('estados')->result(),
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
		);
		$this->load->view('manager', $dados);
	}

	public function visualizar($id) {
		$this->load->model('escolas_model', 'escola'); 

		$dados = array(
			'escola'		=> $this->escola->selecionaID('escolas', $id)->result(),
			'ambiente'		=> $this->escola->selecionaPorAtributo('ambientes', 'escola_id', $id)->result(),
			'funcionarios'	=> $this->escola->selecionaPorAtributo('funcionarios', 'escola_id', $id)->result(),
			'pagina'		=>	NULL,
			'contents'		=>	'escola/visualizar',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
		);
		$this->load->view('manager', $dados);
	}

	public function editar($id) {
		$this->load->model('escolas_model', 'escola'); 
		$dados = array(
			'escola'		=> $this->escola->selecionaID('escolas', $id)->result(),
			'atendimento'	=>	$this->escola->selecionaTudo('atendimento')->result(),
			'estados'		=>	$this->escola->selecionaTudo('estados')->result(),
			'pagina'		=> NULL,
			'contents'		=> 'escola/editar',
            'mensagem'		=> NULL,
            'tipoMensagem'	=> NULL,
            'id'			=> $id,
		);
		$this->load->view('manager', $dados);
	}

	public function salvar() {
		$this->load->model('escolas_model', 'escola'); 

		if($this->escola->procuraRegistroExistente('escolas', null, 'inep', $this->input->post('inep'))->result()){
            $dados = array(
                'mensagem'      => 'O número de INEP informado já existe em nosso banco de dados.',
                'escolas'      	=> $this->escola->selecionaTudo('escolas')->result(),
                'tipoMensagem'  => 'alert-danger',
                'contents'      => 'escola/listar',
            );

        } else {

			$config['upload_path'] = './assets/imagem_escola/';
	        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
	        $config['max_size']     = '10000';
	        $config['encrypt_name'] = TRUE;
	        $config['file_name']      = '_';   
	        $this->load->library('upload', $config);

	        if( ! $this->upload->do_upload('foto')){
	            $uploadedDetails    = $this->upload->display_errors();
	            $foto = NULL;
	        }else{
	            $uploadedDetails    = $this->upload->data();
	            $foto = $uploadedDetails["file_name"];
	        }
	        // var_dump(implode(" ", $this->input->post('atendimento[]')));die;
	        $atendimento = implode(" ", $this->input->post('atendimento[]'));

	        $data = array(
	            // 'usuario_id'            		=> $this->session->userdata('usuario_id'),
	            'nome'                  		=> $this->input->post('nome'),
	            'email'                 		=> $this->input->post('email'),
	            'inep'                  		=> $this->input->post('inep'),
	            'telefone'              		=> $this->input->post('telefone'),
	            'patrimonio'            		=> $this->input->post('patrimonio'),
	            'atendimento'          			=> $atendimento,
	            'autorizacao_funcionamento'		=> $this->input->post('autorizacao_funcionamento'),
	            'localizacao'       			=> $this->input->post('localizacao'),
	            'foto'                  		=> $foto,
	            'status'                 		=> $this->input->post('status'),
	            'zona'             				=> $this->input->post('zona'),
	            'logradouro'              		=> $this->input->post('logradouro'),
	            'numero'               			=> $this->input->post('numero'),
	            'complemento'                 	=> $this->input->post('complemento'),
	            'bairro'                 		=> $this->input->post('bairro'),
	            'cidade'               			=> $this->input->post('cidade'),
	            'estado'         				=> $this->input->post('estado'),
	            'nome_diretor'    				=> $this->input->post('nome_diretor'),
	            'cpf_diretor'     				=> $this->input->post('cpf_diretor'),
	            'latitude'     					=> $this->input->post('latitude'),
	            'longitude'     				=> $this->input->post('longitude'),
	            'endereco'     					=> $this->input->post('endereco'),
	            'cnpj'     						=> $this->input->post('cnpj'),
	        );

	        if($this->escola->cadastrar('escolas', $data)){
	            $mensagem = "Escola Cadastrada com Sucesso!";
	            $tipoMensagem = "alert-success";
	         } else {
	            $mensagem="Falha ao Cadastrar Escola.";
	            $tipoMensagem = "alert-danger";
	        }

	        if($this->session->userdata('usuario_tipo') == 3){
	            $escolas = $this->escola->selecionaPorAtributo('usuario_escola','usuario_id', $this->session->userdata('usuario_id'))->result();
	        } else {
	            $escolas = $this->escola->selecionaTudo('escolas')->result();
	        }
	    
		    $dados = array(
		        'mensagem'      => $mensagem,
		        'tipoMensagem'  => $tipoMensagem,
		        'contents'      => 'escola/listar',
		        'escolas'       => $escolas,
		        'tipo'          => 'table'
		    );
		}

        $this->load->view('manager', $dados);
    }

    public function atualizar($id){
        $this->load->model('escolas_model', 'escola');

        if($this->escola->procuraRegistroExistente('escolas', $id, 'inep', $this->input->post('inep'))->result()){
            $dados = array(
                'mensagem'      => 'O número de INEP informado já existe em nosso banco de dados.',
                'escolas'      	=> $this->escola->selecionaTudo('escolas')->result(),
                'tipoMensagem'  => 'alert-danger',
                'contents'      => 'escola/listar',
            );

        } else {
            $config['upload_path'] = './assets/imagem_escola/';
            $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
            $config['max_size']     = '10000';
            $config['encrypt_name'] = TRUE;
            $config['file_name']      = '_';   
            $this->load->library('upload', $config);

            if( ! $this->upload->do_upload('foto')){
                $uploadedDetails    = $this->upload->display_errors();
                $foto = NULL;
            }else{
                $uploadedDetails    = $this->upload->data();
                $foto = $uploadedDetails["file_name"];
            }
            // var_dump($this->input->post('atendimento[]'));die;
            $atendimento = implode(" ", $this->input->post('atendimento[]'));
            // var_dump($atendimento);die;
            $data = array(
	            // 'usuario_id'            		=> $this->session->userdata('usuario_id'),
	            'nome'                  		=> $this->input->post('nome'),
	            'email'                 		=> $this->input->post('email'),
	            'inep'                  		=> $this->input->post('inep'),
	            'telefone'              		=> $this->input->post('telefone'),
	            'patrimonio'            		=> $this->input->post('patrimonio'),
	            'atendimento'          			=> $atendimento,
	            'autorizacao_funcionamento'		=> $this->input->post('autorizacao_funcionamento'),
	            'localizacao'       			=> $this->input->post('localizacao'),
	            'foto'                  		=> $foto,
	            'status'                 		=> $this->input->post('status'),
	            'zona'             				=> $this->input->post('zona'),
	            'logradouro'              		=> $this->input->post('logradouro'),
	            'numero'               			=> $this->input->post('numero'),
	            'complemento'                 	=> $this->input->post('complemento'),
	            'bairro'                 		=> $this->input->post('bairro'),
	            'cidade'               			=> $this->input->post('cidade'),
	            'estado'         				=> $this->input->post('estado'),
	            'nome_diretor'    				=> $this->input->post('nome_diretor'),
	            'cpf_diretor'     				=> $this->input->post('cpf_diretor'),
	            'latitude'     					=> $this->input->post('latitude'),
	            'longitude'     				=> $this->input->post('longitude'),
	            'endereco'     					=> $this->input->post('endereco'),
	            'cnpj'     						=> $this->input->post('cnpj'),
	        );

            if($this->escola->alterarPorId('escolas', $data, $id)){
                $mensagem = "Escola Atualizada com Sucesso!";
                $tipoMensagem = "alert-success";
             } else {
                $mensagem="Falha ao Atualizar Escola.";
                $tipoMensagem = "alert-danger";
            }

            if($this->session->userdata('usuario_tipo') == 3){
	            $escolas = $this->escola->selecionaPorAtributo('usuario_escola','usuario_id', $this->session->userdata('usuario_id'))->result();
	        } else {
	            $escolas = $this->escola->selecionaTudo('escolas')->result();
	        }

            $dados = array(
                'mensagem'      => $mensagem,
                'tipoMensagem'  => $tipoMensagem,
                'contents'      => 'escola/listar',
                'escolas'		=>	$escolas,
                'tipo'          => 'table',
            );
        }

        $this->load->view('manager', $dados);
    }

    public function acessar($id) {
		$this->load->model('escolas_model', 'escola'); 

		$dados = array(
			'escola'		=> $this->escola->selecionaID('escolas', $id)->result(),
			'pagina'		=>	NULL,
			'contents'		=>	'escola/acessar/acessar',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
            'id'			=>	$id,
		);
		$this->load->view('manager', $dados);
	}

	public function ambientes($id) {
		$this->load->model('escolas_model', 'escola'); 
		$this->load->model('escolas_model', 'escola'); 

		$ambiente = $this->escola->selecionaPorAtributo('ambientes','escola_id', $id)->result();
    	if(isset($ambiente[0])){
        	$ambiente = $ambiente[0];
        	$content = 'escola/acessar/editarAmbientes';
	    } else {
	        $ambiente = null;
	        $content = 'escola/acessar/ambientes';
	    }

		$dados = array(
			'escola'		=> $this->escola->selecionaID('escolas', $id)->result(),
			'ambiente'		=> $ambiente,
			'pagina'		=>	NULL,
			'contents'		=>	$content,
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
            'id'			=>	$id,
		);
		$this->load->view('manager', $dados);
	}

	public function salvarAmbientes($id) {
        $this->load->model('escolas_model', 'escola');

        $data = array(
            'escola_id'            			=> $id,
            'qtde_sala_aula'                => $this->input->post('qtde_sala_aula'),
            'diretoria'                 	=> $this->input->post('diretoria'),
            'coordenacao'                  	=> $this->input->post('coordenacao'),
            'sala_informatica'              => $this->input->post('sala_informatica'),
            'sala_secretaria'            	=> $this->input->post('sala_secretaria'),
            'qtde_ban_masc'          		=> $this->input->post('qtde_ban_masc'),
            'qtde_ban_fem'					=> $this->input->post('qtde_ban_fem'),
            'qtde_ban_mis'       			=> $this->input->post('qtde_ban_mis'),
            'refeitorio'                 	=> $this->input->post('refeitorio'),
            'cantina'             			=> $this->input->post('cantina'),
            'horta'              			=> $this->input->post('horta'),
            'parque'               			=> $this->input->post('parque'),
            'corredor'                 		=> $this->input->post('corredor'),
            'quadra'                 		=> $this->input->post('quadra'),
            'biblioteca'               		=> $this->input->post('biblioteca'),
            'sala_leitura'         			=> $this->input->post('sala_leitura'),
            'merenda'    					=> $this->input->post('merenda'),
        );


        if($this->escola->procuraRegistroExistente('ambientes', null, 'escola_id', $id)->result()){

        	if($this->escola->alterarPorAtributo('ambientes', $data, $id, 'escola_id')){
                $mensagem = "Ambientes Atualizados com Sucesso!";
                $tipoMensagem = "alert-success";
             } else {
                $mensagem="Falha ao Atualizar os Ambientes.";
                $tipoMensagem = "alert-danger";
            }

        } else {

            if($this->escola->cadastrar('ambientes', $data)){
	            $mensagem = "Ambiente Escolar Cadastrado com Sucesso!";
	            $tipoMensagem = "alert-success";
	         } else {
	            $mensagem="Falha ao Cadastrar Ambiente Escolar.";
	            $tipoMensagem = "alert-danger";
	        }

        }

        $dados = array(
            'mensagem'      => $mensagem,
            'tipoMensagem'  => $tipoMensagem,
            'contents'      => 'escola/listar',
            // 'escolas'      => $this->escola->selecionaPorAtributo('escolas','usuario_id', $this->session->userdata('usuario_id'))->result(),
            'escolas'		=>	$this->escola->selecionaTudo('escolas')->result(),
            'tipo'          => 'table',
        );

        $this->load->view('manager', $dados);
    }

	public function funcionarios($id) {
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

	public function atendimento($id) {
		$this->load->model('escolas_model', 'escola'); 

		$dados = array(
			'escola'		=> $this->escola->selecionaID('escolas', $id)->result(),
			'pagina'		=>	NULL,
			'contents'		=>	'escola/acessar/atendimento',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
            'id'			=>	$id,
		);
		$this->load->view('manager', $dados);
	}
}
