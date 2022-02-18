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
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3><?php echo $turma[0]->nome; ?></h3>
                            </div>
                            <div class="col-md-7">
                                <div class="box box-widget">
                                    <div class="box-body">
                                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Matrícula</th>
                                                    <th>Nome</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php         
                                                foreach ($matricula as $row){ 
                                                    $aluno =  $this->db->get_where('alunos', array('id' => $row->aluno_id));
                                                    $aluno = $aluno->result();
                                                    // var_dump($aluno[0]);die;
                                                ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $aluno[0]->matricula; ?></td>
                                                    <td><?php echo $aluno[0]->nome; ?></td>
                                                </tr>
                                                <?php
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <?php echo form_open_multipart('turma/vinculaAlunoTurma');  ?>
                                    <div class="row">
                                        <input type="hidden" name="turma_id" value='<?php echo $id; ?>'>
                                        <label>Matricula - Nome do Aluno</label>
                                        <select name="aluno" required class="form-control select2" >
                                            <option value="" disabled selected>Selecione o Aluno</option>
                                            <?php 
                                            foreach ($alunos as $row){ ?>
                                                <option value="<?php echo $row->id; ?>"><?php echo $row->matricula .' - '.$row->nome; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <br>
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                        <a href="<?php echo base_url('turma/listar');?>" class="btn btn-info">Voltar</a>
                                    </div>
                                </form>
                            </div>
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
    $(".table").DataTable();
  });
</script>