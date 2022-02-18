<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Alunos_model extends CI_Model {

    public function selecionaTudo($objeto) {

        return $this->db->get($objeto);

    }

    public function cadastrar($tabela, $data){
        if($data!=NULL){
            if($this->db->insert($tabela, $data)){
                return true;
            } else {
                return false;
            }
        }
    }

    public function selecionaID($tabela, $id) {
        $this->db->where('id', $id);
        return $this->db->get($tabela);
    }

    public function selecionaPorAtributo($tabela, $atributo, $valor){
        $this->db->where($atributo, $valor);
        return $this->db->get($tabela);
    }

    public function selecionaPorAtributoCreche($tabela, $atributo, $valor){
        $this->db->where($atributo, $valor);
        $this->db->order_by("renda", "asc");  
        return $this->db->get($tabela);
    }

    public function alterarPorId($tabela, $data, $id){
        $this->db->where('id', $id);
        if($this->db->update($tabela, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function procuraRegistroExistente($tabela, $id=null, $campo, $valor){
        
        $this->db->where($campo, $valor);
        if($id != null){
            $this->db->where('id !=', $id);
        }
        return $this->db->get($tabela);
    }
    
    public function selecionaUltimo($objeto, $coluna){
        $this->db->select_max($coluna);
        return $this->db->get($objeto);
    }  

    public function alunoEstaMatriculado($tabela, $aluno, $turma) {
        $this->db->where('aluno_id', $aluno);
        $this->db->where('turma_id', $turma);
        return $this->db->get($tabela);
    }
}