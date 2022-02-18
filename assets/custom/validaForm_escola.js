window.onload = function () {



    /* por padrão eu vou colocar o escola rede required false para evitar problemas no formulario*/
    $(".parsley-error").removeClass('parsley-error');
    $(".parsley-min").removeClass('parsley-min');
    $('ul.parsley-errors-list').html('');
    $("#escola_cod_escola_sede").parsley().destroy();
    $('#escola_cod_escola_sede').val('');
    $('#escola_cod_escola_sede').prop('required', false);

    ////////////////////CAMPO ESCOLA SEDE/////////////////////
    id('escola_educacao_basica').onchange = function () {

        if (this.value == '1') {
            id('novo').style.display = 'block';
            $('#escola_cod_escola_sede').prop('required', true);
        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');
            $("#escola_cod_escola_sede").parsley().destroy();

            $('#escola_cod_escola_sede').val('');
            $('#escola_cod_escola_sede').prop('required', false);

            id('novo').style.display = 'none';
            $('.novo').val('');


        }


    };

    ////////////////////CAMPO LINGUA INDIGENA/////////////////////
    id('escola_lingua_indigena').onchange = function () {

        if (this.value == '1') {
            id('cod_indigena').style.display = 'block';
            $('#escola_cod_lingua_indigena').prop('required', true);
        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');
            $("#escola_cod_lingua_indigena").parsley().destroy();

            $('#escola_cod_lingua_indigena').val('0');
            $('#escola_cod_lingua_indigena').prop('required', false);

            id('cod_indigena').style.display = 'none';
            $('.cod_indigena').val('');


        }


    };



    ////////////////////CAMPO ESCOLA COMPARTILHA PRÉDIO/////////////////////
    id('escola_predio_comp_outra_escola').onchange = function () {

        if (this.value == '1') {
            id('compartilhamento').style.display = 'block';
            $('#escola_inep_escola_compartilha').prop('required', true);
            $('#escola_inep_escola_compartilha').val('');
            $('#escola_inep_escola_compartilha_2').val('0');
            $('#escola_inep_escola_compartilha_3').val('0');
            $('#escola_inep_escola_compartilha_4').val('0');
            $('#escola_inep_escola_compartilha_5').val('0');
            $('#escola_inep_escola_compartilha_6').val('0');
        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');
            $("#escola_inep_escola_compartilha").parsley().destroy();
            $("#escola_inep_escola_compartilha_2").parsley().destroy();
            $("#escola_inep_escola_compartilha_3").parsley().destroy();
            $("#escola_inep_escola_compartilha_3").parsley().destroy();
            $("#escola_inep_escola_compartilha_5").parsley().destroy();
            $("#escola_inep_escola_compartilha_6").parsley().destroy();

            $('#escola_inep_escola_compartilha').val('0');
            $('#escola_inep_escola_compartilha').prop('required', false);

            $('#escola_inep_escola_compartilha_2').val('0');
            $('#escola_inep_escola_compartilha_2').prop('required', false);

            $('#escola_inep_escola_compartilha_3').val('0');
            $('#escola_inep_escola_compartilha_3').prop('required', false);

            $('#escola_inep_escola_compartilha_4').val('0');
            $('#escola_inep_escola_compartilha_4').prop('required', false);

            $('#escola_inep_escola_compartilha_5').val('0');
            $('#escola_inep_escola_compartilha_5').prop('required', false);

            $('#escola_inep_escola_compartilha_6').val('0');
            $('#escola_inep_escola_compartilha_6').prop('required', false);

            id('compartilhamento').style.display = 'none';
            $('.compartilhamento').val('');


        }


    };

    /* 
    *** Está função pega os campos referentes ao tipo de abastecimento de água da escola
    *** caso o usuario fale que o não tem abastecimento de áqua ele vai marcas não para as 
    *** outras opções.
    */
    id('escola_agua_inexistente').onchange = function () {

        if (this.value == '0') {

             id('abastecimento').style.display = 'block';
            $('#escola_agua_rede_publica').val('');
            $('#escola_agua_rede_publica').prop('required', true);
            $('#escola_agua_poco').val('');
            $('#escola_agua_poco').prop('required', true);
            $('#escola_agua_cacimba').val('');
            $('#escola_agua_cacimba').prop('required', true);
            $('#escola_agua_rio_riacho').val('');
            $('#escola_agua_rio_riacho').prop('required', true);
        } else {
            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');

            $("#escola_agua_rede_publica").parsley().destroy();
             $("#escola_agua_poco").parsley().destroy();
              $("#escola_agua_cacimba").parsley().destroy();
               $("#escola_agua_rio_riacho").parsley().destroy();

            $('#escola_agua_rede_publica').val('0');
            $('#escola_agua_rede_publica').prop('required', false);
            $('#escola_agua_poco').val('0');
            $('#escola_agua_poco').prop('required', false);
            $('#escola_agua_cacimba').val('0');
            $('#escola_agua_cacimba').prop('required', false);
            $('#escola_agua_rio_riacho').val('0');
            $('#escola_agua_rio_riacho').prop('required', false);

            id('abastecimento').style.display = 'none';
        }


    };

    /* 
    *** Está função pega os campos referentes ao tipo de abastecimento de energia elétrica da escola
    *** caso o usuario fale que o não tem abastecimento de energia elétrica ele vai marcas não para as 
    *** outras opções.
    */
    id('escola_energia_inexistente').onchange = function () {

        if (this.value == '0') {

            
             id('eletrica').style.display = 'block';
            $('#escola_energia_rede_publica').val('');
            $('#escola_energia_rede_publica').prop('required', true);
            $('#escola_energia_gerador').val('');
            $('#escola_energia_gerador').prop('required', true);
            $('#escola_energia_alternativa').val('');
            $('#escola_energia_alternativa').prop('required', true);
        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');
            $("#escola_energia_rede_publica").parsley().destroy();
            $("#escola_energia_gerador").parsley().destroy();
            $("#escola_energia_alternativa").parsley().destroy();

            $('#escola_energia_rede_publica').val('0');
            $('#escola_energia_rede_publica').prop('required', false);
            $('#escola_energia_gerador').val('0');
            $('#escola_energia_gerador').prop('required', false);
            $('#escola_energia_alternativa').val('0');
            $('#escola_energia_alternativa').prop('required', false);

            id('eletrica').style.display = 'none';
        }
    };

    /* 
    *** Está função pega os campos referentes ao tipo de abastecimento de esgoto da escola
    *** caso o usuario fale que o não tem recolhimento de esgoto ele vai marcas não para as 
    *** outras opções.
    */
    id('escola_esgoto_inexistente').onchange = function () {
        if (this.value == '0') {
             id('esgoto').style.display = 'block';
            $('#escola_esgoto_rede_publica').val('0');
            $('#escola_esgoto_rede_publica').prop('required', true);
            $('#escola_esgoto_fossa').val('0');
            $('#escola_esgoto_fossa').prop('required', true);
        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');
            $("#escola_esgoto_rede_publica").parsley().destroy();
            $("#escola_esgoto_fossa").parsley().destroy();


            $('#escola_esgoto_rede_publica').val('');
            $('#escola_esgoto_rede_publica').prop('required', false);
            $('#escola_esgoto_fossa').val('');
            $('#escola_esgoto_fossa').prop('required', false);

             id('esgoto').style.display = 'none';
        }
    };

    /* 
    *** Está função pega os campos referentes ao as dependências da escola
    *** caso o usuario fale que o não tem essas dependências ele vai marcas não para as 
    *** outras opções.
    */
    id('escola_nenhuma_relacionada').onchange = function () {

        if (this.value == '1') {

            $('#escola_sala_diretoria').val('0');
            $('#escola_sala_diretoria').prop('required', false);
            $('#escola_sala_professores').val('0');
            $('#escola_sala_professores').prop('required', false);
            $('#escola_sala_secretaria').val('0');
            $('#escola_sala_secretaria').prop('required', false);
            $('#escola_sala_informatica').val('0');
            $('#escola_sala_informatica').prop('required', false);
            $('#escola_sala_ciencias').val('0');
            $('#escola_sala_ciencias').prop('required', false);
            $('#escola_sala_atend_educ_especializado').val('0');
            $('#escola_sala_atend_educ_especializado').prop('required', false);
            $('#escola_quadra_coberta').val('0');
            $('#escola_quadra_coberta').prop('required', false);
            $('#escola_quadra_descoberta').val('0');
            $('#escola_quadra_descoberta').prop('required', false);
            $('#escola_cozinha').val('0');
            $('#escola_cozinha').prop('required', false);
            $('#escola_biblioteca').val('0');
            $('#escola_biblioteca').prop('required', false);
            $('#escola_sala_leitura').val('0');
            $('#escola_sala_leitura').prop('required', false);
            $('#escola_bercario').val('0');
            $('#escola_bercario').prop('required', false);
            $('#escola_banheiro_fora_predio').val('0');
            $('#escola_banheiro_fora_predio').prop('required', false);
            $('#escola_banheiro_dentro_predio').val('0');
            $('#escola_banheiro_dentro_predio').prop('required', false);
            $('#escola_banheiro_adequado_deficientes').val('0');
            $('#escola_banheiro_adequado_deficientes').prop('required', false);
            $('#escola_vias_adequadas_mobilidades_reduzidas').val('0');
            $('#escola_vias_adequadas_mobilidades_reduzidas').prop('required', false);
            $('#escola_banheiro_chuveiro').val('0');
            $('#escola_banheiro_chuveiro').prop('required', false);
            $('#escola_refeitorio').val('0');
            $('#escola_refeitorio').prop('required', false);
            $('#escola_despensa').val('0');
            $('#escola_despensa').prop('required', false);
            $('#escola_almoxarifado').val('0');
            $('#escola_almoxarifado').prop('required', false);
            $('#escola_auditorio').val('0');
            $('#escola_auditorio').prop('required', false);
            $('#escola_patio_coberto').val('0');
            $('#escola_patio_coberto').prop('required', false);
            $('#escola_patio_descoberto').val('0');
            $('#escola_patio_descoberto').prop('required', false);
            $('#escola_alojamento_aluno').val('0');
            $('#escola_alojamento_aluno').prop('required', false);
            $('#escola_alojamento_professor').val('0');
            $('#escola_alojamento_professor').prop('required', false);
            $('#escola_area_verde').val('0');
            $('#escola_area_verde').prop('required', false);
            $('#escola_lavanderia').val('0');
            $('#escola_lavanderia').prop('required', false);
            $('#escola_nenhuma_relacionada').val('0');
            $('#escola_nenhuma_relacionada').prop('required', false);
            
         } //else {

        //     $('#escola_sala_diretoria').val('');
        //     $('#escola_sala_diretoria').prop('required', false);
        //     $('#escola_sala_professores').val('');
        //     $('#escola_sala_professores').prop('required', false);
        //     $('#escola_sala_secretaria').val('');
        //     $('#escola_sala_secretaria').prop('required', false);
        //     $('#escola_sala_informatica').val('');
        //     $('#escola_sala_informatica').prop('required', false);
        //     $('#escola_sala_ciencias').val('');
        //     $('#escola_sala_ciencias').prop('required', false);
        //     $('#escola_sala_atend_educ_especializado').val('');
        //     $('#escola_sala_atend_educ_especializado').prop('required', false);
        //     $('#escola_quadra_coberta').val('');
        //     $('#escola_quadra_coberta').prop('required', false);
        //     $('#escola_quadra_descoberta').val('');
        //     $('#escola_quadra_descoberta').prop('required', false);
        //     $('#escola_cozinha').val('');
        //     $('#escola_cozinha').prop('required', false);
        //     $('#escola_biblioteca').val('');
        //     $('#escola_biblioteca').prop('required', false);
        //     $('#escola_sala_leitura').val('');
        //     $('#escola_sala_leitura').prop('required', false);
        //     $('#escola_bercario').val('');
        //     $('#escola_bercario').prop('required', false);
        //     $('#escola_banheiro_fora_predio').val('');
        //     $('#escola_banheiro_fora_predio').prop('required', false);
        //     $('#escola_banheiro_dentro_predio').val('');
        //     $('#escola_banheiro_dentro_predio').prop('required', false);
        //     $('#escola_banheiro_adequado_deficientes').val('');
        //     $('#escola_banheiro_adequado_deficientes').prop('required', false);
        //     $('#escola_vias_adequadas_mobilidades_reduzidas').val('');
        //     $('#escola_vias_adequadas_mobilidades_reduzidas').prop('required', false);
        //     $('#escola_banheiro_chuveiro').val('');
        //     $('#escola_banheiro_chuveiro').prop('required', false);
        //     $('#escola_refeitorio').val('');
        //     $('#escola_refeitorio').prop('required', false);
        //     $('#escola_despensa').val('');
        //     $('#escola_despensa').prop('required', false);
        //     $('#escola_almoxarifado').val('');
        //     $('#escola_almoxarifado').prop('required', false);
        //     $('#escola_auditorio').val('');
        //     $('#escola_auditorio').prop('required', false);
        //     $('#escola_patio_coberto').val('');
        //     $('#escola_patio_coberto').prop('required', false);
        //     $('#escola_patio_descoberto').val('');
        //     $('#escola_patio_descoberto').prop('required', false);
        //     $('#escola_alojamento_aluno').val('');
        //     $('#escola_alojamento_aluno').prop('required', false);
        //     $('#escola_alojamento_professor').val('');
        //     $('#escola_alojamento_professor').prop('required', false);
        //     $('#escola_area_verde').val('');
        //     $('#escola_area_verde').prop('required', false);
        //     $('#escola_lavanderia').val('');
        //     $('#escola_lavanderia').prop('required', false);
        //     $('#escola_nenhuma_relacionada').val('');
        //     $('#escola_nenhuma_relacionada').prop('required', false);
        // }
    };


    //        id('escola_despensa').onchange = function () {
    //            if (this.value == '1')
    //                id('depos').style.display = 'block';
    //            else
    //                id('depos').style.display = 'none'
    //                };

    /* valida escoal estadual, quando for escola estadual ele muda os campos para não serem obrigatórios*/    
    id('escola_rede').onchange = function () {

        $(".parsley-error").removeClass('parsley-error');
        $(".parsley-min").removeClass('parsley-min');
        $('ul.parsley-errors-list').html('');

        // destruir todas as instâncias de ParsleyForm e ParsleyField
        //$("#form_escola").parsley().destroy();

        if (this.value == 2) {

            $("#escola_n_inep").parsley().destroy();
            $('#escola_slogan').prop('required', false);
            $('#escola_patrimonio').prop('required', false);
            $('#escola_end_pais').prop('required', false);
            $('#escola_telefone').prop('required', false);
            $('#escola_zona').prop('required', false);
            $('#escola_n_b_masculino').prop('required', false);
            $('#escola_n_b_feminino').prop('required', false);
            $('#escola_n_b_deficiente').prop('required', false);
            $('#escola_n_b_funcionario_m').prop('required', false);
            $('#escola_n_b_funcionario_f').prop('required', false);
            $('#escola_n_b_unissex').prop('required', false);
            $('#escola_sala_supervisao').prop('required', false);
            $('#escola_sala_secretaria').prop('required', false);
            $('#escola_sala_professores').prop('required', false);
            $('#escola_sala_informatica').prop('required', false);
            $('#escola_sala_diretoria').prop('required', false);
            $('#escola_sala_aula').prop('required', false);
            $('#escola_refeitorio').prop('required', false);
            $('#escola_cantina').prop('required', false);
            $('#escola_horta').prop('required', false);
            $('#escola_parquinho').prop('required', false);
            $('#escola_jardim').prop('required', false);
            $('#escola_corredor').prop('required', false);
            $('#escola_biblioteca').prop('required', false);
            $('#escola_sala_leitura').prop('required', false);
            $('#escola_quadra').prop('required', false);
            $('#escola_almoxarifado').prop('required', false);
            $('#escola_despensa').prop('required', false);
            $('#escola_depos_perecivel').prop('required', false);
            $('#escola_depos_nao_perecivel').prop('required', false);
            $('#escola_obs').prop('required', false);
            $('#escola_lei').prop('required', false);
            $('#escola_data_cad').prop('required', false);
            $('#escola_status').prop('required', false);
            $('#escola_educacao_basica').prop('required', false);
            $('#escola_cod_escola_sede').prop('required', false);
            $('#escola_distrito').prop('required', false);
            $('#escola_cod_escola_sede').prop('required', false);
            $('#escola_fax').prop('required', false);
            $('#escola_end_complemento').prop('required', false);
            $('#escola_sala_jogos').prop('required', false);
            $('#escola_sala_ambiental').prop('required', false);
            $('#escola_sala_laboratorio').prop('required', false);
            $('#escola_regulamentacao_conselho').prop('required', false);

            $('#escola_local_func_igreja').prop('required', false);
            $('#escola_local_func_sala_empresa').prop('required', false);
            $('#escola_local_func_casa_prof').prop('required', false);
            $('#escola_local_func_outra_escola').prop('required', false);
            $('#escola_local_func_galpao_rancho').prop('required', false);
            $('#escola_local_func_unidade_socioeducativa').prop('required', false);
            $('#escola_local_func_unidade_prisional').prop('required', false);
            $('#escola_local_func_outros').prop('required', false);
            $('#escola_predio_comp_outra_escola').prop('required', false);
            $('#escola_inep_escola_compartilha').prop('required', false);
            $('#escola_inep_escola_compartilha_2').prop('required', false);
            $('#escola_inep_escola_compartilha_3').prop('required', false);
            $('#escola_inep_escola_compartilha_4').prop('required', false);
            $('#escola_inep_escola_compartilha_5').prop('required', false);
            $('#escola_inep_escola_compartilha_6').prop('required', false);
            $('#escola_agua_alunos').prop('required', false);
            $('#escola_agua_rede_publica').prop('required', false);
            $('#escola_agua_poco').prop('required', false);
            $('#escola_agua_cacimba').prop('required', false);
            $('#escola_agua_rio_riacho').prop('required', false);
            $('#escola_agua_inexistente').prop('required', false);
            $('#escola_energia_rede_publica').prop('required', false);
            $('#escola_energia_gerador').prop('required', false);
            $('#escola_energia_alternativa').prop('required', false);
            $('#escola_energia_inexistente').prop('required', false);
            $('#escola_esgoto_rede_publica').prop('required', false);
            $('#escola_esgoto_fossa').prop('required', false);
            $('#escola_esgoto_inexistente').prop('required', false);
            $('#escola_lixo_coleta_periodica').prop('required', false);
            $('#escola_lixo_queima').prop('required', false);
            $('#escola_lixo_jogado_outra_area').prop('required', false);
            $('#escola_lixo_recicla').prop('required', false);
            $('#escola_lixo_enterra').prop('required', false);
            $('#escola_lixo_outros').prop('required', false);
            $('#escola_sala_ciencias').prop('required', false);
            $('#escola_sala_atend_educ_especializado').prop('required', false);
            $('#escola_quadra_coberta').prop('required', false);
            $('#escola_quadra_descoberta').prop('required', false);
            $('#escola_cozinha').prop('required', false);
            $('#escola_bercario').prop('required', false);
            $('#escola_banheiro_fora_predio').prop('required', false);
            $('#escola_banheiro_dentro_predio').prop('required', false);
            $('#escola_banheiro_adequado_deficientes').prop('required', false);
            $('#escola_vias_adequadas_mobilidades_reduzidas').prop('required', false);
            $('#escola_banheiro_chuveiro').prop('required', false);
            $('#escola_auditorio').prop('required', false);
            $('#escola_patio_coberto').prop('required', false);
            $('#escola_patio_descoberto').prop('required', false);
            $('#escola_alojamento_aluno').prop('required', false);
            $('#escola_alojamento_professor').prop('required', false);
            $('#escola_area_verde').prop('required', false);
            $('#escola_lavanderia').prop('required', false);
            $('#escola_nenhuma_relacionada').prop('required', false);
            $('#escola_qtd_utilizadas_sala_aula').prop('required', false);
            $('#escola_qtd_televisao').prop('required', false);
            $('#escola_qtd_video_cassete').prop('required', false);
            $('#escola_qtd_aparelho_dvd').prop('required', false);
            $('#escola_qtd_antena_parabolica').prop('required', false);
            $('#escola_qtd_copiadora').prop('required', false);
            $('#escola_qtd_retroprojetor').prop('required', false);
            $('#escola_qtd_impressora').prop('required', false);
            $('#escola_qtd_aparelho_de_som').prop('required', false);
            $('#escola_qtd_data_show').prop('required', false);
            $('#escola_qtd_fax').prop('required', false);
            $('#escola_qtd_maquina_foto').prop('required', false);
            $('#escola_qtd_computadores').prop('required', false);
            $('#escola_qtd_impressora_multifuncional').prop('required', false);
            $('#escola_qtd_computadores_uso_adm').prop('required', false);
            $('#escola_qtd_computadores_uso_alunos').prop('required', false);
            $('#escola_local_func_predio_escolar').prop('required', false);
            $('#escola_acesso_internet').prop('required', false);
            $('#escola_acesso_banda_larga').prop('required', false);
            $('#escola_alimentacao_para_alunos').prop('required', false);
            $('#escola_atendimento_especializado').prop('required', false);
            $('#escola_atividade_complementar').prop('required', false);
            $('#escola_modalidade_encino_regular').prop('required', false);
            $('#escola_modalidade_especial_subistitutiva').prop('required', false);
            $('#escola_modalidade_educacao_jovens_adultos').prop('required', false);
            $('#escola_modalidade_educacao_profissional').prop('required', false);
            $('#escola_organizado_ciclos').prop('required', false);
            $('#escola_localizacao_diferenciada').prop('required', false);
            $('#escola_material_didatico_diversidade_nao_utiliza').prop('required', false);
            $('#escola_material_didatico_diversidade_quilombola').prop('required', false);
            $('#escola_material_didatico_diversidade_indigena').prop('required', false);
            $('#escola_indigena').prop('required', false);
            $('#escola_lingua_indigena').prop('required', false);
            $('#escola_lingua_portuguesa').prop('required', false);
            $('#escola_cod_lingua_indigena').prop('required', false);
            $('#escola_brasil_alfabetizado').prop('required', false);
            $('#escola_final_semana_comunidade').prop('required', false);
            $('#escola_formacao_alternacia').prop('required', false);



            $('#escola_end_numero').val('0');
            $('#escola_zona').val('0');
            $('#escola_n_b_masculino').val('0');
            $('#escola_n_b_feminino').val('0');
            $('#escola_n_b_deficiente').val('0');
            $('#escola_n_b_funcionario_m').val('0');
            $('#escola_n_b_funcionario_f').val('0');
            $('#escola_n_b_unissex').val('0');
            $('#escola_sala_supervisao').val('0');
            $('#escola_sala_secretaria').val('0');
            $('#escola_sala_professores').val('0');
            $('#escola_sala_informatica').val('0');
            $('#escola_sala_diretoria').val('0');
            $('#escola_sala_aula').val('0');
            $('#escola_refeitorio').val('0');
            $('#escola_cantina').val('0');
            $('#escola_horta').val('0');
            $('#escola_parquinho').val('0');
            $('#escola_jardim').val('0');
            $('#escola_corredor').val('0');
            $('#escola_biblioteca').val('0');
            $('#escola_sala_leitura').val('0');
            $('#escola_quadra').val('0');
            $('#escola_almoxarifado').val('0');
            $('#escola_despensa').val('0');
            $('#escola_depos_perecivel').val('0');
            $('#escola_depos_nao_perecivel').val('0');
            $('#escola_status').val('2');
            $('#escola_sala_jogos').val('0');
            $('#escola_sala_ambiental').val('0');
            $('#escola_sala_laboratorio').val('0');
            $('#escola_regulamentacao_conselho').val('0');

            $('#escola_local_func_igreja').val('0');
            $('#escola_local_func_sala_empresa').val('0');
            $('#escola_local_func_casa_prof').val('0');
            $('#escola_local_func_outra_escola').val('0');
            $('#escola_local_func_galpao_rancho').val('0');
            $('#escola_local_func_unidade_socioeducativa').val('0');
            $('#escola_local_func_unidade_prisional').val('0');
            $('#escola_local_func_outros').val('0');
            $('#escola_predio_comp_outra_escola').val('0');
            $('#escola_inep_escola_compartilha').val('0');
            $('#escola_inep_escola_compartilha_2').val('0');
            $('#escola_inep_escola_compartilha_3').val('0');
            $('#escola_inep_escola_compartilha_4').val('0');
            $('#escola_inep_escola_compartilha_5').val('0');
            $('#escola_inep_escola_compartilha_6').val('0');
            $('#escola_agua_alunos').val('1');
            $('#escola_agua_rede_publica').val('0');
            $('#escola_agua_poco').val('0');
            $('#escola_agua_cacimba').val('0');
            $('#escola_agua_rio_riacho').val('0');
            $('#escola_agua_inexistente').val('0');
            $('#escola_energia_rede_publica').val('0');
            $('#escola_energia_gerador').val('0');
            $('#escola_energia_alternativa').val('0');
            $('#escola_energia_inexistente').val('0');
            $('#escola_esgoto_rede_publica').val('0');
            $('#escola_esgoto_fossa').val('0');
            $('#escola_esgoto_inexistente').val('0');
            $('#escola_lixo_coleta_periodica').val('0');
            $('#escola_lixo_queima').val('0');
            $('#escola_lixo_jogado_outra_area').val('0');
            $('#escola_lixo_recicla').val('0');
            $('#escola_lixo_enterra').val('0');
            $('#escola_lixo_outros').val('0');
            $('#escola_sala_ciencias').val('0');
            $('#escola_sala_atend_educ_especializado').val('0');
            $('#escola_quadra_coberta').val('0');
            $('#escola_quadra_descoberta').val('0');
            $('#escola_cozinha').val('0');
            $('#escola_bercario').val('0');
            $('#escola_banheiro_fora_predio').val('0');
            $('#escola_banheiro_dentro_predio').val('0');
            $('#escola_banheiro_adequado_deficientes').val('0');
            $('#escola_vias_adequadas_mobilidades_reduzidas').val('0');
            $('#escola_banheiro_chuveiro').val('0');
            $('#escola_auditorio').val('0');
            $('#escola_patio_coberto').val('0');
            $('#escola_patio_descoberto').val('0');
            $('#escola_alojamento_aluno').val('0');
            $('#escola_alojamento_professor').val('0');
            $('#escola_area_verde').val('0');
            $('#escola_lavanderia').val('0');
            $('#escola_nenhuma_relacionada').val('0');
            $('#escola_qtd_utilizadas_sala_aula').val('0');
            $('#escola_qtd_televisao').val('0');
            $('#escola_qtd_video_cassete').val('0');
            $('#escola_qtd_aparelho_dvd').val('0');
            $('#escola_qtd_antena_parabolica').val('0');
            $('#escola_qtd_copiadora').val('0');
            $('#escola_qtd_retroprojetor').val('0');
            $('#escola_qtd_impressora').val('0');
            $('#escola_qtd_aparelho_de_som').val('0');
            $('#escola_qtd_data_show').val('0');
            $('#escola_qtd_fax').val('0');
            $('#escola_qtd_maquina_foto').val('0');
            $('#escola_qtd_computadores').val('0');
            $('#escola_qtd_impressora_multifuncional').val('0');
            $('#escola_qtd_computadores_uso_adm').val('0');
            $('#escola_qtd_computadores_uso_alunos').val('0');
            $('#escola_local_func_predio_escolar').val('0');
            $('#escola_acesso_internet').val('0');
            $('#escola_acesso_banda_larga').val('0');
            $('#escola_alimentacao_para_alunos').val('0');
            $('#escola_atendimento_especializado').val('0');
            $('#escola_atividade_complementar').val('0');
            $('#escola_modalidade_encino_regular').val('0');
            $('#escola_modalidade_especial_subistitutiva').val('0');
            $('#escola_modalidade_educacao_jovens_adultos').val('0');
            $('#escola_modalidade_educacao_profissional').val('0');
            $('#escola_organizado_ciclos').val('0');
            $('#escola_localizacao_diferenciada').val('0');
            $('#escola_material_didatico_diversidade_nao_utiliza').val('0');
            $('#escola_material_didatico_diversidade_quilombola').val('0');
            $('#escola_material_didatico_diversidade_indigena').val('0');
            $('#escola_indigena').val('0');
            $('#escola_lingua_indigena').val('0');
            $('#escola_lingua_portuguesa').val('0');
            $('#escola_cod_lingua_indigena').val('0');
            $('#escola_brasil_alfabetizado').val('0');
            $('#escola_final_semana_comunidade').val('0');
            $('#escola_formacao_alternacia').val('0');


        } else {
            $('#escola_slogan').prop('required', true);
            $('#escola_n_inep').prop('required', true);
            $('#escola_patrimonio').prop('required', true);
            $('#escola_end_numero').prop('required', true);
            $('#endereco').prop('required', true);
            $('#bairro').prop('required', true);
            $('#cidade').prop('required', true);
            $('#uf').prop('required', true);
            $('#cep').prop('required', true);
            $('#escola_end_pais').prop('required', true);
            $('#escola_telefone').prop('required', true);
            $('#escola_email').prop('required', true);
            $('#escola_zona').prop('required', true);
            $('#escola_n_b_masculino').prop('required', true);
            $('#escola_n_b_feminino').prop('required', true);
            $('#escola_n_b_deficiente').prop('required', true);
            $('#escola_n_b_funcionario_m').prop('required', true);
            $('#escola_n_b_funcionario_f').prop('required', true);
            $('#escola_n_b_unissex').prop('required', true);
            $('#escola_sala_supervisao').prop('required', true);
            $('#escola_sala_secretaria').prop('required', true);
            $('#escola_sala_professores').prop('required', true);
            $('#escola_sala_informatica').prop('required', true);
            $('#escola_sala_diretoria').prop('required', true);
            $('#escola_sala_aula').prop('required', true);
            $('#escola_refeitorio').prop('required', true);
            $('#escola_cantina').prop('required', true);
            $('#escola_horta').prop('required', true);
            $('#escola_parquinho').prop('required', true);
            $('#escola_jardim').prop('required', true);
            $('#escola_corredor').prop('required', true);
            $('#escola_biblioteca').prop('required', true);
            $('#escola_sala_leitura').prop('required', true);
            $('#escola_quadra').prop('required', true);
            $('#escola_almoxarifado').prop('required', true);
            $('#escola_depos_perecivel').prop('required', true);
            $('#escola_depos_nao_perecivel').prop('required', true);
            $('#escola_obs').prop('required', true);
            $('#escola_lei').prop('required', true);
            $('#escola_data_cad').prop('required', true);
            $('#escola_educacao_basica').prop('required', true);
            $('#escola_cod_escola_sede').prop('required', true);
            $('#escola_distrito').prop('required', true);
            $('#escola_cod_escola_sede').prop('required', true);
            $('#escola_fax').prop('required', true);
            $('#escola_end_complemento').prop('required', true);
            $('#escola_sala_jogos').prop('required', true);
            $('#escola_sala_ambiental').prop('required', true);
            $('#escola_sala_laboratorio').prop('required', true);
            $('#escola_regulamentacao_conselho').prop('required', true);


            $('#escola_local_func_igreja').prop('required', true);
            $('#escola_local_func_sala_empresa').prop('required', true);
            $('#escola_local_func_casa_prof').prop('required', true);
            $('#escola_local_func_outra_escola').prop('required', true);
            $('#escola_local_func_galpao_rancho').prop('required', true);
            $('#escola_local_func_unidade_socioeducativa').prop('required', true);
            $('#escola_local_func_unidade_prisional').prop('required', true);
            $('#escola_local_func_outros').prop('required', true);
            $('#escola_predio_comp_outra_escola').prop('required', true);
            $('#escola_inep_escola_compartilha').prop('required', true);
            $('#escola_inep_escola_compartilha_2').prop('required', true);
            $('#escola_inep_escola_compartilha_3').prop('required', true);
            $('#escola_inep_escola_compartilha_4').prop('required', true);
            $('#escola_inep_escola_compartilha_5').prop('required', true);
            $('#escola_inep_escola_compartilha_6').prop('required', true);
            $('#escola_agua_alunos').prop('required', true);
            $('#escola_agua_rede_publica').prop('required', true);
            $('#escola_agua_poco').prop('required', true);
            $('#escola_agua_cacimba').prop('required', true);
            $('#escola_agua_rio_riacho').prop('required', true);
            $('#escola_agua_inexistente').prop('required', true);
            $('#escola_energia_rede_publica').prop('required', true);
            $('#escola_energia_gerador').prop('required', true);
            $('#escola_energia_alternativa').prop('required', true);
            $('#escola_energia_inexistente').prop('required', true);
            $('#escola_esgoto_rede_publica').prop('required', true);
            $('#escola_esgoto_fossa').prop('required', true);
            $('#escola_esgoto_inexistente').prop('required', true);
            $('#escola_lixo_coleta_periodica').prop('required', true);
            $('#escola_lixo_queima').prop('required', true);
            $('#escola_lixo_jogado_outra_area').prop('required', true);
            $('#escola_lixo_recicla').prop('required', true);
            $('#escola_lixo_enterra').prop('required', true);
            $('#escola_lixo_outros').prop('required', true);
            $('#escola_sala_ciencias').prop('required', true);
            $('#escola_sala_atend_educ_especializado').prop('required', true);
            $('#escola_quadra_coberta').prop('required', true);
            $('#escola_quadra_descoberta').prop('required', true);
            $('#escola_cozinha').prop('required', true);
            $('#escola_bercario').prop('required', true);
            $('#escola_banheiro_fora_predio').prop('required', true);
            $('#escola_banheiro_dentro_predio').prop('required', true);
            $('#escola_banheiro_adequado_deficientes').prop('required', true);
            $('#escola_vias_adequadas_mobilidades_reduzidas').prop('required', true);
            $('#escola_banheiro_chuveiro').prop('required', true);
            $('#escola_auditorio').prop('required', true);
            $('#escola_patio_coberto').prop('required', true);
            $('#escola_patio_descoberto').prop('required', true);
            $('#escola_alojamento_aluno').prop('required', true);
            $('#escola_alojamento_professor').prop('required', true);
            $('#escola_area_verde').prop('required', true);
            $('#escola_lavanderia').prop('required', true);
            $('#escola_nenhuma_relacionada').prop('required', true);
            $('#escola_qtd_utilizadas_sala_aula').prop('required', true);
            $('#escola_qtd_televisao').prop('required', true);
            $('#escola_qtd_video_cassete').prop('required', true);
            $('#escola_qtd_aparelho_dvd').prop('required', true);
            $('#escola_qtd_antena_parabolica').prop('required', true);
            $('#escola_qtd_copiadora').prop('required', true);
            $('#escola_qtd_retroprojetor').prop('required', true);
            $('#escola_qtd_impressora').prop('required', true);
            $('#escola_qtd_aparelho_de_som').prop('required', true);
            $('#escola_qtd_data_show').prop('required', true);
            $('#escola_qtd_fax').prop('required', true);
            $('#escola_qtd_maquina_foto').prop('required', true);
            $('#escola_qtd_computadores').prop('required', true);
            $('#escola_qtd_impressora_multifuncional').prop('required', true);
            $('#escola_qtd_computadores_uso_adm').prop('required', true);
            $('#escola_qtd_computadores_uso_alunos').prop('required', true);
            $('#escola_local_func_predio_escolar').prop('required', true);
            $('#escola_acesso_internet').prop('required', true);
            $('#escola_acesso_banda_larga').prop('required', true);
            $('#escola_alimentacao_para_alunos').prop('required', true);
            $('#escola_atendimento_especializado').prop('required', true);
            $('#escola_atividade_complementar').prop('required', true);
            $('#escola_modalidade_encino_regular').prop('required', true);
            $('#escola_modalidade_especial_subistitutiva').prop('required', true);
            $('#escola_modalidade_educacao_jovens_adultos').prop('required', true);
            $('#escola_modalidade_educacao_profissional').prop('required', true);
            $('#escola_organizado_ciclos').prop('required', true);
            $('#escola_localizacao_diferenciada').prop('required', true);
            $('#escola_material_didatico_diversidade_nao_utiliza').prop('required', true);
            $('#escola_material_didatico_diversidade_quilombola').prop('required', true);
            $('#escola_material_didatico_diversidade_indigena').prop('required', true);
            $('#escola_indigena').prop('required', true);
            $('#escola_lingua_indigena').prop('required', true);
            $('#escola_lingua_portuguesa').prop('required', true);
            $('#escola_cod_lingua_indigena').prop('required', true);
            $('#escola_brasil_alfabetizado').prop('required', true);
            $('#escola_final_semana_comunidade').prop('required', true);
            $('#escola_formacao_alternacia').prop('required', true);


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
            $('#preview_image1').attr('src', e.target.result).width(140)
        };
        reader.readAsDataURL(input.files[0]);
    }
}
;
