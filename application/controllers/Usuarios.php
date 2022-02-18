<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct() {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
           redirect('home/logoff'); 
    }

    public function listar() {
        $this->load->model('usuarios_model', 'usuarios'); 

        if($this->session->userdata('usuario_tipo') != 1){
            $usuarios = $this->usuarios->selecionaUsuarios('usuarios')->result();
            // $usuarios = $this->usuarios->selecionaUsuariosMesmaCidade('usuarios', $this->session->userdata('usuario_interno'))->result();
        } else {
            $usuarios = $this->usuarios->selecionaTudo('usuarios')->result();
        }

        $dados = array(
            'pagina'        =>  NULL,
            'contents'      =>  'usuario/listar',
            'usuarios'      =>  $usuarios,
            'mensagem'      =>  NULL,
            'tipoMensagem'  =>  NULL,
        );
        $this->load->view('manager', $dados);
    }

    public function novo() {
        $this->load->model('escolas_model', 'escola'); 
        $dados = array(
            'pagina'        =>  NULL,
            'contents'      =>  'usuario/cadastrar',
            'interno'       =>  $this->escola->selecionaTudo('interno')->result(),
            'mensagem'      =>  NULL,
            'tipoMensagem'  =>  NULL,
        );
        $this->load->view('manager', $dados);
    }

    public function visualizar($id) {
        $this->load->model('usuarios_model', 'usuario'); 

        $dados = array(
            'usuario'       => $this->usuario->selecionaID('usuarios', $id)->result(),
            'pagina'        =>  NULL,
            'contents'      =>  'usuario/visualizar',
            'mensagem'      =>  NULL,
            'tipoMensagem'  =>  NULL,
        );
        $this->load->view('manager', $dados);
    }

    public function editar($id) {
        $this->load->model('usuarios_model', 'usuario');
        $dados = array(
            'usuario'       => $this->usuario->selecionaID('usuarios', $id)->result(),
            'municipio'     => $this->usuario->selecionaPorAtributo('usuario_interno','usuario_id', $id)->result(),
            'interno'       => $this->usuario->selecionaTudo('interno')->result(),
            'pagina'        => NULL,
            'contents'      => 'usuario/editar',
            'mensagem'      => NULL,
            'tipoMensagem'  => NULL,
            'id'            => $id,
        );
        $this->load->view('manager', $dados);
    }

    public function salvar() {
        $this->load->model('usuarios_model', 'usuario'); 

        if($this->usuario->procuraRegistroExistente('usuarios', null, 'cpf', $this->input->post('cpf'))->result()){
            $dados = array(
                'mensagem'      => 'O número de CPF informado já existe em nosso banco de dados.',
                'usuarios'      => $this->usuario->selecionaUsuarios('usuarios','escola_id', $this->session->userdata('usuario_escola'))->result(),
                'tipoMensagem'  => 'alert-danger',
                'contents'      => 'usuario/listar',
            );

        } else {

            $config['upload_path'] = './assets/imagem_usuario/';
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
            $data = array(
                'nome'                          => $this->input->post('nome'),
                'email'                         => $this->input->post('email'),
                'senha'                         => md5($this->input->post('senha')),
                'cpf'                           => $this->input->post('cpf'),
                'ativo'                         => $this->input->post('ativo'),
                'tipo'                          => $this->input->post('tipo'), 
                'foto'                          => $foto,

            );

            if($this->usuario->cadastrar('usuarios', $data)){
                $id = $this->usuario->selecionaUltimo('usuarios', 'id')->result();
                $dado = array(
                    'interno_id'         => $this->input->post('municipio'),
                    'usuario_id'         => $id[0]->id,
                );

                if($this->usuario->cadastrar('usuario_interno', $dado)){
                    $mensagem = "Usuário Cadastrado com Sucesso!";
                    $tipoMensagem = "alert-success";
                 } else {
                    $mensagem="Falha ao Cadastrar Usuário.";
                    $tipoMensagem = "alert-danger";
                }
             } else {
                $mensagem="Falha ao Cadastrar Usuário.";
                $tipoMensagem = "alert-danger";
            }
        
            if($this->session->userdata('usuario_tipo') != 1){
                $usuarios = $this->usuario->selecionaUsuarios('usuarios')->result();
                // $usuarios = $this->usuarios->selecionaUsuariosMesmaCidade('usuarios', $this->session->userdata('usuario_interno'))->result();
            } else {
                $usuarios = $this->usuario->selecionaTudo('usuarios')->result();
            }

            $dados = array(
                'pagina'        =>  NULL,
                'contents'      =>  'usuario/listar',
                'usuarios'      =>  $usuarios,
                'mensagem'      =>  $mensagem,
                'tipoMensagem'  =>  $tipoMensagem,
                'tipo'          =>  'table',
            );
        }

        $this->load->view('manager', $dados);
    }

    public function atualizar($id){
        $this->load->model('usuarios_model', 'usuario');

        if($this->usuario->procuraRegistroExistente('usuarios', $id, 'cpf', $this->input->post('cpf'))->result()){
            $dados = array(
                'mensagem'      => 'O número de CPF informado já existe em nosso banco de dados.',
                'usuarios'      => $this->usuario->selecionaPorAtributo('usuarios','escola_id', $this->session->userdata('usuario_escola'))->result(),
                'tipoMensagem'  => 'alert-danger',
                'contents'      => 'usuario/listar',
            );

        } else {
            $config['upload_path'] = './assets/imagem_usuario/';
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
            // var_dump($this->input->post('senha'));die;

            $data = array(
                'nome'                          => $this->input->post('nome'),
                'email'                         => $this->input->post('email'),
                'cpf'                           => $this->input->post('cpf'),
                'ativo'                         => $this->input->post('ativo'),
                'tipo'                          => $this->input->post('tipo'), 
                'foto'                          => $foto,
            ); 


            if(!$this->usuario->verificarSenhaFoiAlterada('usuarios', $id, 'senha', $this->input->post('senha'))->result()){
                //a senha foi alterada
                array_push($data, "senha", md5($this->input->post('senha')));
            }

            if($this->usuario->alterarPorId('usuarios', $data, $id)){
                $interno = $this->usuario->selecionaPorAtributo('usuario_interno', 'usuario_id', $id)->result();
                $dado = array(
                    'interno_id'         => $this->input->post('municipio'),
                );

                if($this->usuario->alterarPorId('usuario_interno', $dado, $interno[0]->id)){
                    $mensagem = "Usuário Atualizada com Sucesso!";
                    $tipoMensagem = "alert-success";
                 } else {
                    $mensagem="Falha ao Atualizar Usuário.";
                    $tipoMensagem = "alert-danger";
                }
                
             } else {
                $mensagem="Falha ao Atualizar Usuário.";
                $tipoMensagem = "alert-danger";
            }

            if($this->session->userdata('usuario_tipo') != 1){
                $usuarios = $this->usuario->selecionaUsuarios('usuarios')->result();
                // $usuarios = $this->usuarios->selecionaUsuariosMesmaCidade('usuarios', $this->session->userdata('usuario_interno'))->result();
            } else {
                $usuarios = $this->usuario->selecionaTudo('usuarios')->result();
            }

            $dados = array(
                'pagina'        =>  NULL,
                'contents'      =>  'usuario/listar',
                'usuarios'      =>  $usuarios,
                'mensagem'      =>  $mensagem,
                'tipoMensagem'  =>  $tipoMensagem,
                'tipo'          =>  'table',
            );
        }

        $this->load->view('manager', $dados);
    }

    public function vinculoUsuarioEscola() {
        $this->load->model('escolas_model', 'escola'); 
        $this->load->model('usuarios_model', 'usuario'); 

        if($this->session->userdata('usuario_tipo') != 1){
            $usuarios = $this->usuario->selecionaUsuarios('usuarios')->result();
        } else {
            $usuarios = $this->usuario->selecionaTudo('usuarios')->result();
        }

        $dados = array(
            'escola'        => $this->escola->selecionaTudo('escolas')->result(),
            'usuario'        => $usuarios,
            'pagina'        =>  NULL,
            'contents'      =>  'usuario/vincular',
            'mensagem'      =>  NULL,
            'tipoMensagem'  =>  NULL,
        );
        $this->load->view('manager', $dados);
    }

    public function salvarVinculo() {
        $this->load->model('usuarios_model', 'usuario'); 

        if($this->usuario->usuarioEstaVinculado('usuario_escola', $this->input->post('usuario'), $this->input->post('escola'))->result()){
            $dados = array(
                'mensagem'      => 'Este vínculo já existe em nosso banco de dados.',
                'usuarios'      => $this->usuario->selecionaUsuarios('usuarios','escola_id', $this->session->userdata('usuario_escola'))->result(),
                'tipoMensagem'  => 'alert-danger',
                'contents'      => 'usuario/listar',
            );

        } else {

            $data = array(
                'escola_id'          => $this->input->post('escola'),
                'usuario_id'         => $this->input->post('usuario'),
            );

            if($this->usuario->cadastrar('usuario_escola', $data)){
                $mensagem = "Usuário Vinculado à Escola com Sucesso!";
                $tipoMensagem = "alert-success";
             } else {
                $mensagem="Falha ao Vincular Usuário à Escola.";
                $tipoMensagem = "alert-danger";
            }
        
            $dados = array(
                'mensagem'      => $mensagem,
                'tipoMensagem'  => $tipoMensagem,
                'contents'      => 'usuario/listar',
                'usuarios'      => $this->usuario->selecionaUsuarios('usuarios','escola_id', $this->session->userdata('usuario_escola'))->result(),
                'tipo'          => 'table'
            );
        }

        $this->load->view('manager', $dados);
    }











    public function salvarAcesso(){
        $this->load->model('usuarios_model', 'usuario'); 

        $data = array(
            'nome'              => $this->input->post('nome'),
            'email'             => $this->input->post('email'),
            'cpf'               => $this->input->post('cpf'),
            'instituicao'       => $this->input->post('instituicao'),
            'estado'            => $this->input->post('estado'),
            'cidade'            => $this->input->post('cidade'),
        );

        if($this->usuario->salvarRegistro('testa_sistema', $data)){
            $mensagem = "Acesso solicitado! Em breve nosso pessoal entrará em contato.";
            $tipoMensagem = "alert-success";
         } else {
            $mensagem="Falha no processo. Favor ligar no número +55 62 98205 7562";
            $tipoMensagem = "alert-danger";
        }

        $dados = array(
            'mensagem'      => $mensagem,
            'tipoMensagem'  => $tipoMensagem,
            'contents'      => 'home',
            'tipo'          => NULL
        );

        $this->load->view('home', $dados);
    }

    public function salvarImagem($local, $input){
        $config['upload_path'] = '';
        $config['upload_path'] = './assets/'.$local.'/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size']     = '10000';
        $config['encrypt_name'] = TRUE;
        $config['file_name']      = '_';   

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if( ! $this->upload->do_upload($input)){
            $uploadedDetails    = $this->upload->display_errors();
            return NULL;
        }else{
            $uploadedDetails    = $this->upload->data();
            return $uploadedDetails["file_name"];
        }
    }

    public function acessarSistema() { 
        $this->session->set_userdata(array(
            'usuario_escola'    => $this->input->post('escola'),
        ));

        $dados = array(
            'contents' => 'admin',
            'mensagem' => null,
            'tipoMensagem' => '',
            'tipo' => 'index',
        );            
        $this->load->view('manager', $dados);
    }

    public function acessar(){
        $this->load->model('usuarios_model', 'usuario');
        $dados = array(
            'contents' => 'admin',
            'mensagem' => null,
            'tipo' => 'index',
        );              
        $this->load->view('manager', $dados);
    }    
}
