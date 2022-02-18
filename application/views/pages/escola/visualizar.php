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
            <i class="fa fa-home"></i><strong> <?php echo $escola[0]->nome; ?></strong>
            <small class="pull-right"><?php echo utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today'))); ?></small>
          </h1>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <h4>Dados Gerais</h4>

      <div class="row">
        <div class="col-xs-6">
          <address>
            <strong>INEP: </strong><?php echo $escola[0]->inep; ?><br>
            <strong>Atendimento: </strong><?php echo str_replace(' \n', ',', $escola[0]->atendimento); ?><br>
            <strong>Patrimônio: </strong><?php echo $escola[0]->patrimonio; ?><br>
            <strong>Zona: </strong><?php echo $escola[0]->zona; ?><br>
            <strong>Status: </strong><?php echo $escola[0]->status; ?><br>
            <strong>Latitude: </strong><?php echo $escola[0]->latitude; ?><br>
            <strong>Autorização de Funcionamento: </strong><?php echo $escola[0]->autorizacao_funcionamento; ?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <address>
            <strong>Nome: </strong><?php echo $escola[0]->nome; ?><br>
            <strong>E-mail: </strong><?php echo $escola[0]->email; ?><br>
            <strong>Telefone: </strong><?php echo $escola[0]->telefone; ?><br>
            <strong>Nome Diretor: </strong><?php echo $escola[0]->nome_diretor; ?><br>
            <strong>CPF Diretor: </strong><?php echo $escola[0]->cpf_diretor; ?><br>
            <strong>Longitude: </strong><?php echo $escola[0]->longitude; ?><br>
            <strong>Endereço Completo: </strong><?php echo $escola[0]->endereco; ?><br>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <?php
      if(isset($ambiente[0])){ ?>
      <hr>
      <h4>Ambientes Escolares</h4>
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-6">
          <address>
            <strong>Possui Sala de Aula: </strong><?php echo $ambiente[0]->qtde_sala_aula>0?  "Sim": "Não" ?><br>
            <strong>Diretoria: </strong><?php echo $ambiente[0]->diretoria; ?><br>
            <strong>Sala de Informática: </strong><?php echo $ambiente[0]->sala_informatica; ?><br>
            <strong>Banheiros Masculinos: </strong><?php echo $ambiente[0]->qtde_ban_masc>0?  "Sim": "Não" ?><br>
            <strong>Banheiros Femininos: </strong><?php echo $ambiente[0]->qtde_ban_fem>0?  "Sim": "Não" ?><br>
            <strong>Banheiros Mistos: </strong><?php echo $ambiente[0]->qtde_ban_mis>0?  "Sim": "Não" ?><br>
            <strong>Sala de AEE: </strong><?php echo $ambiente[0]->sala_aee; ?><br>
            <strong>Possui Cantina: </strong><?php echo $ambiente[0]->cantina; ?><br>
            <strong>Possui Parque: </strong><?php echo $ambiente[0]->parque; ?><br>
            <strong>Possui Quadra: </strong><?php echo $ambiente[0]->quadra; ?><br>
            <strong>Possui Sala de Leitura: </strong><?php echo $ambiente[0]->sala_leitura; ?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <address>
            <strong>Qtde. Sala de Aula: </strong><?php echo $ambiente[0]->qtde_sala_aula; ?><br>
            <strong>Sala de Coordenação Pedagógica: </strong><?php echo $ambiente[0]->coordenacao; ?><br>
            <strong>Secretaria Escolar: </strong><?php echo $ambiente[0]->sala_secretaria; ?><br>
            <strong>Quantidade: </strong><?php echo $ambiente[0]->qtde_ban_masc; ?><br>
            <strong>Quantidade: </strong><?php echo $ambiente[0]->qtde_ban_fem; ?><br>
            <strong>Quantidade: </strong><?php echo $ambiente[0]->qtde_ban_mis; ?><br>
            <strong>Possui Refeitório: </strong><?php echo $ambiente[0]->refeitorio; ?><br>
            <strong>Possui Horta: </strong><?php echo $ambiente[0]->horta; ?><br>
            <strong>Possui Corredor: </strong><?php echo $ambiente[0]->corredor; ?><br>
            <strong>Possui Biblioteca: </strong><?php echo $ambiente[0]->biblioteca; ?><br>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <?php } 
      if(isset($funcionarios[0])){ ?>
     <hr>
      <h4>Funcionários</h4>
      <?php
      foreach ($funcionarios as $row){
        $cargo = $this->db->get_where('cargos', array('id' => $row->cargo_id))->result();
        $cargo = $cargo[0];
      ?>
      <div class="row">
        <div class="col-xs-4">
            <strong>Matrícula: </strong><?php echo $row->matricula; ?><br>
        </div>
        <div class="col-xs-4">
            <strong>Nome: </strong><?php echo $row->nome; ?><br>
        </div>
        <div class="col-xs-4">
            <strong>Cargo: </strong><?php echo $cargo->descricao; ?><br>
        </div>
      </div>
      <?php
      }
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
          <a href="<?php echo base_url('escola/listar');?>" class="btn btn-info">Voltar</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>