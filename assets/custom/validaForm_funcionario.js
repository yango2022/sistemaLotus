window.onload = function () {
    ////////////////////// FUNCIONÁRIO NASCIONALIDADE /////////////////////
    id('funcionario_nacionalidade').onchange = function () {

        if (this.value == 31) {
            id('pais_origem').style.display = 'block';
            $('#funcionario_uf_naturalidade').prop('required', true);
            $('#funcionario_naturalidade').prop('required', true);
            $('#funcionario_end_zona').prop('required', true);

        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');

            $("#funcionario_uf_naturalidade").parsley().destroy();
            $("#funcionario_naturalidade").parsley().destroy();
            $("#funcionario_end_zona").parsley().destroy();

            $('#funcionario_uf_naturalidade').val('');
            $('#funcionario_uf_naturalidade').prop('required', false);

            $('#funcionario_naturalidade').val('');
            $('#funcionario_naturalidade').prop('required', false);

            $('#funcionario_end_zona').val('');
            $('#funcionario_end_zona').prop('required', false);


            id('pais_origem').style.display = 'none';
            $('.pais_origem').val('');

        }

    };
 

    //////////////////// FUNCIONÁRIO CASADO /////////////////////
    id('funcionario_civil').onchange = function () {

        if (this.value == '2') {
            id('casado').style.display = 'block';
            $('#funcionario_conjuge').prop('required', true);
            $('#funcionario_conjuge_cpf').prop('required', true);

        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');
            $("#funcionario_conjuge").parsley().destroy();
            $("#funcionario_conjuge_cpf").parsley().destroy();

            $('#funcionario_conjuge').val('');
            $('#funcionario_conjuge').prop('required', false);

            $('#funcionario_conjuge_cpf').val('');
            $('#funcionario_conjuge_cpf').prop('required', false);


            id('casado').style.display = 'none';
            $('.casado').val('');

        }

    };





    //////////////////// FUNCIONÁRIO PORTADOR DE DEFICIÊNCIA /////////////////////
    id('funcionario_portador_deficiencia').onchange = function () {

        if (this.value == '1') {
            id('deficiencia').style.display = 'block';
            $('#funcionario_def_cegueira').prop('required', true);
            $('#funcionario_def_baixa_visao').prop('required', true);
            $('#funcionario_def_surdez').prop('required', true);
            $('#funcionario_def_auditiva').prop('required', true);
            $('#funcionario_def_surdocegueira').prop('required', true);
            $('#funcionario_def_fisica').prop('required', true);
            $('#funcionario_def_intelectual').prop('required', true);
            $('#funcionario_def_multipla').prop('required', true);


        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');
            $("#funcionario_def_cegueira").parsley().destroy();
            $("#funcionario_def_baixa_visao").parsley().destroy();
            $("#funcionario_def_surdez").parsley().destroy();
            $("#funcionario_def_auditiva").parsley().destroy();
            $("#funcionario_def_surdocegueira").parsley().destroy();
            $("#funcionario_def_fisica").parsley().destroy();
            $("#funcionario_def_intelectual").parsley().destroy();
            $("#funcionario_def_multipla").parsley().destroy();




            $('#funcionario_def_cegueira').val('0');
            $('#funcionario_def_cegueira').prop('required', false);

            $('#funcionario_def_baixa_visao').val('0');
            $('#funcionario_def_baixa_visao').prop('required', false);

            $('#funcionario_def_surdez').val('0');
            $('#funcionario_def_surdez').prop('required', false);

            $('#funcionario_def_auditiva').val('0');
            $('#funcionario_def_auditiva').prop('required', false);

            $('#funcionario_def_surdocegueira').val('0');
            $('#funcionario_def_surdocegueira').prop('required', false);

            $('#funcionario_def_fisica').val('0');
            $('#funcionario_def_fisica').prop('required', false);

            $('#funcionario_def_intelectual').val('0');
            $('#funcionario_def_intelectual').prop('required', false);

            $('#funcionario_def_multipla').val('0');
            $('#funcionario_def_multipla').prop('required', false);


            id('deficiencia').style.display = 'none';
            $('.deficiencia').val('');

        }

    };
    
    //////////////////// FUNCIONÁRIO FORMAÇÃO /////////////////////
    id('escolaridade').onchange = function () {

        if (this.value == 6) {
            id('formacao').style.display = 'block';
            $('#situacao_superior').prop('required', true);
            $('#cod_ocde').prop('required', true);
            $('#data_inicio').prop('required', true);
            $('#data_termino').prop('required', true);
            $('#cod_instituicao').prop('required', true);
            $('#pos_especializacao').prop('required', false);
            $('#pos_mestrado').prop('required', false);
            $('#pos_doutorado').prop('required', false);


        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');

            $('ul.parsley-errors-list').html('');
            $("#situacao_superior").parsley().destroy();
            $("#cod_ocde").parsley().destroy();
            $("#data_inicio").parsley().destroy();
            $("#data_termino").parsley().destroy();
            $("#cod_instituicao").parsley().destroy();
            $("#pos_especializacao").parsley().destroy();
            $("#pos_mestrado").parsley().destroy();
            $("#pos_doutorado").parsley().destroy();


            $('#situacao_superior').val('');
            $('#situacao_superior').prop('required', false);


            $('#cod_ocde').val('NULL');
            $('#cod_ocde').prop('required', false);

            $('#data_inicio').val('0');
            $('#data_inicio').prop('required', false);

            $('#data_termino').val('0');
            $('#data_termino').prop('required', false);

            $('#cod_instituicao').val('0');
            $('#cod_instituicao').prop('required', false);

            $('#pos_especializacao').val('NULL');
            $('#pos_especializacao').prop('required', false);

            $('#pos_mestrado').val('NULL');
            $('#pos_mestrado').prop('required', false);
            
            $('#pos_doutorado').val('NULL');
            $('#pos_doutorado').prop('required', false);


             id('formacao').style.display = 'none';

        }

    };
    


    //////////////////// FUNCIONÁRIO CURSO /////////////////////
    id('curso_nenhum').onchange = function () {

        if (this.value == '1') {
            id('cursos').style.display = 'block';

            $('#curso_creche').prop('required', true);
            $('#curso_prescola').prop('required', true);
            $('#curso_ini').prop('required', true);
            $('#curso_fin').prop('required', true);
            $('#curso_ens_medio').prop('required', true);
            $('#curso_jovens_adultos').prop('required', true);
            $('#curso_educ_especial').prop('required', true);
            $('#curso_educ_indigena').prop('required', true);
            $('#curso_educ_campo').prop('required', true);
            $('#curso_educ_ambiental').prop('required', true);
            $('#curso_educ_direitos_humanos').prop('required', true);
            $('#curso_div_sexual').prop('required', true);
            $('#curso_direitos_cianca_adolecente').prop('required', true);
            $('#curso_etnicoraciais').prop('required', true);
            $('#curso_outros').prop('required', true);


        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');

            $("#curso_creche").parsley().destroy();
            $("#curso_prescola").parsley().destroy();
            $("#curso_ini").parsley().destroy();
            $("#curso_fin").parsley().destroy();
            $("#curso_ens_medio").parsley().destroy();
            $("#curso_jovens_adultos").parsley().destroy();
            $("#curso_educ_especial").parsley().destroy();
            $("#curso_educ_indigena").parsley().destroy();
            $("#curso_educ_campo").parsley().destroy();
            $("#curso_educ_ambiental").parsley().destroy();
            $("#curso_educ_direitos_humanos").parsley().destroy();
            $("#curso_div_sexual").parsley().destroy();
            $("#curso_direitos_cianca_adolecente").parsley().destroy();
            $("#curso_etnicoraciais").parsley().destroy();
            $("#curso_outros").parsley().destroy();




            $('#curso_creche').val('0');
            $('#curso_creche').prop('required', false);

            $('#curso_prescola').val('0');
            $('#curso_prescola').prop('required', false);

            $('#curso_ini').val('0');
            $('#curso_ini').prop('required', false);

            $('#curso_fin').val('0');
            $('#curso_fin').prop('required', false);

            $('#curso_ens_medio').val('0');
            $('#curso_ens_medio').prop('required', false);

            $('#curso_jovens_adultos').val('0');
            $('#curso_jovens_adultos').prop('required', false);

            $('#curso_educ_especial').val('0');
            $('#curso_educ_especial').prop('required', false);

            $('#curso_educ_indigena').val('0');
            $('#curso_educ_indigena').prop('required', false);

            $('#curso_educ_campo').val('0');
            $('#curso_educ_campo').prop('required', false);

            $('#curso_educ_ambiental').val('0');
            $('#curso_educ_ambiental').prop('required', false);

            $('#curso_educ_direitos_humanos').val('0');
            $('#curso_educ_direitos_humanos').prop('required', false);

            $('#curso_div_sexual').val('0');
            $('#curso_div_sexual').prop('required', false);

            $('#curso_direitos_cianca_adolecente').val('0');
            $('#curso_direitos_cianca_adolecente').prop('required', false);

            $('#curso_etnicoraciais').val('0');
            $('#curso_etnicoraciais').prop('required', false);

            $('#curso_outros').val('0');
            $('#curso_outros').prop('required', false);


            id('cursos').style.display = 'none';
            $('.cursos').val('');

        }

    };

};/* fecha do window.onload */

function id(el) {
    return document.getElementById(el);
}
;
function preview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#preview_image').attr('src', e.target.result).width(140)
        };
        reader.readAsDataURL(input.files[0]);
    }

}
;

