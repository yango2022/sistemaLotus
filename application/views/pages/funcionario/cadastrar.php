<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">

<div class="content-wrapper">
    <section class="content-header">
        <h1>Cadastrar Funcionário</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <!-- <h3 class="box-title">Quick Example</h3> -->
                    </div>
                    <?php echo form_open_multipart('funcionario/salvar');  ?>
                        <div class="box-body">
                            <div class='row'>
                                <div class="form-group col-sm-6">
                                    <label>Nome</label>
                                    <input type="hidden" name="escola_id" value='<?php echo $id; ?>'>
                                    <input type="text" required name="nome" class="form-control" placeholder="Digite o Nome do Funcionário(a)">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Matrícula</label>
                                    <input type="text" required name="matricula" class="form-control" placeholder="Digite o Número de Matrícula">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>CPF</label>
                                    <input type="text" required name="cpf" class="form-control" placeholder="Digite o Número de CPF">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Endereço Eletrônico (E-mail)</label>
                                    <input type="email" required name="email" class="form-control" placeholder="Digite o E-mail">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Cargo</label>
                                    <select name="cargo" required class="form-control select2" >
                                        <option value="" disabled selected>Selecione o Cargo do Funcionário</option>
                                        <?php 
                                        foreach ($cargos as $row){ ?>
                                            <option value="<?php echo $row->id; ?>"><?php echo $row->descricao; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Status</label>
                                    <select name="status" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="1">Ativo</option>
                                        <option value="0">Inativo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="<?php echo base_url('escola/listar');?>" class="btn btn-info">Voltar</a>
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