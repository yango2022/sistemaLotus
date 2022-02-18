<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creche extends CI_Controller {

	public function __construct() {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
           redirect('home/logoff'); 
    }
    
	public function listar() {
		$this->load->model('alunos_model', 'alunos'); 

		$dados = array(
			'pagina'		=>	NULL,
			'contents'		=>	'creche/listar',
			'alunos'      	=> 	$this->alunos->selecionaPorAtributoCreche('alunos','ed_infantil', 1)->result(),
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
		);
		$this->load->view('manager', $dados);
	}

	public function novo() {
		$this->load->model('escolas_model', 'escolas'); 

		if($this->session->userdata('usuario_tipo') == 3){
            $escolas = $this->escolas->selecionaID('escolas', $this->session->userdata('usuario_escola'))->result();
        } else {
            $escolas = $this->escolas->selecionaTudo('escolas')->result();
        }

		$dados = array(
			'pagina'		=>	NULL,
			'contents'		=>	'creche/cadastrar',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
            'escolas'		=>	$escolas,
		);
		$this->load->view('manager', $dados);
	}

	public function visualizar($id) {
		$this->load->model('alunos_model', 'aluno'); 

		$dados = array(
			'aluno'		=> $this->aluno->selecionaID('alunos', $id)->result(),
			'pagina'		=>	NULL,
			'contents'		=>	'creche/visualizar',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
		);
		$this->load->view('manager', $dados);
	}

	public function editar($id) {
		$this->load->model('alunos_model', 'aluno'); 
		$this->load->model('escolas_model', 'escolas'); 

		if($this->session->userdata('usuario_tipo') == 3){
            $escolas = $this->escolas->selecionaID('escolas', $this->session->userdata('usuario_escola'))->result();
        } else {
            $escolas = $this->escolas->selecionaTudo('escolas')->result();
        }

		$dados = array(
			'aluno'			=> $this->aluno->selecionaID('alunos', $id)->result(),
            'escolas'		=> $escolas,
			'pagina'		=> NULL,
			'contents'		=> 'creche/editar',
            'mensagem'		=> NULL,
            'tipoMensagem'	=> NULL,
            'id'			=> $id,
		);
		$this->load->view('manager', $dados);
	}

	public function salvar() {
		$this->load->model('alunos_model', 'aluno'); 

		if($this->aluno->procuraRegistroExistente('alunos', null, 'inep', $this->input->post('inep'))->result()){
            $dados = array(
                'mensagem'      => 'O número de INEP informado já existe em nosso banco de dados.',
                'alunos'      	=> $this->alunos->selecionaPorAtributoCreche('alunos','ed_infantil', 1)->result(),
                'tipoMensagem'  => 'alert-danger',
                'contents'      => 'creche/listar',
            );

        } else {

			$config['upload_path'] = './assets/imagem_aluno/';
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
	        
	        $renda = substr($this->input->post('renda'), 3);
            $renda = str_replace('.', '', $renda);
            $renda = str_replace(',', '.', $renda);

	        $data = array(
	            'nome'                  		=> $this->input->post('nome'),
	            'email'                 		=> $this->input->post('email'),
	            'inep'                  		=> $this->input->post('inep'),
	            'celular'              			=> $this->input->post('celular'),
	            'sexo'            				=> $this->input->post('sexo'),
	            'data_matricula'     			=> $this->input->post('data_matricula'), 
	            'ano_letivo'					=> $this->input->post('ano_letivo'),
	            'turno'			       			=> $this->input->post('turno'),
	            'foto'                  		=> $foto,
	            'nivel_ensino'            		=> $this->input->post('status'),
	            'zona'             				=> $this->input->post('zona'),
	            'logradouro'              		=> $this->input->post('logradouro'),
	            'numero'               			=> $this->input->post('numero'),
	            'complemento'                 	=> $this->input->post('complemento'),
	            'bairro'                 		=> $this->input->post('bairro'),
	            'cidade'               			=> $this->input->post('cidade'),
	            'estado'         				=> $this->input->post('estado'),
	            'modalidade'                  	=> $this->input->post('modalidade'),
	            'cpf'                 			=> $this->input->post('cpf'),
	            'rg'           	       			=> $this->input->post('rg'),
	            'certidao_nascimento'     		=> $this->input->post('certidao_nascimento'),
	            'certidao_casamento'            => $this->input->post('certidao_casamento'),
	            'data_nascimento'     			=> $this->input->post('data_nascimento'), 
	            'email'							=> $this->input->post('email'),
	            'nacionalidade'			       	=> $this->input->post('nacionalidade'),
	            'naturalidade'              	=> $this->input->post('naturalidade'),
	            'uf_naturalidade'              	=> $this->input->post('uf_naturalidade'),
	            'cor'               			=> $this->input->post('cor'),
	            'estado_civil'                 	=> $this->input->post('estado_civil'),
	            'transporte_escolar'            => $this->input->post('transporte_escolar'),
	            'cep'               			=> $this->input->post('cep'),
	            'mae'         					=> $this->input->post('mae'),
	            'pai'                  			=> $this->input->post('pai'),
	            'programa_social'               => $this->input->post('programa_social'),
	            'responsavel_matricula'         => $this->input->post('responsavel_matricula'),
	            'responsavel_buscar'     		=> $this->input->post('responsavel_buscar'),
	            'situacao_final'            	=> $this->input->post('situacao_final'),
	            'escola_id'     				=> $this->input->post('escola'),
	            'renda'     					=> $renda,
	            'deficiencia'     				=> $this->input->post('deficiencia'),
	            'medida_protecao'     			=> $this->input->post('medida_protecao'),
	        );

	        if($this->aluno->cadastrar('alunos', $data)){
	            $mensagem = "Aluno Cadastrado com Sucesso!";
	            $tipoMensagem = "alert-success";
	         } else {
	            $mensagem="Falha ao Cadastrar Aluno.";
	            $tipoMensagem = "alert-danger";
	        }
	    
		    $dados = array(
		        'mensagem'      => $mensagem,
		        'tipoMensagem'  => $tipoMensagem,
		        'contents'      => 'creche/listar',
		        'alunos'      	=> $this->alunos->selecionaPorAtributoCreche('alunos','ed_infantil', 1)->result(),
		        'tipo'          => 'table'
		    );
		}

        $this->load->view('manager', $dados);
    }

    public function atualizar($id){
        $this->load->model('alunos_model', 'aluno');

        if($this->aluno->procuraRegistroExistente('alunos', $id, 'inep', $this->input->post('inep'))->result()){
            $dados = array(
                'mensagem'      => 'O número de INEP informado já existe em nosso banco de dados.',
                'alunos'      	=> $this->alunos->selecionaPorAtributoCreche('alunos','ed_infantil', 1)->result(),
                'tipoMensagem'  => 'alert-danger',
                'contents'      => 'creche/listar',
            );

        } else {
            $config['upload_path'] = './assets/imagem_aluno/';
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

            $renda = substr($this->input->post('renda'), 3);
            $renda = str_replace('.', '', $renda);
            $renda = str_replace(',', '.', $renda);
            
            $data = array(
	            'nome'                  		=> $this->input->post('nome'),
	            'email'                 		=> $this->input->post('email'),
	            'inep'                  		=> $this->input->post('inep'),
	            'celular'              			=> $this->input->post('celular'),
	            'sexo'            				=> $this->input->post('sexo'),
	            'data_matricula'     			=> $this->input->post('data_matricula'), 
	            'ano_letivo'					=> $this->input->post('ano_letivo'),
	            'turno'			       			=> $this->input->post('turno'),
	            'foto'                  		=> $foto,
	            'nivel_ensino'            		=> $this->input->post('status'),
	            'zona'             				=> $this->input->post('zona'),
	            'logradouro'              		=> $this->input->post('logradouro'),
	            'numero'               			=> $this->input->post('numero'),
	            'complemento'                 	=> $this->input->post('complemento'),
	            'bairro'                 		=> $this->input->post('bairro'),
	            'cidade'               			=> $this->input->post('cidade'),
	            'estado'         				=> $this->input->post('estado'),
	            'modalidade'                  	=> $this->input->post('modalidade'),
	            'cpf'                 			=> $this->input->post('cpf'),
	            'rg'           	       			=> $this->input->post('rg'),
	            'certidao_nascimento'     		=> $this->input->post('certidao_nascimento'),
	            'certidao_casamento'            => $this->input->post('certidao_casamento'),
	            'data_nascimento'     			=> $this->input->post('data_nascimento'), 
	            'email'							=> $this->input->post('email'),
	            'nacionalidade'			       	=> $this->input->post('nacionalidade'),
	            'naturalidade'              	=> $this->input->post('naturalidade'),
	            'uf_naturalidade'              	=> $this->input->post('uf_naturalidade'),
	            'cor'               			=> $this->input->post('cor'),
	            'estado_civil'                 	=> $this->input->post('estado_civil'),
	            'transporte_escolar'            => $this->input->post('transporte_escolar'),
	            'cep'               			=> $this->input->post('cep'),
	            'mae'         					=> $this->input->post('mae'),
	            'pai'                  			=> $this->input->post('pai'),
	            'programa_social'               => $this->input->post('programa_social'),
	            'responsavel_matricula'         => $this->input->post('responsavel_matricula'),
	            'responsavel_buscar'     		=> $this->input->post('responsavel_buscar'),
	            'situacao_final'            	=> $this->input->post('situacao_final'),
	            'escola_id'     				=> $this->input->post('escola'),
	            'renda'     					=> $renda,
	            'deficiencia'     				=> $this->input->post('deficiencia'),
	            'medida_protecao'     			=> $this->input->post('medida_protecao'),
	        );

            if($this->aluno->alterarPorId('alunos', $data, $id)){
                $mensagem = "aluno Atualizada com Sucesso!";
                $tipoMensagem = "alert-success";
             } else {
                $mensagem="Falha ao Atualizar aluno.";
                $tipoMensagem = "alert-danger";
            }

            $dados = array(
                'mensagem'      => $mensagem,
                'tipoMensagem'  => $tipoMensagem,
                'contents'      => 'creche/listar',
                'alunos'      	=> $this->alunos->selecionaPorAtributoCreche('alunos','ed_infantil', 1)->result(),
                'tipo'          => 'table',
            );
        }

        $this->load->view('manager', $dados);
    }

    public function gerarMatricula(){
    	//Por enquanto, a matrícula será Ano + Sequencia de 5 caracteres
    	$this->load->model('alunos_model', 'aluno');

    	$ultimoAluno = $this->aluno->selecionaUltimo('alunos', 'matricula')->result();

    	if(substr($ultimoAluno[0]->matricula, 0, 4) == date("Y")){
    		return intval($ultimoAluno[0]->matricula)+1;
    	} else {
    		//DEPOIS ALTERAR PARA ANO LETIVO
    		return intval(date("Y").'00001');
    	}

    }

    public function acessar($id) {
		$this->load->model('alunos_model', 'aluno');

		$matricula = $this->aluno->procuraRegistroExistente('matriculas', null, 'aluno_id', $id)->result();
		if(!empty($matricula)){
			$matricula = $this->aluno->selecionaID('turmas', $matricula[0]->turma_id)->result();

			if($matricula[0]->escola_id == $this->session->userdata('usuario_escola')){
				$matricula = $this->session->userdata('usuario_escola');
			} else {
				$matricula = null;
			}
		} else {
			$matricula = null;
		}

		$dados = array(
			'aluno'			=> 	$this->aluno->selecionaID('alunos', $id)->result(),
			'matricula'		=>	$matricula,
			'pagina'		=>	NULL,
			'contents'		=>	'creche/acessar',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
            'id'			=>	$id,
		);
		$this->load->view('manager', $dados);
	}

	public function matricula($id) {
		$this->load->model('alunos_model', 'aluno'); 

		$matricula = $this->aluno->selecionaPorAtributo('matriculas','aluno_id', $id)->result();
		
		$interno = $this->aluno->selecionaPorAtributo('usuario_interno','usuario_id', $this->session->userdata('usuario_id'))->result();

		$dados = array(
			'aluno'			=> 	$this->aluno->selecionaID('alunos', $id)->result(),
			'turma'			=> 	$this->aluno->selecionaID('turmas', $matricula[0]->turma_id)->result(),
			'matricula'		=> 	$matricula,
			'interno'		=> 	$this->aluno->selecionaID('interno', $interno[0]->interno_id)->result(),
			'escola'		=> 	$this->aluno->selecionaID('escolas', $this->session->userdata('usuario_escola'))->result(),
			'pagina'		=>	NULL,
			'contents'		=>	'creche/matricula',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
		);
		$this->load->view('manager', $dados);
	}

	public function frequencia($id) {
		$this->load->model('alunos_model', 'aluno'); 

		$matricula = $this->aluno->selecionaPorAtributo('matriculas','aluno_id', $id)->result();
		
		$interno = $this->aluno->selecionaPorAtributo('usuario_interno','usuario_id', $this->session->userdata('usuario_id'))->result();

		$dados = array(
			'aluno'			=> 	$this->aluno->selecionaID('alunos', $id)->result(),
			'turma'			=> 	$this->aluno->selecionaID('turmas', $matricula[0]->turma_id)->result(),
			'matricula'		=> 	$matricula,
			'interno'		=> 	$this->aluno->selecionaID('interno', $interno[0]->interno_id)->result(),
			'escola'		=> 	$this->aluno->selecionaID('escolas', $this->session->userdata('usuario_escola'))->result(),
			'pagina'		=>	NULL,
			'contents'		=>	'creche/frequencia',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
		);
		$this->load->view('manager', $dados);
	}
}
