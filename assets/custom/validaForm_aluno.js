

window.onload = function () {


    id('aluno_rg_emissor').onchange = function(){
    
        if(this.value == '29'){
            id('rg_emissor').style.display = 'none';
            id('doc_estranger').style.display = 'block';
        }else{
            
            id('doc_estranger').style.display = 'none';
            id('rg_emissor').style.display = 'block';
        }
    };




    /////MENU IDENTIFICAÇÃO/////////////////////////////////////////////////
    ////////////////////CAMPOS CERTIDÃO DE NASC/////////////////////

    id('aluno_cert_tipo').onchange = function () {

        if (this.value == '1') {
            id('antigo').style.display = 'block';
            $('#aluno_cert_matricula').prop('disabled', false);

        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');

            $("#aluno_cert_antiga_termo").parsley().destroy();
            $("#aluno_cert_antiga_livro").parsley().destroy();
            $("#aluno_cert_antiga_folha").parsley().destroy();
            $("#aluno_cert_antiga_data").parsley().destroy();
            $("#aluno_cert_antiga_uf_cartorio").parsley().destroy();
            $("#aluno_cert_antiga_municipio_cartorio").parsley().destroy();

            $('#aluno_cert_antiga_termo').val('');
            $('#aluno_cert_antiga_termo').prop('required', false);

            $('#aluno_cert_antiga_livro').val('');
            $('#aluno_cert_antiga_livro').prop('required', false);

            $('#aluno_cert_antiga_folha').val('');
            $('#aluno_cert_antiga_folha').prop('required', false);

            $('#aluno_cert_antiga_data').val('');
            $('#aluno_cert_antiga_data').prop('required', false);

            $('#aluno_cert_antiga_uf_cartorio').val('');
            $('#aluno_cert_antiga_uf_cartorio').prop('required', false);

            $('#aluno_cert_antiga_municipio_cartorio').val('');
            $('#aluno_cert_antiga_municipio_cartorio').prop('required', false);

            $('#aluno_cert_antiga_cod_cartorio').val('');
            $('#aluno_cert_antiga_cod_cartorio').prop('required', false);


            id('antigo').style.display = 'none';
            $('.antigo').val('');

        }

        if (this.value == '2') {
            id('novo').style.display = 'block';
            $('#aluno_cert_antiga_termo').prop('disabled', false);
            $('#aluno_cert_antiga_livro').prop('disabled', false);
            $('#aluno_cert_antiga_folha').prop('disabled', false);
            $('#aluno_cert_antiga_data').prop('disabled', false);
            $('#aluno_cert_antiga_uf_cartorio').prop('disabled', false);
            $('#aluno_cert_antiga_municipio_cartorio').prop('disabled', false);
            $('#aluno_cert_antiga_cod_cartorio').prop('disabled', false);
        } else {

            $('#aluno_cert_matricula').val('');
            $('#aluno_cert_matricula').prop('required', false);

            id('novo').style.display = 'none';
            $('.novo').val('');
        }
    };

    /////MENU IDENTIFICAÇÃO/////////////////////////////////////////////////
    ////////////////////CAMPOS NATURALIDADE/////////////////////

    id('aluno_nacionalidade').onchange = function () {

        if (this.value == 31) {
            id('pais_origem_aluno').style.display = 'block';
            $('#aluno_uf_naturalidade').prop('required', true);
            $('#aluno_naturalidade').prop('required', true);
            $('#aluno_nascionalidade_tipo').prop('required', true);
            $('#aluno_nascionalidade_tipo').val('1');

            $('#aluno_naturalidade').val('');
            $('#aluno_naturalidade').prop('required', false);


        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');

            $("#aluno_uf_naturalidade").parsley().destroy();
            $("#aluno_naturalidade").parsley().destroy();

            $('#aluno_uf_naturalidade').val('');
            $('#aluno_uf_naturalidade').prop('required', false);

            $('#aluno_naturalidade').val('');
            $('#aluno_naturalidade').prop('required', false);


            id('pais_origem_aluno').style.display = 'none';
            $('.pais_origem_aluno').val('');

        }

    };

    /////MENU SAÚDE/////////////////////////////////////////////////////////
    ////////////////////CAMPOS DOENÇA///////////////////////////////                
    id('doencas').onchange = function () {
        if (this.value == '1') {
            $('#doencas_qual').prop('disabled', false);
        } else {
            $('#doencas_qual').prop('disabled', true);
            $('#doencas_qual').val('');
        }
    };
    ////////////////////CAMPOS TRATAMENTO MEDICO////////////////////                
    id('tratamento_medico').onchange = function () {
        if (this.value == '1') {
            $('#tratamento_medico_qual').prop('disabled', false);
        } else {
            $('#tratamento_medico_qual').prop('disabled', true);
            $('#tratamento_medico_qual').val('');
        }
    };
    ////////////////////CAMPOS MEDICAMENTO//////////////////////////                
    id('medicamento_utilizado').onchange = function () {
        if (this.value == '1') {
            $('#medicamento_utilizado_qual').prop('disabled', false);
        } else {
            $('#medicamento_utilizado_qual').prop('disabled', true);
            $('#medicamento_utilizado_qual').val('');
        }
    };
    ////////////////////CAMPOS ALÉRGICO/////////////////////////////                
    id('aluno_alergias').onchange = function () {
        if (this.value == '1') {
            $('#aluno_alerg_qual').prop('disabled', false);
        } else {
            $('#aluno_alerg_qual').prop('disabled', true);
            $('#aluno_alerg_qual').val('');
        }
    };
    ////////////////////CAMPOS ESPECIAL/////////////////////////////                
    // id('especial').onchange = function () {
    //     if (this.value == '1') {
    //         $('#especial_qual').prop('disabled', false);
    //         // $('#especial_qual').prop('required=', true);
    //     } else {
    //         $('#especial_qual').prop('disabled', true);
    //         $('#especial_qual').val('');
    //     }
    // };

    /////MENU FAMÍLIA///////////////////////////////////////////////////////        
    ////////////////////CAMPOS PESSOA_SOB_PROTEÇAO//////////////////
    id('pessoa_sob_protecao').onchange = function () {
        if (this.value == '1') {
            $('#pessoa_sob_protecao_idade').prop('disabled', false);
            $('#pessoa_sob_protecao_qual').prop('disabled', false);
        } else {
            $('#pessoa_sob_protecao_idade').prop('disabled', true);
            $('#pessoa_sob_protecao_idade').val('');
            $('#pessoa_sob_protecao_qual').prop('disabled', true);
            $('#pessoa_sob_protecao_qual').val('');
        }
    };
    ////////////////////CAMPOS DEFICIENCIA////////////////////////
    id('pessoa_deficiencia').onchange = function () {
        if (this.value == '1') {
            $('#pessoa_deficiencia_idade').prop('disabled', false);
            $('#pessoa_deficiencia_qual').prop('disabled', false);
        } else {
            $('#pessoa_deficiencia_idade').prop('disabled', true);
            $('#pessoa_deficiencia_idade').val('');
            $('#pessoa_deficiencia_qual').prop('disabled', true);
            $('#pessoa_deficiencia_qual').val('');
        }
    };
    ////////////////////CAMPOS DOENÇA GRAVE////////////////////////
    id('pessoa_doenca_grave').onchange = function () {
        if (this.value == '1') {
            $('#pessoa_doenca_grave_idade').prop('disabled', false);
            $('#pessoa_doenca_grave_qual').prop('disabled', false);
            $('#pessoa_doenca_grave_parentesco').prop('disabled', false);
        } else {
            $('#pessoa_doenca_grave_idade').prop('disabled', true);
            $('#pessoa_doenca_grave_idade').val('');
            $('#pessoa_doenca_grave_qual').prop('disabled', true);
            $('#pessoa_doenca_grave_qual').val('');
            $('#pessoa_doenca_grave_parentesco').prop('disabled', true);
            $('#pessoa_doenca_grave_parentesco').val('');
        }
    };

    /////MENU RENDA ///////////////////////////////////////////////////////        
    ////////////////////CAMPOS PROGRAMA SOCIAL          //////////////////
    id('programa_social').onchange = function () {
        if (this.value == '1') {
            $('#programa_social_qual').prop('disabled', false);

        } else {

            $('#programa_social_qual').prop('disabled', true);
            $('#programa_social_qual').val('');
        }
    };

    ////////////////////// ALUNO DEFICIÊNCIAS /////////////////////

    id('adtgh_possui').onchange = function () {

        if (this.value == 0) {
            id('adtgh_aluno').style.display = 'block';
            $('#adtgh_cegueira').prop('required', true);
            $('#adtgh_baixa_visao').prop('required', true);
            $('#adtgh_surdez').prop('required', true);
            $('#adtgh_def_auditiva').prop('required', true);
            $('#adtgh_surdocegueira').prop('required', true);
            $('#adtgh_def_fisica').prop('required', true);
            $('#adtgh_def_intelectual').prop('required', true);
            $('#adtgh_def_multipla').prop('required', true);
            $('#adtgh_autismo_infantil').prop('required', true);
            $('#adtgh_sindrome_asperger').prop('required', true);
            $('#adtgh_sindrome_rett').prop('required', true);
            $('#adtgh_trans_desintregrativo_infancia').prop('required', true);
            $('#adtgh_super_dotacao').prop('required', true);

        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');

            $("#adtgh_cegueira").parsley().destroy();
            $("#adtgh_baixa_visao").parsley().destroy();
            $("#adtgh_surdez").parsley().destroy();
            $("#adtgh_def_auditiva").parsley().destroy();
            $("#adtgh_surdocegueira").parsley().destroy();
            $("#adtgh_def_fisica").parsley().destroy();
            $("#adtgh_def_intelectual").parsley().destroy();
            $("#adtgh_def_multipla").parsley().destroy();
            $("#adtgh_autismo_infantil").parsley().destroy();
            $("#adtgh_sindrome_asperger").parsley().destroy();
            $("#adtgh_sindrome_rett").parsley().destroy();
            $("#adtgh_trans_desintregrativo_infancia").parsley().destroy();
            $("#adtgh_super_dotacao").parsley().destroy();

            $('#adtgh_cegueira').val('0');
            $('#adtgh_cegueira').prop('required', false);

            $('#adtgh_baixa_visao').val('0');
            $('#adtgh_baixa_visao').prop('required', false);

            $('#adtgh_surdez').val('0');
            $('#adtgh_surdez').prop('required', false);

            $('#adtgh_def_auditiva').val('0');
            $('#adtgh_def_auditiva').prop('required', false);

            $('#adtgh_surdocegueira').val('0');
            $('#adtgh_surdocegueira').prop('required', false);

            $('#adtgh_def_fisica').val('0');
            $('#adtgh_def_fisica').prop('required', false);

            $('#adtgh_def_intelectual').val('0');
            $('#adtgh_def_intelectual').prop('required', false);

            $('#adtgh_def_multipla').val('0');
            $('#adtgh_def_multipla').prop('required', false);

            $('#adtgh_autismo_infantil').val('0');
            $('#adtgh_autismo_infantil').prop('required', false);

            $('#adtgh_sindrome_asperger').val('0');
            $('#adtgh_sindrome_asperger').prop('required', false);

            $('#adtgh_sindrome_rett').val('0');
            $('#adtgh_sindrome_rett').prop('required', false);

            $('#adtgh_trans_desintregrativo_infancia').val('0');
            $('#adtgh_trans_desintregrativo_infancia').prop('required', false);

            $('#adtgh_super_dotacao').val('0');
            $('#adtgh_super_dotacao').prop('required', false);

            id('adtgh_aluno').style.display = 'none';
            $('.adtgh_aluno').val('');

        }

    };

    ////////////////////// ALUNO SAEB /////////////////////

    id('nenhum').onchange = function () {

        if (this.value == 0) {
            id('saeb_aluno').style.display = 'block';
            $('#auxilio_ledor').prop('required', true);
            $('#auxilio_transcricao').prop('required', true);
            $('#guia_interprete').prop('required', true);
            $('#interprete_libras').prop('required', true);
            $('#leitura_labial').prop('required', true);
            $('#prova_ampliada_16').prop('required', true);
            $('#prova_ampliada_20').prop('required', true);
            $('#prova_ampliada_24').prop('required', true);
            $('#prova_braille').prop('required', true);

        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');

            $("#auxilio_ledor").parsley().destroy();
            $("#auxilio_transcricao").parsley().destroy();
            $("#guia_interprete").parsley().destroy();
            $("#interprete_libras").parsley().destroy();
            $("#leitura_labial").parsley().destroy();
            $("#prova_ampliada_16").parsley().destroy();
            $("#prova_ampliada_20").parsley().destroy();
            $("#prova_ampliada_24").parsley().destroy();
            $("#prova_braille").parsley().destroy();


            $('#auxilio_ledor').val('0');
            $('#auxilio_ledor').prop('required', false);

            $('#auxilio_transcricao').val('0');
            $('#auxilio_transcricao').prop('required', false);

            $('#guia_interprete').val('0');
            $('#guia_interprete').prop('required', false);

            $('#interprete_libras').val('0');
            $('#interprete_libras').prop('required', false);

            $('#leitura_labial').val('0');
            $('#leitura_labial').prop('required', false);

            $('#prova_ampliada_16').val('0');
            $('#prova_ampliada_16').prop('required', false);

            $('#prova_ampliada_20').val('0');
            $('#prova_ampliada_20').prop('required', false);

            $('#prova_ampliada_24').val('0');
            $('#prova_ampliada_24').prop('required', false);

            $('#prova_braille').val('0');
            $('#prova_braille').prop('required', false);


            id('saeb_aluno').style.display = 'none';
            $('.saeb_aluno').val('');

        }

    };


};

function id(el) {
    return document.getElementById(el);
};
function preview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#preview_image').attr('src', e.target.result).width(140)
        };
        reader.readAsDataURL(input.files[0]);
    }

};


