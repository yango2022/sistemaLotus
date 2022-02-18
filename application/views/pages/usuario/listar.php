<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>">
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
        <h1>Listar Usuários</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="<?php echo base_url('usuarios/novo') ?>" class="btn btn-primary btn-md"><b>Novo Usuário</b></a>
                        <a href="<?php echo base_url('usuarios/vinculoUsuarioEscola') ?>" class="btn btn-warning btn-md"><b>Vincular Usuário à Escola</b></a>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Ação</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>E-mail</th>
                                    <th>Tipo</th>
                                    <th>Cidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php            
                                foreach ($usuarios as $row){ 
                                ?>
                                <tr class="odd gradeX">
                                    <td>
                                        <a href="<?php echo base_url('usuarios/editar/' . $id = $row->id); ?>"  class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i> Editar</a>
                                        <!-- <a href="<?php echo base_url('usuarios/visualizar/' . $id = $row->id); ?>"  class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Visualizar</a> --> 
                                    </td>
                                    <td><?php echo $row->nome; ?></td>
                                    <td><?php echo $row->cpf; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->tipo==2?'Secretária de Educação':'Diretoria'; ?>
                                    <td><?php 
                                        
                                    ?></td>
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

<script>
  $(function () {
    $(".table").DataTable();
  });
</script>