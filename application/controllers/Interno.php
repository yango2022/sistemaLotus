<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interno extends CI_Controller {

	public function __construct() {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
           redirect('home/logoff'); 
    }

    public function listar() {
        $this->load->model('escolas_model', 'escolas'); 
        $dados = array(
            'pagina'        =>  NULL,
            'contents'      =>  'interno/listar',
            'mensagem'      =>  NULL,
            'tipoMensagem'  =>  NULL,
            'interno'       =>  $this->escolas->selecionaTudo('interno')->result(),
        );
        $this->load->view('manager', $dados);
    }

    public function novo() {
        $dados = array(
            'pagina'        =>  NULL,
            'contents'      =>  'interno/cadastrar',
        );
        $this->load->view('manager', $dados);
    }

    public function editar($id) {
        $this->load->model('escolas_model', 'escolas'); 
        $dados = array(
            'pagina'        =>  NULL,
            'contents'      =>  'interno/interno',
            'mensagem'      =>  NULL,
            'tipoMensagem'  =>  NULL,
            'id'            =>  $id,
            'interno'       =>  $this->escolas->selecionaTudo('interno')->result(),
        );
        $this->load->view('manager', $dados);
    }

	public function salvar() {
        $this->load->model('escolas_model', 'escolas'); 

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

        $data = array(
            'municipio'                 => $this->input->post('municipio'),
            'latitude'                  => $this->input->post('latitude'),
            'longitude'                 => $this->input->post('longitude'),
            'status'                    => $this->input->post('status'),
            'foto'                      => $foto,
        );

        if($this->escolas->cadastrar('interno', $data)){
            $mensagem = "Interno Cadastrado com Sucesso!";
            $tipoMensagem = "alert-success";
         } else {
            $mensagem="Falha ao Cadastrar Interno.";
            $tipoMensagem = "alert-danger";
        }
    
        $dados = array(
            'mensagem'      => $mensagem,
            'tipoMensagem'  => $tipoMensagem,
            'contents'      => 'interno/listar',
            'interno'       =>  $this->escolas->selecionaTudo('interno')->result(),
            'tipo'          => 'table'
        );

        $this->load->view('manager', $dados);
    }

    public function atualizar($id) {
        $this->load->model('escolas_model', 'escolas'); 

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

        $data = array(
            'municipio'                 => $this->input->post('municipio'),
            'latitude'                  => $this->input->post('latitude'),
            'longitude'                 => $this->input->post('longitude'),
            'status'                    => $this->input->post('status'),
            'foto'                      => $foto,
        );

        if($this->escolas->alterarPorId('interno', $data, $id)){
            $mensagem = "Interno Atualizado com Sucesso!";
            $tipoMensagem = "alert-success";
         } else {
            $mensagem="Falha ao Atualizar Interno.";
            $tipoMensagem = "alert-danger";
        }
    
        $dados = array(
            'mensagem'      => $mensagem,
            'tipoMensagem'  => $tipoMensagem,
            'contents'      => 'interno/listar',
            'interno'       =>  $this->escolas->selecionaTudo('interno')->result(),
            'tipo'          => 'table'
        );

        $this->load->view('manager', $dados);
    }

    
}
