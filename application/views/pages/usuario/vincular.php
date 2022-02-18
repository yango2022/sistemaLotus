<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">
<div class="content-wrapper">
    <section class="content-header">
        <!-- <h1>Detalhes de <?php echo $turma[0]->nome; ?></h1> -->
    </section>

    <section class="content">
        <div class="row">
            <?php
                if ($mensagem !== NULL){ 
                echo '<div class="alert '.$tipoMensagem.' alert-dismissible" role="alert">'; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $mensagem; ?>
                </div>
            <?php } ?>
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <!-- <h3 class="box-title">Quick Example</h3> -->
                    </div>
                    <div class="box-body">
                        <div class="col-md-12">
                            <?php echo form_open_multipart('usuarios/salvarVinculo');  ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box box-widget">
                                            <div class="box-body">
                                                <label>Escolas</label>
                                                <select name="escola" required class="form-control select2" >
                                                    <option value="" disabled selected>Selecione a Escola</option>
                                                    <?php 
                                                    foreach ($escola as $row){ ?>
                                                        <option value="<?php echo $row->id; ?>"><?php echo $row->nome; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box box-widget">
                                            <div class="box-body">
                                                <label>Usuários</label>
                                                <select name="usuario" required class="form-control select2" >
                                                    <option value="" disabled selected>Selecione o Usuário</option>
                                                    <?php 
                                                    foreach ($usuario as $row){ ?>
                                                        <option value="<?php echo $row->id; ?>"><?php echo $row->nome; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <a href="<?php echo base_url('usuarios/listar');?>" class="btn btn-info">Voltar</a>
                                </div>
                            </form>
                        </div>
                    </div>
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