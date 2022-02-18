<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo ($this->session->userdata('usuario_foto') != null) ? 
                    base_url('assets/foto_usuario/').$this->session->userdata('usuario_foto') : 
                    base_url('assets/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('usuario_nome'); ?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active">
          <a href="<?php echo base_url('usuarios/acessar'); ?>">
        <i class="fa fa-dashboard"></i> <span>Home</span>
      </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Escolas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('escola/listar'); ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
            <li><a href="<?php echo base_url('escola/novo'); ?>"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Alunos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('aluno/listar'); ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
            <li><a href="<?php echo base_url('aluno/novo'); ?>"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Turmas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('turma/listar'); ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
            <li><a href="<?php echo base_url('turma/novo'); ?>"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Usuários</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('usuarios/listar'); ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
            <li><a href="<?php echo base_url('usuarios/novo'); ?>"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
            <li><a href="<?php echo base_url('usuarios/vinculoUsuarioEscola'); ?>"><i class="fa fa-circle-o"></i> Vincular à Escola</a></li>
          </ul>
        </li>
				<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Diário</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('diario/inicio'); ?>"><i class="fa fa-circle-o"></i> Tela Inicial</i></a></li>
            <li><a href="<?php echo base_url('usuarios/novo'); ?>"><i class="fa fa-circle-o"></i> Frequência e Rendimento Escolar</a></li>
            <li><a href="<?php echo base_url('usuarios/vinculoUsuarioEscola'); ?>"><i class="fa fa-circle-o"></i> Conteúdo Programático</a></li>
						<li><a href="<?php echo base_url('usuarios/novo'); ?>"><i class="fa fa-circle-o"></i> Registro da Classe</a></li>
          </ul>
        </li>
        <?php if($this->session->userdata('usuario_tipo') == 1){ ?>
        <li>
          <a href="<?php echo base_url('interno/listar'); ?>">
            <i class="fa fa-th"></i> <span>Interno</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
