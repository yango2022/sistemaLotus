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
          <h2 class="page-header">
            <i class="fa fa-user"></i> <?php echo $aluno[0]->nome; ?>
            <small class="pull-right"><?php echo strftime('%A, %d de %B de %Y', strtotime('today')); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <h4>Dados Gerais</h4>

      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>INEP: </strong><?php echo $aluno[0]->inep; ?><br>
            <strong>Matricula: </strong><?php echo $aluno[0]->matricula; ?><br>
            <strong>Sexo: </strong><?php echo $aluno[0]->sexo; ?><br>
            <strong>Data da Matrícula: </strong><?php echo $aluno[0]->data_matricula; ?><br>
            <strong>Turno: </strong><?php echo $aluno[0]->turno; ?><br>
            <strong>CPF: </strong><?php echo $aluno[0]->cpf; ?><br>
            <strong>RG: </strong><?php echo $aluno[0]->rg; ?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Celular: </strong><?php echo $aluno[0]->celular; ?><br>
            <strong>Logradouro: </strong><?php echo $aluno[0]->logradouro; ?><br>
            <strong>Número: </strong><?php echo $aluno[0]->numero; ?><br>
            <strong>Complemento: </strong><?php echo $aluno[0]->complemento; ?><br>
            <strong>Bairro: </strong><?php echo $aluno[0]->bairro; ?><br>
            <strong>Cidade: </strong><?php echo $aluno[0]->cidade; ?><br>
            <strong>Estado: </strong><?php echo $aluno[0]->estado; ?><br>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <h4>Ambientes alunores</h4>
      <!-- Table row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>INEP: </strong><?php echo $aluno[0]->inep; ?><br>
            <strong>Matricula: </strong><?php echo $aluno[0]->matricula; ?><br>
            <strong>Sexo: </strong><?php echo $aluno[0]->sexo; ?><br>
            <strong>Data da Matrícula: </strong><?php echo $aluno[0]->data_matricula; ?><br>
            <strong>Turno: </strong><?php echo $aluno[0]->turno; ?><br>
            <strong>CPF: </strong><?php echo $aluno[0]->cpf; ?><br>
            <strong>RG: </strong><?php echo $aluno[0]->rg; ?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Celular: </strong><?php echo $aluno[0]->celular; ?><br>
            <strong>Logradouro: </strong><?php echo $aluno[0]->logradouro; ?><br>
            <strong>Número: </strong><?php echo $aluno[0]->numero; ?><br>
            <strong>Complemento: </strong><?php echo $aluno[0]->complemento; ?><br>
            <strong>Bairro: </strong><?php echo $aluno[0]->bairro; ?><br>
            <strong>Cidade: </strong><?php echo $aluno[0]->cidade; ?><br>
            <strong>Estado: </strong><?php echo $aluno[0]->estado; ?><br>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <h4>Funcionários</h4>
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>INEP: </strong><?php echo $aluno[0]->inep; ?><br>
            <strong>Matricula: </strong><?php echo $aluno[0]->matricula; ?><br>
            <strong>Sexo: </strong><?php echo $aluno[0]->sexo; ?><br>
            <strong>Data da Matrícula: </strong><?php echo $aluno[0]->data_matricula; ?><br>
            <strong>Turno: </strong><?php echo $aluno[0]->turno; ?><br>
            <strong>CPF: </strong><?php echo $aluno[0]->cpf; ?><br>
            <strong>RG: </strong><?php echo $aluno[0]->rg; ?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Celular: </strong><?php echo $aluno[0]->celular; ?><br>
            <strong>Logradouro: </strong><?php echo $aluno[0]->logradouro; ?><br>
            <strong>Número: </strong><?php echo $aluno[0]->numero; ?><br>
            <strong>Complemento: </strong><?php echo $aluno[0]->complemento; ?><br>
            <strong>Bairro: </strong><?php echo $aluno[0]->bairro; ?><br>
            <strong>Cidade: </strong><?php echo $aluno[0]->cidade; ?><br>
            <strong>Estado: </strong><?php echo $aluno[0]->estado; ?><br>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <h4>Atendimento</h4>
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>INEP: </strong><?php echo $aluno[0]->inep; ?><br>
            <strong>Matricula: </strong><?php echo $aluno[0]->matricula; ?><br>
            <strong>Sexo: </strong><?php echo $aluno[0]->sexo; ?><br>
            <strong>Data da Matrícula: </strong><?php echo $aluno[0]->data_matricula; ?><br>
            <strong>Turno: </strong><?php echo $aluno[0]->turno; ?><br>
            <strong>CPF: </strong><?php echo $aluno[0]->cpf; ?><br>
            <strong>RG: </strong><?php echo $aluno[0]->rg; ?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Celular: </strong><?php echo $aluno[0]->celular; ?><br>
            <strong>Logradouro: </strong><?php echo $aluno[0]->logradouro; ?><br>
            <strong>Número: </strong><?php echo $aluno[0]->numero; ?><br>
            <strong>Complemento: </strong><?php echo $aluno[0]->complemento; ?><br>
            <strong>Bairro: </strong><?php echo $aluno[0]->bairro; ?><br>
            <strong>Cidade: </strong><?php echo $aluno[0]->cidade; ?><br>
            <strong>Estado: </strong><?php echo $aluno[0]->estado; ?><br>
          </address>
        </div>
        <!-- /.col -->
      </div>
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