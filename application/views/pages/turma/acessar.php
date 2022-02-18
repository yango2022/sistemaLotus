<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>">
<div class="content-wrapper">
    <section class="content-header">
        <!-- <h1>Detalhes de <?php echo $turma[0]->nome; ?></h1> -->
    </section>

    <section class="content">
        <div class="row">
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
                            <div class="col-md-9">
                                <div class="box box-widget">
                                    <div class="box-body">
                                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Ação</th>
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
                                                    <td>
                                                        <a href="<?php echo base_url('turma/transferir/' . $id = $row->id); ?>"  class="btn btn-primary btn-xs"><i class="fa fa-share"></i> Transferir</a>
                                                    </td>
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
                            <div class="col-md-3">
                               <!--  <div class="row">
                                    
                                </div> -->
                                <div class="row">
                                    <a href="<?php echo base_url('turma/editar/' . $id = $uid); ?>" >
                                        <div class="info-box">
                                            <span class="info-box-icon bg-aqua"><i class="fa fa-pencil-square-o"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-number">Editar Turma</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="<?php echo base_url('turma/visualizar/' . $id = $uid); ?>">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-green"><i class="fa fa-print"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-number">Imprimir</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="<?php echo base_url('turma/alunos/' . $id = $uid); ?>">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-number">Adicionar Aluno</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- <div class="row">
                                    <a href="<?php echo base_url('funcionario/listar/' . $id = $id); ?>">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-primary"><i class="fa fa-users"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-number">Funcionários</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="<?php echo base_url('turma/atendimento/' . $id = $id); ?>">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-number">Atendimento</span>
                                            </div>
                                        </div>
                                    </a>
                                </div> -->

                        </div>
                    </div>   
                    <a href="<?php echo base_url('turma/listar');?>" class="btn btn-info">Voltar</a>   
                </div>

            </div>
        </div>
    </section>
</div>

<script>
  $(function () {
    $(".table").DataTable();
  });
</script>