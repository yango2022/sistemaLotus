<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">

<div class="content-wrapper">
    <section class="content-header">
        <h1>Ambientes Escolares</h1>
    </section>
    <?php
    // var_dump($ambiente);die;
    ?>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <!-- <h3 class="box-title">Quick Example</h3> -->
                    </div>
                    <?php echo form_open_multipart('escola/salvarAmbientes/'.$id=$id);  ?>
                        <div class="box-body">
                            <div class='col-md-10'>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Sala de Aula</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="sala_aula" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->qtde_sala_aula > 0){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <input type="number" required name="qtde_sala_aula" value="<?php echo $ambiente->qtde_sala_aula; ?>" class="form-control" placeholder="Digite a Quantidade">
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Diretoria</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="diretoria" required class="form-control select2">
                                            <?php 
                                            if($ambiente->diretoria == 'Sim'){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Sala de Coordenação Pedagógica</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="coordenacao" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->coordenacao == 'Sim'){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Sala de Informática</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="sala_informatica" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->sala_informatica == 'Sim'){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Secretaria Escolar</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="sala_secretaria" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->sala_secretaria == 'Sim'){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Sala de AEE</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="sala_aee" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->sala_aee == 'Sim'){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Banheiros</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <input name='ban_masc' type="checkbox" 
                                        <?php if($ambiente->qtde_ban_masc > 0){ echo 'checked';} ?>>
                                        <label> Masculino</label><br><br>
                                        
                                        <input name='ban_fem' type="checkbox"
                                        <?php if($ambiente->qtde_ban_fem > 0){ echo 'checked';} ?>>
                                        <label> Feminino</label><br><br>
                                        
                                        <input name='ban_mis' type="checkbox"
                                        <?php if($ambiente->qtde_ban_mis > 0){ echo 'checked';} ?>>
                                        <label> Misto</label>
                                            
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <input type="number" value="<?php echo $ambiente->qtde_ban_masc; ?>" required name="qtde_ban_masc" class="form-control" placeholder="Digite a Quantidade de Banheiro(s)"><br>
                                        <input type="number" value="<?php echo $ambiente->qtde_ban_fem; ?>" required name="qtde_ban_fem" class="form-control" placeholder="Digite a Quantidade de Banheiro(s)"><br>
                                        <input type="number" value="<?php echo $ambiente->qtde_ban_mis; ?>" required name="qtde_ban_mis" class="form-control" placeholder="Digite a Quantidade de Banheiro(s)"><br>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Refeitório</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="refeitorio" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->refeitorio == 'Sim'){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Cantina</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="cantina" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->cantina == 'Sim'){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Horta</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="horta" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->horta == 'Sim'){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Parquinho</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="parque" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->parque == 'Sim'){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Corredor</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="corredor" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->corredor == 'Sim'){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Quadra</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="quadra" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->quadra == 'Sim, Coberta'){
                                                echo '<option selected value="Sim, Coberta">Sim, Coberta</option>';
                                                echo '<option value="Sim, Não Coberta">Sim, Não Coberta</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else if($ambiente->quadra == 'Sim, Não Coberta'){
                                                echo '<option value="Sim, Coberta">Sim, Coberta</option>';
                                                echo '<option selected value="Sim, Não Coberta">Sim, Não Coberta</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim, Coberta">Sim, Coberta</option>';
                                                echo '<option value="Sim, Não Coberta">Sim, Não Coberta</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Biblioteca</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="biblioteca" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->biblioteca == 'Sim'){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Sala de Leitura</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="sala_leitura" required class="form-control select2">
                                            <?php 
                                            if($ambiente->sala_leitura == 'Sim'){
                                                echo '<option selected value="Sim">Sim</option>';
                                                echo '<option value="Não">Não</option>';
                                            } else {
                                                echo '<option value="Sim">Sim</option>';
                                                echo '<option selected value="Não">Não</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='form-group col-md-4'>
                                        <label>Depósito de Merenda</label>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <select name="merenda" required class="form-control select2">
                                            <option value="" disabled selected>Selecione</option>
                                            <?php 
                                            if($ambiente->merenda == 'Perecível'){
                                                echo '<option selected value="Perecível">Perecível</option>';
                                                echo '<option value="Não Perecível">Não Perecível</option>';
                                            } else {
                                                echo '<option value="Perecível">Perecível</option>';
                                                echo '<option selected value="Não Perecível">Não Perecível</option>';
                                            }?>
                                        </select>
                                    </div>
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