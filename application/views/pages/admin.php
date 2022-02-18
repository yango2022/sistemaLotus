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
        <h1>
            Seja Bem-Vindo!
        </h1>
    </section>
    <section class="content">
    <!-- Small boxes (Stat box) -->
        <div class="row">
            <a href="<?php echo base_url('escola/listar') ?>" >
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>Escolas</h3>
                            <p>&nbsp; </p>
                        </div>
                        <div class="icon">
                            <i class="ion-ios-home"></i>
                        </div>
                        <div class="small-box-footer">Clique Aqui <i class="fa fa-arrow-circle-right"></i></div>
                    </div>
                </div>
            </a>
            <a href="<?php echo base_url('aluno/listar') ?>" >
            <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>Alunos</h3>
                            <p>&nbsp; </p>
                        </div>
                        <div class="icon">
                            <i class="ion-android-contacts"></i>
                        </div>
                        <div class="small-box-footer">Clique Aqui <i class="fa fa-arrow-circle-right"></i></div>
                    </div>
                    
                </div>
            </a>
            <a href="<?php echo base_url('turma/listar') ?>" >
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>Turmas</h3>
                            <p>&nbsp; </p>
                        </div>
                        <div class="icon">
                            <i class="ion-ios-bookmarks"></i>
                        </div>
                        <div class="small-box-footer">Clique Aqui <i class="fa fa-arrow-circle-right"></i></div>
                    </div>                    
                </div>
            </a>
            <a href="<?php echo base_url('usuarios/listar') ?>" >
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>Usuários</h3>
                            <p>&nbsp; </p>
                        </div>
                        <div class="icon">
                            <i class="ion-person"></i>
                        </div>
                        <div class="small-box-footer">Clique Aqui <i class="fa fa-arrow-circle-right"></i></div>
                    </div>
                </div>
            </a>
            <a href="<?php echo base_url('diario/inicio') ?>" >
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>Diário</h3>
                            <p>&nbsp; </p>
                        </div>
                        <div class="icon">
                            <i class="ion-ios-bookmarks"></i>
                        </div>
                        <div class="small-box-footer">Clique Aqui <i class="fa fa-arrow-circle-right"></i></div>
                    </div>                    
                </div>
            </a>
            <!-- <a href="<?php echo base_url('creche/listar') ?>" >
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>Ed. Infantil</h3>
                            <p>&nbsp; </p>
                        </div>
                        <div class="icon">
                            <i class="ion-android-contact"></i>
                        </div>
                        <div class="small-box-footer">Clique Aqui <i class="fa fa-arrow-circle-right"></i></div>
                    </div>
                    
                </div>
            </a> -->
            
        </div>
    </section>
    <div class="row">
        <div class="pull-right">
            <img style="width:90%" src="<?php echo base_url('assets/dist/img/logo_horizontal_opaca.png')?>">
        </div>
    </div>
</div>
