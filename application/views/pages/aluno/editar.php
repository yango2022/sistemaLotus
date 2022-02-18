<script type="text/javascript">

    window.onload = function () {
        id('modalidade').onchange = function () {
            if (this.value == 'Educação Profissional')
                id('curso').style.display = 'block';
            else
                id('curso').style.display = 'none'
        };


        id('certidao').onchange = function () {
            if (this.value == 'Casamento' || this.value == 'Nascimento - Modelo Novo'){
                id('certidao_novo').style.display = 'block'
                id('certidao_antigo').style.display = 'none'
            }
            else {
                id('certidao_antigo').style.display = 'block'
                id('certidao_novo').style.display = 'none'
            }
                
        };
    };
    
    function id(el) {
        return document.getElementById(el);
    };

</script>

<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">
<div class="content-wrapper">
    <section class="content-header">
        <h1>Editar Aluno</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <!-- <h3 class="box-title">Quick Example</h3> -->
                    </div>
                    <?php echo form_open_multipart('aluno/atualizar/'.$id=$id);  ?>
                        <div class="box-body">
                            <div class="box-header with-border">
                                <h3 class="box-title">Dados Escolares</h3>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Educacenso</label>
                                    <input type="text" name="inep" value="<?php echo $aluno[0]->inep ; ?>" class="form-control" placeholder="Digite o código do Educa Censo">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Escola</label>
                                    <?php 
                                    if($this->session->userdata('usuario_tipo') != 3){?>
                                        <input type="text" disabled required value="<?php echo $escolas[0]->nome; ?>" class="form-control">
                                        <input type="hidden" name="escola" value="<?php echo $escolas[0]->id; ?>" class="form-control">
                                    <?php } else { ?>
                                        <select name="escola" required class="form-control select2" >
                                            <option value="" disabled selected>Selecione a Escola</option>
                                            <?php 
                                            foreach ($escolas as $row){ 
                                                if ($aluno[0]->escola_id == $row->id){
                                                    echo '<option selected value="'.$row->id .'">'.$row->nome.'</option>';
                                                } else {
                                                echo '<option value='.$row->id .'>'. $row->nome .'</option>';
                                                }
                                             } ?>
                                        </select>
                                    <?php } ?>


                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Data da Matrícula</label>
                                    <input type="date" required name="data_matricula" value="<?php echo $aluno[0]->data_matricula ; ?>" class="form-control" placeholder="Data da Matrícula">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Ano Letivo</label>
                                    <input type="number" required name="ano_letivo" value="<?php echo $aluno[0]->ano_letivo ; ?>" class="form-control" placeholder="Ano Letivo">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Turno</label>
                                    <select name="turno" required class="form-control select2"> 
                                        <?php 
                                        if($aluno[0]->turno == 'Matutino'){
                                            echo '<option selected value="Matutino">Matutino</option>';
                                            echo '<option value="Vespertino">Vespertino</option>';
                                            echo '<option value="Noturno">Noturno</option>';
                                            echo '<option value="Integral">Integral</option>';
                                        } else if($aluno[0]->turno == 'Vespertino'){
                                            echo '<option value="Matutino">Matutino</option>';
                                            echo '<option selected value="Vespertino">Vespertino</option>';
                                            echo '<option value="Noturno">Noturno</option>';
                                            echo '<option value="Integral">Integral</option>';
                                        } else if($aluno[0]->turno == 'Noturno'){
                                            echo '<option value="Matutino">Matutino</option>';
                                            echo '<option value="Vespertino">Vespertino</option>';
                                            echo '<option selected value="Noturno">Noturno</option>';
                                            echo '<option value="Integral">Integral</option>';
                                        } else {
                                            echo '<option value="Matutino">Matutino</option>';
                                            echo '<option value="Vespertino">Vespertino</option>';
                                            echo '<option value="Noturno">Noturno</option>';
                                            echo '<option selected value="Integral">Integral</option>';
                                        }?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Programa Social</label>
                                    <select name="programa_social" required class="form-control select2"> 
                                        <?php 
                                        if($aluno[0]->programa_social == 'Sim'){
                                            echo '<option selected value="Sim">Sim</option>';
                                            echo '<option value="Não">Não</option>';
                                        } else {
                                            echo '<option value="Sim">Sim</option>';
                                            echo '<option selected value="Não">Não</option>';
                                        }?>
                                    </select>

                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Utiliza Transpor Escolar</label>
                                    <select name="transporte_escolar" required class="form-control select2"> 
                                        <?php 
                                        if($aluno[0]->transporte_escolar == 'Sim'){
                                            echo '<option selected value="Sim">Sim</option>';
                                            echo '<option value="Não">Não</option>';
                                        } else {
                                            echo '<option value="Sim">Sim</option>';
                                            echo '<option selected value="Não">Não</option>';
                                        }?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Situação Final</label>
                                    <select name="turno" required class="form-control select2"> 
                                        <?php 
                                        if($aluno[0]->situacao_final == 'Ativo'){
                                            echo '<option selected value="Ativo">Ativo</option>';
                                            echo '<option value="Desistente">Desistente</option>';
                                            echo '<option value="Evadido">Evadido</option>';
                                            echo '<option value="Falecido">Falecido</option>';
                                            echo '<option value="Transferido">Transferido</option>';
                                        } else if($aluno[0]->turno == 'Desistente'){
                                            echo '<option value="Ativo">Ativo</option>';
                                            echo '<option selected value="Desistente">Desistente</option>';
                                            echo '<option value="Evadido">Evadido</option>';
                                            echo '<option value="Falecido">Falecido</option>';
                                            echo '<option value="Transferido">Transferido</option>';
                                        } else if($aluno[0]->turno == 'Evadido'){
                                            echo '<option value="Ativo">Ativo</option>';
                                            echo '<option value="Desistente">Desistente</option>';
                                            echo '<option selected value="Evadido">Evadido</option>';
                                            echo '<option value="Falecido">Falecido</option>';
                                            echo '<option value="Transferido">Transferido</option>';
                                        } else if($aluno[0]->turno == 'Falecido'){
                                            echo '<option value="Ativo">Ativo</option>';
                                            echo '<option value="Desistente">Desistente</option>';
                                            echo '<option value="Evadido">Evadido</option>';
                                            echo '<option selected value="Falecido">Falecido</option>';
                                            echo '<option value="Transferido">Transferido</option>';
                                        } else {
                                            echo '<option value="Ativo">Ativo</option>';
                                            echo '<option value="Desistente">Desistente</option>';
                                            echo '<option value="Evadido">Evadido</option>';
                                            echo '<option value="Falecido">Falecido</option>';
                                            echo '<option selected value="Transferido">Transferido</option>';
                                        }?>
                                    </select>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Modalidade</label>
                                    <select name="modalidade" id="modalidade" required class="form-control select2"> 
                                    <?php 
                                    if ($aluno[0]->modalidade == 'Educação Escolar Indígena'){
                                        echo '<option selected value="Educação Escolar Indígena">Educação Escolar Indígena</option>';
                                        echo '<option value="Educação Especial">Educação Especial</option>';
                                        echo '<option value="Educação do Campo">Educação do Campo</option>';
                                        echo '<option value="Educação Profissional">Educação Profissional</option>';
                                        echo '<option value="Ensino Regular">Ensino Regular</option>';
                                        echo '<option value="Educação de Jovens e Adultos (EJA)">Educação de Jovens e Adultos (EJA)</option>';
                                    }
                                    else if($aluno[0]->modalidade == 'Educação Especial'){
                                        echo '<option value="Educação Escolar Indígena">Educação Escolar Indígena</option>';
                                        echo '<option selected value="Educação Especial">Educação Especial</option>';
                                        echo '<option value="Educação do Campo">Educação do Campo</option>';
                                        echo '<option value="Educação Profissional">Educação Profissional</option>';
                                        echo '<option value="Ensino Regular">Ensino Regular</option>';
                                        echo '<option value="Educação de Jovens e Adultos (EJA)">Educação de Jovens e Adultos (EJA)</option>';
                                    }
                                    else if($aluno[0]->modalidade == 'Educação do Campo'){
                                        echo '<option value="Educação Escolar Indígena">Educação Escolar Indígena</option>';
                                        echo '<option value="Educação Especial">Educação Especial</option>';
                                        echo '<option selected value="Educação do Campo">Educação do Campo</option>';
                                        echo '<option value="Educação Profissional">Educação Profissional</option>';
                                        echo '<option value="Ensino Regular">Ensino Regular</option>';
                                        echo '<option value="Educação de Jovens e Adultos (EJA)">Educação de Jovens e Adultos (EJA)</option>';
                                    } 
                                    else if($aluno[0]->modalidade == 'Educação Profissional'){
                                        echo '<option value="Educação Escolar Indígena">Educação Escolar Indígena</option>';
                                        echo '<option value="Educação Especial">Educação Especial</option>';
                                        echo '<option value="Educação do Campo">Educação do Campo</option>';
                                        echo '<option selected value="Educação Profissional">Educação Profissional</option>';
                                        echo '<option value="Ensino Regular">Ensino Regular</option>';
                                        echo '<option value="Educação de Jovens e Adultos (EJA)">Educação de Jovens e Adultos (EJA)</option>';
                                    } 
                                    else if($aluno[0]->modalidade == 'Ensino Regular'){
                                        echo '<option value="Educação Escolar Indígena">Educação Escolar Indígena</option>';
                                        echo '<option value="Educação Especial">Educação Especial</option>';
                                        echo '<option value="Educação do Campo">Educação do Campo</option>';
                                        echo '<option value="Educação Profissional">Educação Profissional</option>';
                                        echo '<option selected value="Ensino Regular">Ensino Regular</option>';
                                        echo '<option value="Educação de Jovens e Adultos (EJA)">Educação de Jovens e Adultos (EJA)</option>';
                                    } else {
                                        echo '<option value="Educação Escolar Indígena">Educação Escolar Indígena</option>';
                                        echo '<option value="Educação Especial">Educação Especial</option>';
                                        echo '<option value="Educação do Campo">Educação do Campo</option>';
                                        echo '<option value="Educação Profissional">Educação Profissional</option>';
                                        echo '<option value="Educação Profissional">Educação Profissional</option>';
                                        echo '<option value="Ensino Regular">Ensino Regular</option>';
                                        echo '<option selected value="Educação de Jovens e Adultos (EJA)">Educação de Jovens e Adultos (EJA)</option>';
                                    }?>
                                    </select>
                                </div>
                                <div id="curso" style="display: none;" class="form-group col-sm-3">
                                    <label>Curso</label>
                                    <select name="curso" required class="form-control">
                                        <?php 
                                        if($aluno[0]->curso == 'Enfermagem'){
                                            echo '<option selected value="Enfermagem">Enfermagem</option>';
                                            echo '<option value="Administração">Administração</option>';
                                        } else {
                                            echo '<option value="Enfermagem">Enfermagem</option>';
                                            echo '<option selected value="Administração">Administração</option>';
                                        }?>
                                    </select>
                                </div>
                            </div>
                            <div class="box-header with-border">
                                <h3 class="box-title">Dados Pessoais</h3>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-6">
                                    <label>Nome</label>
                                    <input type="text" required name="nome" value="<?php echo $aluno[0]->nome ; ?>" class="form-control" placeholder="Digite o Nome do Aluno">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>CPF</label>
                                    <input type="text" name="cpf" class="cpf form-control" value="<?php echo $aluno[0]->cpf ; ?>" placeholder="CPF">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>RG</label>
                                    <input type="text" name="rg" class="form-control" value="<?php echo $aluno[0]->rg ; ?>" placeholder="RG">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Naturalidade</label>
                                    <input type="text" required name="naturalidade" value="<?php echo $aluno[0]->naturalidade ; ?>" class="form-control" placeholder="Naturalidade">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>UF Naturalidade</label>
                                    <input type="text" required name="uf_naturalidade" value="<?php echo $aluno[0]->uf_naturalidade ; ?>" class="form-control" placeholder="UF Naturalidade">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Sexo</label>
                                    <select name="sexo" required class="form-control select2"> 
                                    <?php 
                                    if($aluno[0]->sexo == 'Masculino'){
                                        echo '<option selected value="Masculino">Masculino</option>';
                                        echo '<option value="Feminino">Feminino</option>';
                                    } else {
                                        echo '<option value="Masculino">Masculino</option>';
                                        echo '<option selected value="Feminino">Feminino</option>';
                                    }?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Cor</label>
                                    <select name="cor" required class="form-control select2"> 
                                    <?php 
                                    if($aluno[0]->cor == 'Branco'){
                                        echo '<option selected value="Branco">Branco</option>';
                                        echo '<option value="Negro">Negro</option>';
                                        echo '<option value="Outro">Outro</option>';
                                    } else if($aluno[0]->cor == 'Negro'){
                                        echo '<option value="Branco">Branco</option>';
                                        echo '<option selected value="Negro">Negro</option>';
                                        echo '<option value="Outro">Outro</option>';
                                    } else {
                                        echo '<option value="Branco">Branco</option>';
                                        echo '<option value="Negro">Negro</option>';
                                        echo '<option selected value="Outro">Outro</option>';
                                    }?>
                                    </select>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Estado Civil</label>
                                    <select name="estado_civil" required class="form-control select2"> 
                                    <?php 
                                    if ($aluno[0]->estado_civil == 'Solteiro(a)'){
                                        echo '<option selected value="Solteiro(a)">Solteiro(a)</option>';
                                        echo '<option value="Casado(a)">Casado(a)</option>';
                                        echo '<option value="Divorciado(a)">Divorciado(a)</option>';
                                        echo '<option value="Viúvo(a)">Viúvo(a)</option>';
                                        echo '<option selected value="Outro(a)">Outro(a)</option>';
                                    }
                                    else if($aluno[0]->estado_civil == 'Casado(a)'){
                                        echo '<option value="Solteiro(a)">Solteiro(a)</option>';
                                        echo '<option selected value="Casado(a)">Casado(a)</option>';
                                        echo '<option value="Divorciado(a)">Divorciado(a)</option>';
                                        echo '<option value="Viúvo(a)">Viúvo(a)</option>';
                                        echo '<option value="Outro(a)">Outro(a)</option>';
                                    }
                                    else if($aluno[0]->estado_civil == 'Divorciado(a)'){
                                        echo '<option value="Solteiro(a)">Solteiro(a)</option>';
                                        echo '<option value="Casado(a)">Casado(a)</option>';
                                        echo '<option selected value="Divorciado(a)">Divorciado(a)</option>';
                                        echo '<option value="Viúvo(a)">Viúvo(a)</option>';
                                        echo '<option value="Outro(a)">Outro(a)</option>';
                                    } 
                                    else if($aluno[0]->estado_civil == 'Viúvo(a)'){
                                        echo '<option value="Solteiro(a)">Solteiro(a)</option>';
                                        echo '<option value="Casado(a)">Casado(a)</option>';
                                        echo '<option value="Divorciado(a))">Divorciado(a)</option>';
                                        echo '<option selected value="Viúvo(a)">Viúvo(a)</option>';
                                        echo '<option value="Outro(a)">Outro(a)</option>';
                                    } else {
                                        echo '<option value="Solteiro(a)">Solteiro(a)</option>';
                                        echo '<option value="Casado(a)">Casado(a)</option>';
                                        echo '<option value="Divorciado(a)">Divorciado(a)</option>';
                                        echo '<option value="Viúvo(a)">Viúvo(a)</option>';
                                        echo '<option selected value="Outro(a)">Outro(a)</option>';
                                    }?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Celular</label>
                                    <input type="text" required name="celular" value="<?php echo $aluno[0]->celular ; ?>" class="form-control fone" placeholder="Celular">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>E-mail</label>
                                    <input type="email" required name="email" value="<?php echo $aluno[0]->email ; ?>" class="form-control" placeholder="E-mail">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Foto</label>
                                    <input type="file" name="foto">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Renda Familiar</label>
                                    <input type="text" required name="renda" value="<?php echo $aluno[0]->renda ; ?>" class="form-control real" placeholder="Renda Familiar">
                                </div> 
                                <div class="form-group col-sm-3">
                                    <label>Possui Deficiência</label>
                                    <select name="deficiencia" required class="form-control select2">
                                        <?php if($aluno[0]->deficiencia == 'Sim'){
                                            echo '<option selected value="Sim">Sim</option>';
                                            echo '<option value="Não">Não</option>';
                                        } else {
                                            echo '<option value="Sim">Sim</option>';
                                            echo '<option selected value="Não">Não</option>';
                                        }?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Possui Medida de Proteção</label>
                                    <select name="medida_protecao" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <?php if($aluno[0]->medida_protecao == 'Sim'){
                                            echo '<option selected value="Sim">Sim</option>';
                                            echo '<option value="Não">Não</option>';
                                        } else {
                                            echo '<option value="Sim">Sim</option>';
                                            echo '<option selected value="Não">Não</option>';
                                        }?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Data Nascimento</label>
                                    <input type="date" required name="data_nascimento" value="<?php echo $aluno[0]->data_nascimento ; ?>" class="form-control" placeholder="Data de Nascimento">
                                </div>
                            </div>

                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Nacionalidade</label>
                                    <input type="text" required name="nacionalidade" value="<?php echo $aluno[0]->nacionalidade ; ?>" class="form-control" placeholder="Nacionalidade">
                                </div><div class="form-group col-sm-3">
                                    <label>Certidão</label>
                                    <select name="certidao" id="certidao" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <?php if($aluno[0]->certidao == 'Nascimento - Modelo Antigo'){
                                            echo '<option selected value="Nascimento - Modelo Antigo">Nascimento - Modelo Antigo</option>';
                                            echo '<option value="Nascimento - Modelo Novo">Nascimento - Modelo Novo</option>';
                                            echo '<option value="Casamento">Casamento</option>';

                                        } else if($aluno[0]->certidao == 'Nascimento - Modelo Novo'){
                                            echo '<option value="Nascimento - Modelo Antigo">Nascimento - Modelo Antigo</option>';
                                            echo '<option selected value="Nascimento - Modelo Novo">Nascimento - Modelo Novo</option>';
                                            echo '<option value="Casamento">Casamento</option>';

                                        } else {
                                            echo '<option value="Nascimento - Modelo Antigo">Nascimento - Modelo Antigo</option>';
                                            echo '<option value="Nascimento - Modelo Novo">Nascimento - Modelo Novo</option>';
                                            echo '<option selected value="Casamento">Casamento</option>';
                                        }?>
                                    </select>
                                </div>
                                <div id="certidao_novo" class="form-group col-sm-3" style="display: none">
                                    <label>Matricula Certidão</label>
                                    <input type="text" name="certidao_matricula" class="form-control" value="<?php echo $aluno[0]->certidao_matricula ; ?>" placeholder="Matricula da Certidão">
                                </div>
                            
                                <div id="certidao_antigo" style="display: none">
                                    <div class="form-group col-sm-3">
                                        <label>Termo</label>
                                        <input type="text" name="certidao_termo" class="form-control" value="<?php echo $aluno[0]->certidao_termo ; ?>" placeholder="Termo">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label>Livro</label>
                                        <input type="text" name="certidao_livro" class="form-control" value="<?php echo $aluno[0]->certidao_livro ; ?>" placeholder="Livro">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label>Folha</label>
                                        <input type="text" name="certidao_folha" class="form-control" value="<?php echo $aluno[0]->certidao_folha ; ?>" placeholder="Folha">
                                    </div>
                                </div>   
                            </div>
                            <div class="box-header with-border">
                                <h3 class="box-title">Responsável</h3>
                            </div>                            
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Mãe</label>
                                    <input type="text" required name="mae" value="<?php echo $aluno[0]->mae ; ?>" class="form-control" placeholder="Nome da Mãe">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Pai</label>
                                    <input type="text" required name="pai" value="<?php echo $aluno[0]->pai ; ?>" class="form-control" placeholder="Nome do Pai">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Responsável Matrícula</label>
                                    <input type="text" required name="responsavel_matricula" value="<?php echo $aluno[0]->responsavel_matricula ; ?>" class="form-control" placeholder="Responsavel Matrícula">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Responsável Buscar</label>
                                    <input type="text" required name="responsavel_buscar" value="<?php echo $aluno[0]->responsavel_buscar ; ?>" class="form-control" placeholder="Responsável Buscar">
                                </div> 
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Bairro</label>
                                    <input type="text" required name="bairro" value="<?php echo $aluno[0]->bairro ; ?>" class="form-control" placeholder="Bairro">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Complemento</label>
                                    <input type="text" required name="complemento" value="<?php echo $aluno[0]->complemento ; ?>" class="form-control" placeholder="Complemento">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Cidade</label>
                                    <input type="text" required name="cidade" value="<?php echo $aluno[0]->cidade ; ?>" class="form-control" placeholder="Cidade">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Estado</label>
                                    <input type="text" required name="estado" value="<?php echo $aluno[0]->estado ; ?>" class="form-control" placeholder="Estado">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Numero</label>
                                    <input type="text" required name="numero" value="<?php echo $aluno[0]->numero ; ?>" class="form-control" placeholder="Número">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Logradouro</label>
                                    <input type="text" required name="logradouro" value="<?php echo $aluno[0]->logradouro ; ?>" class="form-control" placeholder="Logradouro">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Zona</label>
                                    <input type="text" required name="zona" value="<?php echo $aluno[0]->zona ; ?>" class="form-control" placeholder="Zona">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>CEP</label>
                                    <input type="text" required name="cep" value="<?php echo $aluno[0]->cep ; ?>" class="cep form-control" placeholder="CEP">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="<?php echo base_url('aluno/listar');?>" class="btn btn-info">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js');?>"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

  });
</script>