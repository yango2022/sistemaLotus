
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">
<div class="content-wrapper">
    <section class="content-header">
        <h1>Cadastrar Turma</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <?php echo form_open_multipart('turma/salvar');  ?>
                        <div class="box-body">
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Nome da Turma</label>
                                    <input type="text" required name="nome" class="form-control" placeholder="Digite o Nome da Turma">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Escola</label>
                                    <select name="escola" required class="form-control select2" >
                                        <option value="" disabled selected>Selecione a Escola</option>
                                        <?php 
                                        foreach ($escolas as $row){ ?>
                                            <option value="<?php echo $row->id; ?>"><?php echo $row->nome; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Turno</label>
                                    <select name="turno" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Matutino">Matutino</option>
                                        <option value="Vespertino">Vespertino</option>
                                        <option value="Noturno">Noturno</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Ano Letivo</label>
                                    <input type="number" required name="ano" class="form-control" placeholder="Digite o Ano Letivo">
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="<?php echo base_url('turma/listar');?>" class="btn btn-info">Voltar</a>
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