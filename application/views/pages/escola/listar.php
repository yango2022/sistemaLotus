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
        <h1>Listar Escolas</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="<?php echo base_url('escola/novo') ?>" class="btn btn-primary btn-md"><b>Nova Escola</b></a>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Ação</th>
                                    <th>INEP</th>
                                    <th>Nome</th>
                                    <th>Atendimento</th>
                                    <th>Zona</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php            
                                foreach ($escolas as $row){ 
                                    if($this->session->userdata('usuario_tipo') == 3) {
                                        $row = $this->db->get_where('escolas', array('id' => $row->escola_id))->result();
                                        $row = $row[0];
                                    }
                                ?>
                                <tr class="odd gradeX">
                                    <td>
                                        <!-- <a href="<?php echo base_url('escola/editar/' . $id = $row->id); ?>"  class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i> Editar</a>
                                        <a href="<?php echo base_url('escola/visualizar/' . $id = $row->id); ?>"  class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Visualizar</a>   -->  

                                        <a href="<?php echo base_url('escola/acessar/' . $id = $row->id); ?>"  class="btn btn-info btn-xs"><i class="fa fa-share"></i> Acessar</a>                                    
                                    </td>
                                    <td><?php echo $row->inep; ?></td>
                                    <td><?php echo $row->nome; ?></td>
                                    <td><?php echo str_replace(' \n', ',', $row->atendimento); ?></td> 
                                    <td><?php echo $row->zona; ?></td>
                                    <td><?php echo $row->status; ?></td>
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