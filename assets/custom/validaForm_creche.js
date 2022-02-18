

window.onload = function () {
    /////MENU IDENTIFICAÇÃO/////////////////////////////////////////////////
    ////////////////////CAMPOS CERTIDÃO DE NASC/////////////////////
    id('lista_creche_cert_nasc').onchange = function () {
        if (this.value == '1') {
            id('lista_creche_antigo').style.display = 'block';
        } else {
            id('lista_creche_antigo').style.display = 'none';
            $('.lista_creche_antigo').val('');
        }

        if (this.value == '2') {
            id('lista_creche_novo').style.display = 'block';
        } else {
            id('lista_creche_novo').style.display = 'none';
            $('.lista_creche_novo').val('');
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
    id('lista_creche_alergias').onchange = function () {
        if (this.value == '1') {
            $('#lista_creche_alerg_qual').prop('disabled', false);
        } else {
            $('#lista_creche_alerg_qual').prop('disabled', true);
            $('#lista_creche_alerg_qual').val('');
        }
    };
    ////////////////////CAMPOS ESPECIAL/////////////////////////////                
    id('especial').onchange = function () {
        if (this.value == '1') {
            $('#especial_qual').prop('disabled', false);
            // $('#especial_qual').prop('required=', true);
        } else {
            $('#especial_qual').prop('disabled', true);
            $('#especial_qual').val('');
        }
    };

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
            // $('#especial_qual').prop('required=', true);
        } else {
            $('#programa_social_qual').prop('disabled', true);
            $('#programa_social_qual').val('');
        }
    };

}; // funal window.onload = function









