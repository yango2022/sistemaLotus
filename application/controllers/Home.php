<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$dados = array(
			'pagina'		=>	NULL,
			'contents'		=>	'login',
            'mensagem'		=>	NULL,
            'tipoMensagem'	=>	NULL,
		);
		$this->load->view('home', $dados);
	}

    public function trocarEscola() {
        $this->load->model('escolas_model', 'escola'); 

        if($this->session->userdata('usuario_tipo') == 3){
            $escolas = $this->escola->selecionaPorAtributo('usuario_escola','usuario_id', $this->session->userdata('usuario_id'))->result();
        } else {
            $escolas = $this->escola->selecionaTudo('escolas')->result();
        }

        $dados = array(
            'contents' => 'escola',
            'nome' => $this->session->userdata('usuario_nome'),
            'escolas' => $escolas,
            'mensagem' => NULL,
            'tipoMensagem' => NULL,
            'tipo' => null,
        );            
        $this->load->view('home', $dados);
    }

	public function escolherEscola() {
        $this->load->model('usuarios_model', 'usuario');

        $dados = array(
            'cpf' => $this->input->post('cpf'),
            'senha' => md5($this->input->post('senha')),
        );                       

        $login = $this->usuario->isValidLogin($dados['cpf'], $dados['senha']);        
        
        if ($login) {
            if($login[0]->ativo == 1){
                $this->load->model('escolas_model', 'escola'); 
                $interno = $this->escola->selecionaPorAtributo('usuario_interno','usuario_id', $login[0]->id)->result();

                $this->session->set_userdata(array(
                    'usuario_id'                => $login[0]->id,
                    'usuario_cpf'               => $login[0]->cpf,
                    'usuario_nome'              => $login[0]->nome,
                    'usuario_email'             => $login[0]->email,
                    'usuario_tipo'              => $login[0]->tipo,
                    'usuario_foto'              => $login[0]->foto,
                    'usuario_interno'           => $interno[0]->interno_id,
                    'logged_in'                 => TRUE,
                ));

                if($this->session->userdata('usuario_tipo') == 3){
                    $escolas = $this->escola->selecionaPorAtributo('usuario_escola','usuario_id', $this->session->userdata('usuario_id'))->result();
                } else {
                    $escolas = $this->escola->selecionaTudo('escolas')->result();
                }

                $dados = array(
                    'contents' => 'escola',
                    'nome' => $login[0]->nome,
                    'escolas' => $escolas,
                    'mensagem' => NULL,
                    'tipoMensagem' => NULL,
                    'tipo' => null,
                );            
                $this->load->view('home', $dados);
                    
            } else {

                redirect('home/bloqueado');
            }
        } 
        else 
        {   
            $this->session->set_flashdata('errook','O CPF ou a senha estão incorretos.');
            redirect('home/incorreto');
        }

    }

    public function solicitarAcesso() {
        $dados = array(
            'contents' => 'usuarios/solicitarAcesso',
            'tipo' => 'form',
        );            
        $this->load->view('home', $dados);
    }

    public function esqueciMinhaSenha(){
        $dados = array(
            'contents'      =>  'login',
            'mensagem'      =>  'Em breve será possível.',
            'tipoMensagem'  =>  'alert-warning',
            'tipo'          => NULL,
        );
        $this->load->view('home', $dados);
    }

    public function logoff() {

        $this->session->set_userdata(
            array(
                    'logged_in'    => FALSE,
                )
        );
        // $this->session->unset_userdata('user');
        $this->session->sess_destroy();

        redirect('home');
    }

    public function incorreto() {
        $dados = array(
            'mensagem'      =>   'O CPF ou a senha estão incorretos.',
            'contents'      => 'login',
            'tipoMensagem'  => 'alert-danger',
            'tipo'          => NULL,
        );
        $this->load->view('home', $dados);

    }

    public function usuarioLogado(){
        $dados = array(
            'mensagem' =>   'O usuário já se encontra logado no sistema.',
            'contents' => 'home',
            'tipoMensagem' => 'alert-danger',
            'tipo'          => NULL,
        );
        $this->load->view('home', $dados);
    }

    public function bloqueado() {
        $dados = array(
            'mensagem' =>   'Acesso bloqueado. Favor entrar em contato com a Administração.',
            'contents' => 'home',
            'tipoMensagem' => 'alert-danger',
            'tipo'          => NULL,
        );
        $this->load->view('home', $dados);

    }
}
