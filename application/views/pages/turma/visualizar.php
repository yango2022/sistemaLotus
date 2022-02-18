<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2>
        Visualizar
      </h2>
    </section>

    <!-- <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
      </div>
    </div> -->

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h1 class="page-header">
            <i class="fa fa-home"></i><strong> <?php echo $turma[0]->nome.' - '.$turma[0]->turno.' - '.$turma[0]->ano;?></strong>
            <small class="pull-right"><?php echo utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today'))); ?></small>
          </h1>
        </div>
        <!-- /.col -->
      </div>
      <h4>Alunos</h4>
      <?php
      foreach ($alunos as $row){
        $aluno = $this->db->get_where('alunos', array('id' => $row->aluno_id))->result();
        $aluno = $aluno[0];
      ?>
      <div class="row">
        <div class="col-xs-3">
            <strong>Matrícula: </strong><?php echo $aluno->matricula; ?><br>
        </div>
        <div class="col-xs-3">
            <strong>INEP: </strong><?php echo $aluno->inep; ?><br>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
            <strong>Nome: </strong><?php echo $aluno->nome; ?><br>
        </div>
        <!-- /.col -->
      </div>
      <?php 
      }
      ?>
      <br>
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a> -->
          <button type="button" target="_blank" class="btn btn-primary" name="imprimir" value="Imprimir" onclick="window.print();"><i class="fa fa-print"></i> Imprimir</button>
          <!-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Gerar PDF
          </button> -->
          <a href="<?php echo base_url('aluno/listar');?>" class="btn btn-info">Voltar</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>