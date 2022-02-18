<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">

<div class="content-wrapper">
    <section class="content-header">
        <h1>Cadastrar Funcionário</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <!-- <h3 class="box-title">Quick Example</h3> -->
                    </div>
                    <?php echo form_open_multipart('funcionario/atualizar/'.$id=$id);  ?>
                        <div class="box-body">
                            <div class='row'>
                                <div class="form-group col-sm-6">
                                    <label>Nome</label>
                                    <input type="hidden" name="escola_id" value='<?php echo $id; ?>'>
                                    <input type="text" required name="nome" value="<?php echo $funcionario[0]->nome ; ?>" class="form-control" placeholder="Digite o Nome do Funcionário(a)">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Matrícula</label>
                                    <input type="text" required name="matricula" value="<?php echo $funcionario[0]->matricula ; ?>" class="form-control" placeholder="Digite o Número de Matrícula">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>CPF</label>
                                    <input type="text" required name="cpf" value="<?php echo $funcionario[0]->cpf ; ?>" class="form-control" placeholder="Digite o Número de CPF">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Endereço Eletrônico (E-mail)</label>
                                    <input type="email" required name="email" value="<?php echo $funcionario[0]->email ; ?>" class="form-control" placeholder="Digite o E-mail">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Cargo</label>
                                    <select name="cargo" required class="form-control select2" >
                                        <option value="" disabled selected>Selecione o Cargo do Funcionário</option>
                                        <?php 
                                        foreach ($cargos as $row){ 
                                            if ($funcionario[0]->cargo_id == $row->id){
                                                echo '<option selected value="'.$row->id .'">'.$row->descricao.'</option>';
                                            } else {
                                                echo '<option value="'.$row->id.'">'.$row->descricao.'</option>';
                                            }
                                        }?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Status</label>
                                    <select name="status" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <?php 
                                        if($funcionario[0]->status == '1'){
                                            echo '<option selected value="1">Ativo</option>';
                                            echo '<option value="0">Inativo</option>';
                                        } else {
                                            echo '<option value="1">Ativo</option>';
                                            echo '<option selected value="0">Inativo</option>';
                                        }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="<?php echo base_url('escola/listar');?>" class="btn btn-info">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js');?>"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

  });
</script>