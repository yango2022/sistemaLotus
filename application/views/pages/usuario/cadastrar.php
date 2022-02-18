
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">
<div class="content-wrapper">
    <section class="content-header">
        <h1>Cadastrar Usuário</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <?php echo form_open_multipart('usuarios/salvar');  ?>
                        <div class="box-body">
                            <div class='row'>
                                <div class="form-group col-sm-6">
                                    <label>Nome</label>
                                    <input type="text" required name="nome" class="form-control" placeholder="Digite o Nome">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>CPF</label>
                                    <input type="text" name="cpf" class="cpf form-control" placeholder="Digite o CPF">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Senha</label>
                                    <input type="password" name="senha" class="form-control" placeholder="Digite a Senha">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-4">
                                    <label>E-mail</label>
                                    <input type="mail" name="email" class="form-control" placeholder="Digite o E-mail">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>Tipo</label>
                                    <select name="tipo" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="2">Secretaria de Educação</option>
                                        <option value="3">Diretoria</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>Status</label>
                                    <select name="ativo" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="1">Ativo</option>
                                        <option value="0">Inativo</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-4">
                                    <label>Município</label>
                                    <select name="municipio" required class="form-control select2" >
                                        <option value="" disabled selected>Selecione o Município do Usuário</option>
                                        <?php 
                                        foreach ($interno as $row){ ?>
                                            <option value="<?php echo $row->id; ?>"><?php echo $row->municipio; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="<?php echo base_url('usuario/listar');?>" class="btn btn-info">Voltar</a>
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