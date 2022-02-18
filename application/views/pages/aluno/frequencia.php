<div class="content-wrapper">
    <section class="content-header">
        <h2>
            Visualizar
        </h2>
    </section>
 
    <section class="invoice" style="text-align: center">
        <!-- title row -->
        <div class="row" >
            <div class="col-xs-12">
                <h1 class="page-header">
                    <strong>Declaração de Frequência</strong>
                </h1>
            </div>
            <br>
            <h2 class="page-header">
                Secretaria Municipal de Educação
            </h2>
        </div>
        <h4><?php echo $escola[0]->nome; ?></h4>
        <br>
        <?php echo $escola[0]->autorizacao_funcionamento; ?>
        <br>
        <br>
        <br>
        <div class="row invoice-info">
            <div class="col-sm-12">
                <address>
                    <strong>
                        Declaro para os devidos fins que, <?php echo $aluno[0]->nome; ?>, nascido(a) no dia  <?php echo date('d/m/Y',  strtotime($aluno[0]->data_nascimento)) ?>, natural da cidade de <?php echo $aluno[0]->naturalidade; ?>,  <?php echo $aluno[0]->uf_naturalidade; ?>,filho de  <?php echo $aluno[0]->mae; ?> e de  <?php echo $aluno[0]->pai; ?>, está regularmente matriculado(a) e Frequente neste estabelecimento de ensino, no ano  <?php echo $matricula[0]->ano; ?>, no(a) <?php echo $turma[0]->nome; ?> e turno  <?php echo $turma[0]->turno; ?>.
                    </strong>
                </address>
            
                <br>
                <br>
                <strong>
                    Por ser verdade firmo a presente
                </strong>
                <br>
                <br>
                <br>
                <?php echo $interno[0]->municipio; ?>
                <br>
                <?php echo utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today'))); ?>
                <br>
                <br>
                <br>
                <br>
                <br>
                _____________________________________________________
                <br>
                <br>
                <br>
                <br>
                <br>
                <?php echo $escola[0]->telefone .' - '. $escola[0]->email; ?>
                <br>
                <?php echo $escola[0]->endereco; ?>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </section>
        <div class="row no-print">
            <div class="col-xs-12">
                <button type="button" target="_blank" class="btn btn-primary" name="imprimir" value="Imprimir" onclick="window.print();"><i class="fa fa-print"></i> Imprimir</button>
                <a href="<?php echo base_url('aluno/listar');?>" class="btn btn-info">Voltar</a>
            </div>
        </div>
    
    <!-- <div class="clearfix"></div> -->
</div>