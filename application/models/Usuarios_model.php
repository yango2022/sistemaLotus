<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Usuarios_model extends CI_Model {

    public function isValidLogin($cpf, $senha){
        $sql = "SELECT *  FROM `usuarios` WHERE `cpf`='{$cpf}' AND `senha`='{$senha}' LIMIT 1";        
        $query = $this->db->query($sql);
            return $query->result();       
    }

    public function selecionaID($tabela, $id) {
        $this->db->where('id', $id);
        return $this->db->get($tabela);
    }

    public function atualizaUsuario($data, $id){
        $this->db->where('usuario_id', $id);        
        if($this->db->update('usuarios', $data)){
            return true;
        } else {
            return false;
        }
    }

    public function selecionaTudo($objeto) {

        return $this->db->get($objeto);

    }

    public function alterarPorId($tabela, $data, $id){
        $this->db->where('id', $id);
        if($this->db->update($tabela, $data)) {
            return true;
        } else {
            return false;
        }
    }
##########################################
    public function selecionaUsuariosMesmaCidade($tabela, $interno) {
        
        $this->db->where('interno_id', $interno);
        $cidade = $this->db->get('usuario_interno');
        $cidade = $plano->result();

        $this->db->where('id', $interno);
        return $this->db->get($tabela);
    }
##########################################

    public function selecionaUsuarios($tabela, $atributo=null, $valor=null){
        // $this->db->where($atributo, $valor);
        $this->db->where('tipo !=', 1);
        return $this->db->get($tabela);
    }

    public function usuarioEstaVinculado($tabela, $usuario, $escola) {
        $this->db->where('usuario_id', $usuario);
        $this->db->where('escola_id', $escola);
        return $this->db->get($tabela);
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

    public function selecionaPorAtributo($tabela, $atributo, $valor){
        $this->db->where($atributo, $valor);
        return $this->db->get($tabela);
    }

    public function selecionaTodos($tabela){
        return $this->db->get($tabela);
    }

    public function salvarRegistro($tabela, $dados){
        return $this->db->insert($tabela, $dados);
    }

    public function selecionaTipoUsuario($tabela){
        $this->db->where('id >', 1); 
        return $this->db->get($tabela);
    }

    public function totalTabela($tabela){
        return $this->db->count_all_results($tabela);
    }

    public function totalTabelaPorAtributo($tabela, $atributo, $valor){
        $this->db->where($atributo, $valor);
        return $this->db->count_all_results($tabela);
    }

    public function procuraRegistroExistente($tabela, $id=null, $campo, $valor){
        
        $this->db->where($campo, $valor);
        if($id != null){
            $this->db->where('id !=', $id);
        }
        return $this->db->get($tabela);
    }

    public function verificarSenhaFoiAlterada($tabela, $id=null, $campo, $valor){
        
        $this->db->where($campo, $valor);
        if($id != null){
            $this->db->where('id', $id);
        }
        return $this->db->get($tabela);
    }

    public function selecionaUltimo($objeto, $coluna){
        $this->db->select_max($coluna);
        return $this->db->get($objeto);
    }
}