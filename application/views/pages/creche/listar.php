<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
        if ($mensagem !== NULL){ 
        echo '<div class="alert '.$tipoMensagem.' alert-dismissible" role="alert">'; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $mensagem; ?>
        </div>
    <?php } ?>
    <section class="content-header">
        <h1>Listar Alunos</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Filtro Avançado</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body container">
                            <?php echo form_open_multipart('creche/filtrar');  ?>
                                <label>Renda Familiar</label>
                                <div class='row'>
                                    <div class="form-group col-sm-5">
                                        <input type="text" required name="v_inicial" class="form-control real" placeholder="Valor Inicial">
                                    </div>
                                    <label> até </label>
                                    <div class="form-group col-sm-5">
                                        <input type="text" required name="v_final" class="form-control real" placeholder="Valor Final">
                                    </div>
                                </div>
                                <label>Data de Nascimento</label>
                                <div class='row'>
                                    <div class="form-group col-sm-5">
                                        <input type="date" required name="dt_inicial" class="form-control" placeholder="Data da Matrícula">
                                    </div>
                                    <label> até </label>
                                    <div class="form-group col-sm-5">
                                        <input type="date" required name="dt_final" class="form-control" placeholder="Data da Matrícula">
                                    </div>
                                </div>
                                <label>Beneficiário de Programa Social</label>
                                <div class='row'>
                                    <div class="form-group col-sm-12">
                                        <select name="prog_social" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <option value="Sim">Sim</option>
                                            <option value="Não">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <label>Possui Alguma Deficiência</label>
                                <div class='row'>
                                    <div class="form-group col-sm-12">
                                        <select name="deficiencia" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <option value="Sim">Sim</option>
                                            <option value="Não">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <label>Possui Medida de Proteção</label>
                                <div class='row'>
                                    <div class="form-group col-sm-12">
                                        <select name="medida_protecao" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <option value="Sim">Sim</option>
                                            <option value="Não">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary"><b>Filtrar</b></button>
                            </form>
                        </div>
                    </div>

                    <div class="box-header">
                        <a href="<?php echo base_url('aluno/novo') ?>" class="btn btn-primary btn-md"><b>Novo Aluno</b></a>
                    </div>
                    <div class="content">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Ação</th>
                                    <th>Educacenso</th>
                                    <th>Matricula</th>
                                    <th>Nome</th>
                                    <th>Responsável Buscar</th>
                                    <th>Situação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php            
                                foreach ($alunos as $row){ 
                                ?>
                                <tr class="odd gradeX">
                                    <td>
                                        <!-- <a href="<?php echo base_url('aluno/editar/' . $id = $row->id); ?>"  class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i> Editar</a>
                                        <a href="<?php echo base_url('aluno/visualizar/' . $id = $row->id); ?>"  class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Visualizar</a>   -->
                                        <a href="<?php echo base_url('aluno/acessar/' . $id = $row->id); ?>"  class="btn btn-info btn-xs"><i class="fa fa-arrow-left"></i> Transferir</a>  
                                    </td>
                                    <td><?php echo $row->inep; ?></td>
                                    <td><?php echo $row->matricula; ?></td>
                                    <td><?php echo $row->nome; ?></td>
                                    <td><?php echo $row->responsavel_buscar; ?></td>
                                    <td><?php echo $row->situacao_final; ?></td>
                                </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                <!-- /.box-body -->
                </div>
             <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js');?>"></script>
<script>
  $(function () {
    $(".table").DataTable();
    $(".select2").select2();
  });
</script>
