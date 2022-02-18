<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHGg_BRyRBNwdJx2BzcSQdvmABtf4sUvs&sensor=true"></script>
<?php 
// var_dump(json_encode($municipio[0], JSON_UNESCAPED_UNICODE));die;
?>

<script src="<?php echo base_url('assets/custom/google_maps_autocomplete.js'); ?>"></script>

<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/custom/google_maps_autocomplete.css')?>">

<div class="content-wrapper">
    <section class="content-header">
        <h1>Cadastrar Escola</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <!-- <h3 class="box-title">Quick Example</h3> -->
                    </div>
                    <?php echo form_open_multipart('escola/salvar');  ?>
                        <div class="box-body">
                            <div class='row'> 
                                <input type="hidden" id="internoLat" value="<?php echo $municipio[0]->latitude; ?>" readonly>
                                <input type="hidden" id="internoLon" value="<?php echo $municipio[0]->longitude; ?>" readonly>
                                <div class="form-group col-sm-2">
                                    <label>Código INEP</label>
                                    <input type="text" name="inep" class="form-control" placeholder="Digite o código INEP da Escola">
                                </div>
                                <div class="form-group col-sm-5">
                                    <label>Nome</label>
                                    <input type="text" required name="nome" class="form-control" placeholder="Digite o Nome da Unidade Escolar">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>CNPJ</label>
                                    <input type="text" name="cnpj" class="form-control" placeholder="Digite o CNPJ da Escola">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Autorização de Funcionamento</label>
                                    <input type="text" required name="autorizacao_funcionamento" class="form-control" placeholder="Autorização de Funcionamento">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-3">
                                    <label>Endereço Eletrônico (E-mail)</label>
                                    <input type="email" required name="email" class="form-control" placeholder="E-mail">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Foto de Fachada</label>
                                    <input type="file" name="foto">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Status</label>
                                    <select name="status" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Ativa">Ativa</option>
                                        <option value="Inativa">Inativa</option>
                                        <option value="Paralisada">Paralisada</option>
                                        <option value="Extinta">Extinta</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Atendimento</label>
                                    <select name="atendimento[]" required class="form-control select2" multiple="multiple"> 
                                    <!-- name="atendimento[]" para pegar o array de todas as opçoes -->
                                        <option value="Educação Infantil \n">Educação Infantil</option> 
                                        <option value="Creche \n">Creche</option>
                                        <option value="Educação Infantil/Pré Escola \n ">Educação Infantil/Pré Escola</option>
                                        <option value="Ensino Fundamental Anos Iniciais \n ">Ensino Fundamental Anos Iniciais</option>
                                        <option value="Ensino Fundamental Anos Finais \n ">Ensino Fundamental Anos Finais</option>
                                        <option value="EJA / Anos Iniciais \n ">EJA / Anos Iniciais</option>
                                        <option value="EJA / Anos Finais \n ">EJA / Anos Finais</option>
                                        <option value="Educação Profissional \n ">Educação Profissional</option>
                                    </select>
                                </div>
                                <!-- <div class="form-group col-sm-3">
                                    <label>Atendimento</label>
                                    <select name="atendimento" required class="form-control select2" multiple="multiple">
                                        <?php
                                        foreach ($atendimento as $row){ 
                                            ?>
                                            <option value="<?php echo $row->descricao; ?>"><?php echo $row->descricao; ?></option>
                                        <?php } ?>
                                   
                                    </select>
                                </div> -->
                            </div>
                            <div class='row'>
                                <div class="form-group col-sm-2">
                                    <label>Patrimônio</label>
                                    <select name="patrimonio" required class="form-control select2"> 
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Próprio">Próprio</option> 
                                        <option value="Alugado">Alugado</option>
                                        <option value="Cedido">Cedido</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>Zona</label>
                                    <select name="zona" required class="form-control select2"> 
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="Urbana">Urbana</option> 
                                        <option value="Rural">Rural</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>Telefone</label>
                                    <input type="text" required name="telefone" class="fone form-control" placeholder="Telefone">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Nome do(a) Diretor(a)</label>
                                    <input type="text" required name="nome_diretor" class="form-control" placeholder="Nome do(a) Diretor(a)">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>CPF do(a) Diretor(a)</label>
                                    <input type="text" required name="cpf_diretor" class="cpf form-control" placeholder="CPF do(a) Diretor(a)">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-lg-3">
                                    <label>Latitude:</label><span class="text-danger">*</span>
                                    <input class="form-control"  type="text" name="latitude" id="txtLatitude" required value="<?php echo set_value('latitude');?>" readonly>
                                </div>

                                <div class="col-lg-3">
                                    <label>Longitude:</label><span class="text-danger">*</span>
                                    <input class="form-control"  type="text" name="longitude" id="txtLongitude" value="<?php echo set_value('longitude');?>" required readonly>
                                </div>
                                <div class="col-lg-6">
                                    <label>Endereço Completo:</label><span class="text-danger">*</span>
                                    <input class="form-control"  type="text" name="endereco" id='txtEndereco' value="<?php echo set_value('endereco');?>" required readonly>
                                </div>
                            </div>           
                            <div class='row'>
                                <h4 style="text-align: center" class="m-t-0 center">Arraste o cursor para a localização exata da escola no mapa</h4>
                                <div id="mapa"></div>
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