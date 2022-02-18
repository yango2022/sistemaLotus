
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
                    <?php echo form_open_multipart('turma/atualizar/'.$id=$id);  ?>
                        <div class="box-body">
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Nome da Turma</label>
                                    <input type="text" required name="nome" value="<?php echo $turma[0]->nome ; ?>" class="form-control" placeholder="Digite o Nome da Turma">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Escola</label>
                                    <select name="escola" required class="form-control select2" >
                                        <option value="" disabled selected>Selecione a Escola</option>
                                        <?php 
                                        foreach ($escolas as $row){ 
                                            if ($turma[0]->escola_id == $row->id){
                                                echo '<option selected value="'.$row->id .'">'.$row->nome.'</option>';
                                            } else {
                                                echo '<option value="'.$row->id.'">'.$row->nome.'</option>';
                                            }
                                        }?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Turno</label>
                                    <select name="turno" required class="form-control select2">
                                        <?php 
                                        if($aluno[0]->turno == 'Matutino'){
                                            echo '<option selected value="Matutino">Matutino</option>';
                                            echo '<option value="Vespertino">Vespertino</option>';
                                            echo '<option value="Noturno">Noturno</option>';
                                        } else if($aluno[0]->turno == 'Vespertino'){
                                            echo '<option value="Matutino">Matutino</option>';
                                            echo '<option selected value="Vespertino">Vespertino</option>';
                                            echo '<option value="Noturno">Noturno</option>';
                                        } else {
                                            echo '<option value="Matutino">Matutino</option>';
                                            echo '<option value="Vespertino">Vespertino</option>';
                                            echo '<option selected value="Noturno">Noturno</option>';
                                        }?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Ano Letivo</label>
                                    <input type="number" required name="ano" value="<?php echo $turma[0]->ano ; ?>" class="form-control" placeholder="Digite o Ano Letivo">
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