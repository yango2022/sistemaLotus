<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">

<div class="content-wrapper">
    <section class="content-header">
        <h1>Cadastrar Interno</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <!-- <h3 class="box-title">Quick Example</h3> -->
                    </div>
                    <?php echo form_open_multipart('interno/salvar');  ?>
                        <div class="box-body">
                            <div class='row'>
                                <div class="form-group col-sm-6">
                                    <label>Município</label>
                                    <input type="text" required name="municipio" class="form-control" placeholder="Digite o Nome do Município">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Latitude</label>
                                    <input type="text" required name="latitude" class="form-control" placeholder="Digite a Latitude">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Longitude</label>
                                    <input type="text" required name="longitude" class="form-control" placeholder="Digite a Longitude">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Foto</label>
                                    <input type="file" name="foto" class="form-control" >
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Status</label>
                                    <select name="status" required class="form-control select2">
                                        <option value="" disabled selected>Selecione</option>
                                        <option value="1">Ativo</option>
                                        <option value="0">Inativo</option>
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