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
        <h1>Listar Cadastros</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="<?php echo base_url('interno/novo') ?>" class="btn btn-primary btn-md"><b>Novo Cadastro</b></a>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Ação</th>
                                    <th>Município</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php            
                                foreach ($interno as $row){ 
                                ?>
                                <tr class="odd gradeX">
                                    <td>
                                        <a href="<?php echo base_url('interno/editar/' . $id = $row->id); ?>"  class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i> Editar</a>                                
                                    </td>
                                    <td><?php echo $row->municipio; ?></td>
                                    <td><?php echo $row->latitude; ?></td>
                                    <td><?php echo $row->longitude; ?></td>
                                    <td><?php echo $row->status? 'Ativo': 'Inativo'; ?></td>
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