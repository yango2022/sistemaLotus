<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>">
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
                    <?php echo form_open_multipart('turma/transfereAlunoTurma/'.$id=$id);  ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <h3><?php echo $aluno[0]->nome; ?></h3>
                                        <label>Turmas</label>
                                        <input type="hidden" name="aluno" value='<?php echo $aluno[0]->id; ?>'>
                                        <select name="turma" required class="form-control select2" >
                                            <option value="" disabled selected>Selecione a Turma</option>
                                            <?php 
                                            foreach ($turmas as $row){ ?>
                                                <option value="<?php echo $row->id; ?>"><?php echo $row->nome; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                        <a href="<?php echo base_url('turma/listar');?>" class="btn btn-info">Voltar</a>
                                    </div>
                                </div>
                            </div>
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
    $(".table").DataTable();
  });
</script>