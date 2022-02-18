
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">
<div class="content-wrapper">
    <section class="content-header">
        <h1>Cadastrar Aluno</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <?php echo form_open_multipart('aluno/salvar');  ?>
                        <div class="box-body">
                            <div class="box-header with-border">
                                <h3 class="box-title">Dados Escolares</h3>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Educacenso</label>
                                    <input type="text" required name="inep" class="form-control" placeholder="Digite o código do Educa Censo">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Escola</label>
                                    <?php 
                                    if($this->session->userdata('usuario_tipo') == 3){?>
                                        <input type="text" disabled required name="escola" value="<?php echo $escolas[0]->nome; ?>" class="form-control">
                                    <?php } else { ?>
                                        <select name="escola" required class="form-control select2" >
                                            <option value="" disabled selected>Selecione a Escola</option>
                                            <?php 
                                            foreach ($escolas as $row){ 
                                                echo '<option value='.$row->id .'>'. $row->nome .'</option>';
                                             } ?>
                                        </select>
                                    <?php } ?>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Data da Matrícula</label>
                                    <input type="date" required name="data_matricula" class="form-control" placeholder="Data da Matrícula">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Ano Letivo</label>
                                    <input type="number" required name="ano_letivo" class="form-control" placeholder="Ano Letivo">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Turno</label>
                                    <select name="turno" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Matutino">Matutino</option>
                                        <option value="Vespertino">Vespertino</option>
                                        <option value="Noturno">Noturno</option>
                                        <option value="Integral">Integral</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Programa Social</label>
                                    <select name="programa_social" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Sim">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Modalidade</label>
                                    <select name="modalidade" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Ensino Regular">Ensino Regular</option>
                                        <option value="Educação Escolar Indígena">Educação Escolar Indígena</option>
                                        <option value="Educação Especial">Educação Especial</option>
                                        <option value="Educação de Jovens e Adultos (EJA)">Educação de Jovens e Adultos (EJA)</option>
                                        <option value="Educação do Campo">Educação do Campo</option>
                                        <option value="Educação Profissional">Educação Profissional</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Utiliza Transporte Escolar</label>
                                    <select name="transporte_escolar" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Sim">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Situação Final</label>
                                    <select name="situacao_final" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Ativo">Ativo</option>
                                        <option value="Desistente">Desistente</option>
                                        <option value="Evadido">Evadido</option>
                                        <option value="Falecido">Falecido</option>
                                        <option value="Transferido">Transferido</option>
                                    </select>
                                </div>
                            </div>
                            <div class="box-header with-border">
                                <h3 class="box-title">Dados Pessoais</h3>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-6">
                                    <label>Nome</label>
                                    <input type="text" required name="nome" class="form-control" placeholder="Digite o Nome do Aluno">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>CPF</label>
                                    <input type="text" name="cpf" class="cpf form-control" placeholder="CPF">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>RG</label>
                                    <input type="text" name="rg" class="form-control" placeholder="RG">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Certidão de Nascimento</label>
                                    <input type="text" name="certidao_nascimento" class="form-control" placeholder="Certidão de Nascimento">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Certidão Casamento</label>
                                    <input type="text" name="certidao_casamento" class="form-control" placeholder="Certidao Casamento">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Data Nascimento</label>
                                    <input type="date" required name="data_nascimento" class="form-control" placeholder="Data de Nascimento">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Nacionalidade</label>
                                    <input type="text" required name="nacionalidade" class="form-control" placeholder="Nacionalidade">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Naturalidade</label>
                                    <input type="text" required name="naturalidade" class="form-control" placeholder="Naturalidade">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>UF Naturalidade</label>
                                    <input type="text" required name="uf_naturalidade" class="form-control" placeholder="UF Naturalidade">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Sexo</label>
                                    <select name="sexo" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Cor</label>
                                    <select name="cor" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Branco">Branco</option>
                                        <option value="Negro">Negro</option>
                                        <option value="Outro">Outro</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Estado Civil</label>
                                    <select name="estado_civil" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Solteiro(a)">Solteiro(a)</option>
                                        <option value="Casado(a)">Casado(a)</option>
                                        <option value="Divorciado(a)">Divorciado(a)</option>
                                        <option value="Viúvo(a)">Viúvo(a)</option>
                                        <option value="Outro(a)">Outro(a)</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Celular</label>
                                    <input type="text" required name="celular" class="form-control" placeholder="Celular">
                                </div>  
                                <div class="form-group col-sm-3">
                                    <label>E-mail</label>
                                    <input type="email" required name="email" class="form-control" placeholder="E-mail">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Foto</label>
                                    <input type="file" name="foto">
                                </div>
                            </div>
                            <div class="box-header with-border">
                                <h3 class="box-title">Responsável</h3>
                            </div>                            
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Mãe</label>
                                    <input type="text" required name="mae" class="form-control" placeholder="Nome da Mãe">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Pai</label>
                                    <input type="text" required name="pai" class="form-control" placeholder="Nome do Pai">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Responsável Matrícula</label>
                                    <input type="text" required name="responsavel_matricula" class="form-control" placeholder="Responsavel Matrícula">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Responsável Buscar</label>
                                    <input type="text" required name="responsavel_buscar" class="form-control" placeholder="Responsável Buscar">
                                </div>
                            </div>
                            <div class="box-header with-border">
                                <h3 class="box-title">Endereço</h3>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Bairro</label>
                                    <input type="text" required name="bairro" class="form-control" placeholder="Bairro">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Complemento</label>
                                    <input type="text" required name="complemento" class="form-control" placeholder="Complemento">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Cidade</label>
                                    <input type="text" required name="cidade" class="form-control" placeholder="Cidade">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Estado</label>
                                    <input type="text" required name="estado" class="form-control" placeholder="Estado">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Numero</label>
                                    <input type="text" required name="numero" class="form-control" placeholder="Número">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Logradouro</label>
                                    <input type="text" required name="logradouro" class="form-control" placeholder="Logradouro">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Zona</label>
                                    <input type="text" required name="zona" class="form-control" placeholder="Zona">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>CEP</label>
                                    <input type="text" required name="cep" class="cep form-control" placeholder="CEP">
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