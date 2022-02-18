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
            <small class="pull-right"><?php echo utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today'))); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <h4>Dados Escolares</h4>

      <div class="row">
        <div class="col-xs-6">
          <address>
            <strong>Educacenso: </strong><?php echo $aluno[0]->inep; ?><br>
            <strong>Data Matricula: </strong><?php echo $aluno[0]->data_matricula; ?><br>
            <strong>Turno: </strong><?php echo $aluno[0]->turno; ?><br>
            <strong>Modalidade: </strong><?php echo $aluno[0]->modalidade; ?><br>
            <strong>Programa Social: </strong><?php echo $aluno[0]->programa_social; ?><br>
            <strong>Situação Final: </strong><?php echo $aluno[0]->situacao_final; ?><br>
          </address>
        </div>
        <?php
        $escola = $this->db->get_where('escolas', array('id' => $aluno[0]->escola_id))->result();
        $escola = $escola[0];
        ?>
        <div class="col-xs-6">
          <address>
            <strong>Escola: </strong><?php echo $escola->nome; ?><br>
            <strong>Matrícula: </strong><?php echo $aluno[0]->matricula; ?><br>
            <strong>Ano Letivo: </strong><?php echo $aluno[0]->ano_letivo; ?><br>
            <strong>Utiliza Transporte Escolar: </strong><?php echo $aluno[0]->transporte_escolar; ?><br>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <h4>Dados Pessoais</h4>
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-6">
          <address>
            <strong>Nome: </strong><?php echo $aluno[0]->nome; ?><br>
            <strong>RG: </strong><?php echo $aluno[0]->rg; ?><br>
            <strong>Certidão: </strong><?php echo $aluno[0]->certidao_nascimento; ?><br>
            <strong>Nacionalidade: </strong><?php echo $aluno[0]->nacionalidade; ?><br>
            <strong>Cor: </strong><?php echo $aluno[0]->cor; ?><br>
            <strong>Estado Civil: </strong><?php echo $aluno[0]->estado_civil; ?><br>
            <strong>Renda Familiar: </strong><?php echo $aluno[0]->renda; ?><br>
            <strong>Possui Medida de Proteção: </strong><?php echo $aluno[0]->medida_protecao; ?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <address>
            <strong>CPF: </strong><?php echo $aluno[0]->cpf; ?><br>
            <strong>Data de Nascimento: </strong><?php echo $aluno[0]->data_nascimento; ?><br>
            <strong>Sexo: </strong><?php echo $aluno[0]->sexo; ?><br>
            <strong>Naturalidade: </strong><?php echo $aluno[0]->naturalidade; ?><br>
            <strong>UF Naturalidade: </strong><?php echo $aluno[0]->uf_naturalidade; ?><br>
            <strong>E-mail: </strong><?php echo $aluno[0]->email; ?><br>
            <strong>Possui Deficiência: </strong><?php echo $aluno[0]->deficiencia; ?><br>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <h4>Responsáveis</h4>
      <div class="row">
        <div class="col-xs-6">
          <address>
            <strong>Mãe: </strong><?php echo $aluno[0]->mae; ?><br>
            <strong>Responsável Matrícula: </strong><?php echo $aluno[0]->pai; ?><br>
            <strong>Bairro: </strong><?php echo $aluno[0]->bairro; ?><br>
            <strong>Logradouro: </strong><?php echo $aluno[0]->logradouro; ?><br>
            <strong>Zona: </strong><?php echo $aluno[0]->zona; ?><br>
            <strong>CEP: </strong><?php echo $aluno[0]->cep; ?><br>
            <strong>Estado: </strong><?php echo $aluno[0]->estado; ?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <address>
            <strong>Pai: </strong><?php echo $aluno[0]->celular; ?><br>
            <strong>Responsável Buscar: </strong><?php echo $aluno[0]->logradouro; ?><br>
            <strong>Número: </strong><?php echo $aluno[0]->numero; ?><br>
            <strong>Complemento: </strong><?php echo $aluno[0]->complemento; ?><br>
            <strong>Bairro: </strong><?php echo $aluno[0]->bairro; ?><br>
            <strong>Cidade: </strong><?php echo $aluno[0]->cidade; ?><br>
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