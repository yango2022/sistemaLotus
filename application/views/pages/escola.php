<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img style="width:80%" src="<?php echo base_url('assets/dist/img/logo_horizontal.png')?>">
        </div>
        <div class="login-box-body">
            <p class="login-box-msg input-lg">Selecione a Unidade Escolar</p>
            <?php
                if ($mensagem !== NULL){ 
                echo '<div class="alert '.$tipoMensagem.' alert-dismissible" role="alert">'; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $mensagem; ?>
                </div>
            <?php } ?>
            <form method="post" action="<?php echo base_url('usuarios/acessarSistema') ?>" class="form-input-flat">
                <div class="form-group has-feedback">
                    <input type="text" disabled class="form-control input-lg"  value="<?php echo $nome; ?>">
                </div>
                <div class="form-group has-feedback">
                    <select name="escola" required class="form-control input-lg" data-parsley-group="wizard-step-1">
                        <option value="" disabled selected>Selecione a Escola</option>
                        <?php 
                        foreach ($escolas as $row){
                            if($this->session->userdata('usuario_tipo') == 3) {
                                $item = $this->db->get_where('escolas', array('id' => $row->escola_id));
                                $item = $item->result();

                                echo '<option value='.$item[0]->id.'>'. $item[0]->nome .'</option>';
                            } else {
                                echo '<option value='.$row->id.'>'. $row->nome .'</option>';
                            }
                         } ?>
                    </select>
                </div>
                <div class="row">
                    <br />
                    <button type="submit" class="btn btn-primary btn-block btn-flat input-lg">Entrar</button>
                </div>
            </form>
            <br />
        </div>
    <!-- /.login-box-body -->
        </div>
    </div>