

window.onload = function () {

    //////////////////// TURMA TIPO MEDIAÇÃO /////////////////////
    id('tipo_mediacao').onchange = function () {

        if (this.value == '1') {
            id('horario').style.display = 'block';
            $('#turma_h_inicial').prop('required', true);
            $('#turma_h_final').prop('required', true);
            $('#programa_mais_educacao_inovador').prop('required', true);
        } else {

            $(".parsley-error").removeClass('parsley-error');
            $(".parsley-min").removeClass('parsley-min');
            $('ul.parsley-errors-list').html('');
            $("#turma_h_inicial").parsley().destroy();
            $("#turma_h_final").parsley().destroy();
            $("#programa_mais_educacao_inovador").parsley().destroy();


            $('#turma_h_inicial').val('');
            $('#turma_h_inicial').prop('required', false);

            $('#turma_h_final').val('');
            $('#turma_h_final').prop('required', false);

            $('#programa_mais_educacao_inovador').val('');
            $('#programa_mais_educacao_inovador').prop('required', false);

            id('horario').style.display = 'none';
            $('.horario').val('');

        }

    };

};/* fecha do window.onload */



function atendimento(valor) {

    id('aee').style.display = 'none';
    $('.aee').val('');
    id('atividade').style.display = 'none';
    $('.atividade').val('');
    id('modalidade').style.display = 'block';
    $('.modalidade').val('');

    $('#turma_h_inicial').val('00:00');
    $('#turma_h_inicial').prop('required', false);

    $('#turma_h_final').val('00:00');
    $('#turma_h_final').prop('required', false);

    var $valor = document.getElementById("tipo_datendimento");

    switch (valor) {
        case '4':

            //alert(valor);
            id('atividade').style.display = 'block';

            $('#cod_tipo_atividade').val('0');
            $('#cod_tipo_atividade').prop('required', true);

            id('modalidade').style.display = 'none';
            $('.modalidade').val('');

            break;

        case '5':

            id('aee').style.display = 'block';

            $('#ensino_braille').val('');
            $('#ensino_braille').prop('required', true);

            $('#ensino_material_optico').val('');
            $('#ensino_material_optico').prop('required', true);

            $('#ensino_processos_mentais').val('');
            $('#ensino_processos_mentais').prop('required', true);

            $('#ensino_libras').val('');
            $('#ensino_libras').prop('required', true);

            $('#ensino_caa').val('');
            $('#ensino_caa').prop('required', true);

            $('#ensino_enriquecimento_curricular').val('');
            $('#ensino_enriquecimento_curricular').prop('required', true);

            $('#ensino_soroban').val('');
            $('#ensino_soroban').prop('required', true);

            $('#ensino_informatica_acessivel').val('');
            $('#ensino_informatica_acessivel').prop('required', true);

            $('#ensino_portuques_escrita').val('');
            $('#ensino_portuques_escrita').prop('required', true);

            $('#ensino_automomia_escolar').val('');
            $('#ensino_automomia_escolar').prop('required', true);

            $('#ensino_modalidade').val('');
            $('#ensino_modalidade').prop('required', true);

            $('#ensino_estapa_ensino').val('');
            $('#ensino_estapa_ensino').prop('required', true);

            $('#ensino_cod_curso_tecnico').val('');
            $('#ensino_cod_curso_tecnico').prop('required', true);

            id('modalidade').style.display = 'none';
            $('.modalidade').val('');

            break;

        default:
            //alert('Favor escolher um número de 0 à 6!');
            // removo a versão 4 se existir 
            id('aee').style.display = 'none';
            $('.aee').val('');
            id('atividade').style.display = 'none';
            $('.atividade').val('');
            id('modalidade').style.display = 'block';
            $('.modalidade').val('');

            $('#turma_h_inicial').val('00:00');
            $('#turma_h_inicial').prop('required', false);

            $('#turma_h_final').val('00:00');
            $('#turma_h_final').prop('required', false);



            break;

    }


}

