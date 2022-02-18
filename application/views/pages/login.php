<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img style="width:80%" src="<?php echo base_url('assets/dist/img/logo_horizontal.png')?>">
        </div>
        <div class="login-box-body">
            <p class="login-box-msg input-lg">Seja Bem-Vindo!</p>
            <?php
                if ($mensagem !== NULL){ 
                echo '<div class="alert '.$tipoMensagem.' alert-dismissible" role="alert">'; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $mensagem; ?>
                </div>
            <?php } ?>
            <form method="post" action="<?php echo base_url('home/escolherEscola') ?>" class="form-input-flat">
                <div class="form-group has-feedback">
                    <input type="text" name="cpf" class="cpf form-control input-lg" placeholder="CPF">
                    <span class="fa fa-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="senha" class="form-control input-lg" placeholder="Senha">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <br />
                    <button type="submit" class="btn btn-primary btn-block btn-flat input-lg">Entrar</button>
                </div>
            </form>
            <br />
        <a href="<?php echo base_url('home/esqueciMinhaSenha') ?>">Esqueci minha senha</a><br>
        <a href="<?php echo base_url('home/solicitarAcesso') ?>" class="text-center">Quero ter Acesso</a>

        </div>
        </div>
    </div>