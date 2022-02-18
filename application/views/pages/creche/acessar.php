<div class="content-wrapper">
    <section class="content-header">
        <!-- <h1>Detalhes de <?php echo $aluno[0]->nome; ?></h1> -->
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
                                <h3><?php echo $aluno[0]->nome; ?></h3>
                            </div>
                            <div class="col-md-7">
                                <div class="box box-widget">
                                    <div class="box-body">
                                        <?php 
                                            if($aluno[0]->foto == null){
                                                echo '<img class="img-responsive pad" style="max-width: 500px" src="'.base_url('assets/dist/img/logo_vertical_branco.png').'" alt="Photo" >';
                                            } else {
                                                echo '<img class="img-circle" src="'.base_url('assets/imagem_aluno/'.$aluno[0]->foto).'" alt="" style="max-width: 500px">';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                               <!--  <div class="row">
                                    
                                </div> -->
                                <div class="row">
                                    <a href="<?php echo base_url('aluno/editar/' . $id = $id); ?>" >
                                        <div class="info-box">
                                            <span class="info-box-icon bg-aqua"><i class="fa fa-pencil-square-o"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-number">Editar</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="<?php echo base_url('aluno/visualizar/' . $id = $id); ?>">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-green"><i class="fa fa-print"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-number">Visualizar Cadastro</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php if($matricula != null) { ?>
                                <div class="row">
                                    <a href="<?php echo base_url('aluno/matricula/' . $id = $id); ?>">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-yellow"><i class="fa fa-file-text-o"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-number">Declaração de Matrícula</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="<?php echo base_url('aluno/frequencia/' . $id = $id); ?>">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-primary"><i class="fa fa-file-text-o"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-number">Declaração de Frequência</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                                <!-- <div class="row">
                                    <a href="<?php echo base_url('aluno/atendimento/' . $id = $id); ?>">
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
                    <a href="<?php echo base_url('aluno/listar');?>" class="btn btn-info">Voltar</a>   
                </div>

            </div>
        </div>
    </section>
</div>