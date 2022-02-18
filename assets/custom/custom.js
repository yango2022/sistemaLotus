$(function($){

    $('[data-toggle="tooltip"]').tooltip();
  
    // $(".chzn-select").chosen();

    $(".data").mask("99/99/9999");
    $(".fone").mask("(99) 99999-9999");
    $(".cpf").mask("999.999.999-99");
    $(".cep").mask("99999-999");
    $(".dia").mask("99 de aaaaaaaa? de 9999");//ssss

    $('.hora_format').mask('99:99');

	$('.real').priceFormat({
	    prefix: 'R$ ',
	    centsSeparator: ',',
	    thousandsSeparator: '.'
	});

	// $('.area').priceFormat({
	//     prefix: '',
	//     centsSeparator: ',',
	//     thousandsSeparator: '.'
	// });

 //    $('.porcentagem').priceFormat({
 //        prefix: '% ',
 //        suffix: '',
 //        centsSeparator: ',',
 //        thousandsSeparator: '.'
 //    });

    $(".numero").mask("999.99");

    // $(".cpfcnpj").keydown(function(){
    //     try {
    //         $("#cpfcnpj").unmask();
    //     } catch (e) {}
        
    //     var tamanho = $("#cpfcnpj").val().length;
        
    //     if(tamanho < 11){
    //         $("#cpfcnpj").mask("999.999.999-99");
    //     } else if(tamanho >= 11){
    //         $("#cpfcnpj").mask("99.999.999/9999-99");
    //     }                   
    // });
    // Testando a validação usando jQuery

 
});

function validarCPF(cpf) {
        var filtro = /^\d{3}.\d{3}.\d{3}-\d{2}$/i;

        if (!filtro.test(cpf))
        {
            window.alert("CPF inválido. Tente novamente.");
            document.getElementById('cpf').value = '';
            return false;
        }

        cpf = remove(cpf, ".");
        cpf = remove(cpf, "-");

        if (cpf.length !== 11 || cpf === "00000000000" || cpf === "11111111111" ||
                cpf === "22222222222" || cpf === "33333333333" || cpf === "44444444444" ||
                cpf === "55555555555" || cpf === "66666666666" || cpf === "77777777777" ||
                cpf === "88888888888" || cpf === "99999999999")
        {
            window.alert("CPF inválido. Tente novamente.");
            document.getElementById('cpf').value = '';
            return false;
        }

        soma = 0;
        for (i = 0; i < 9; i++)
        {
            soma += parseInt(cpf.charAt(i)) * (10 - i);
        }

        resto = 11 - (soma % 11);
        if (resto === 10 || resto === 11)
        {
            resto = 0;
        }
        if (resto !== parseInt(cpf.charAt(9))) {
            window.alert("CPF inválido. Tente novamente.");
            document.getElementById('cpf').value = '';
            return false;
        }

        soma = 0;
        for (i = 0; i < 10; i++)
        {
            soma += parseInt(cpf.charAt(i)) * (11 - i);
        }
        resto = 11 - (soma % 11);
        if (resto === 10 || resto === 11)
        {
            resto = 0;
        }

        if (resto !== parseInt(cpf.charAt(10))) {
            window.alert("CPF inválido. Tente novamente.");
            document.getElementById('cpf').value = '';
            return false;
        }

        return true;
    }

    function remove(str, sub) {
        i = str.indexOf(sub);
        r = "";
        if (i === -1)
            return str;
        {
            r += str.substring(0, i) + remove(str.substring(i + sub.length), sub);
        }

        return r;
    }

    /**
     * MASCARA ( mascara(o,f) e execmascara() ) CRIADAS POR ELCIO LUIZ
     * elcio.com.br
     */
    function mascara(o, f) {
        v_obj = o;
        v_fun = f;
        setTimeout("execmascara()", 1);
    }

    function execmascara() {
        v_obj.value = v_fun(v_obj.value);
    }

    function soNumeros(v){
    return v.replace(/\D/g,"")
    }

    function valor(v){
    // v = v.replace(/(\d{4})(\d)/, "$1.$2");
    v = v.replace(/(\d{3})(\d)/, "$1,$2");
    // v = v.replace(/(\d{})(\d)/, "$1.$2");
    return v;
    }

    function cpf_mask(v) {
        v = v.replace(/\D/g, "");                 //Remove tudo o que não é dígito
        v = v.replace(/(\d{3})(\d)/, "$1.$2");    //Coloca ponto entre o terceiro e o quarto dígitos
        v = v.replace(/(\d{3})(\d)/, "$1.$2");   //Coloca ponto entre o setimo e o oitava dígitos
        v = v.replace(/(\d{3})(\d)/, "$1-$2");   //Coloca ponto entre o decimoprimeiro e o decimosegundo dígitos
        return v;
    }

    function cpf1f(v) {
        v = v.replace(/\D/g, "");                 //Remove tudo o que não é dígito
        v = v.replace(/(\d{3})(\d)/, "$1.$2");    //Coloca ponto entre o terceiro e o quarto dígitos
        v = v.replace(/(\d{3})(\d)/, "$1.$2");   //Coloca ponto entre o setimo e o oitava dígitos
        v = v.replace(/(\d{3})(\d)/, "$1-$2");   //Coloca ponto entre o decimoprimeiro e o decimosegundo dígitos
        return v;
    }

    function cpf2f(v) {
        v = v.replace(/\D/g, "");                 //Remove tudo o que não é dígito
        v = v.replace(/(\d{3})(\d)/, "$1.$2");    //Coloca ponto entre o terceiro e o quarto dígitos
        v = v.replace(/(\d{3})(\d)/, "$1.$2");   //Coloca ponto entre o setimo e o oitava dígitos
        v = v.replace(/(\d{3})(\d)/, "$1-$2");   //Coloca ponto entre o decimoprimeiro e o decimosegundo dígitos
        return v;
    }

    function cpfresp(v) {
        v = v.replace(/\D/g, "");                 //Remove tudo o que não é dígito
        v = v.replace(/(\d{3})(\d)/, "$1.$2");    //Coloca ponto entre o terceiro e o quarto dígitos
        v = v.replace(/(\d{3})(\d)/, "$1.$2");   //Coloca ponto entre o setimo e o oitava dígitos
        v = v.replace(/(\d{3})(\d)/, "$1-$2");   //Coloca ponto entre o decimoprimeiro e o decimosegundo dígitos
        return v;
    }

    function telefone(v) {
        v = v.replace(/\D/g, "");                 //Remove tudo o que não é dígito
        v = v.replace(/^(\d\d)(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v = v.replace(/(\d{4})(\d)/, "$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }

    function celular(v) {
        v = v.replace(/\D/g, "");                //Remove tudo o que não é dígito
        v = v.replace(/^(\d\d)(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v = v.replace(/(\d{5})(\d)/, "$1-$2");   //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }

    function telefoneresp(v) {
        v = v.replace(/\D/g, "");                //Remove tudo o que não é dígito
        v = v.replace(/^(\d\d)(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v = v.replace(/(\d{5})(\d)/, "$1-$2");   //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }

    function telefonecresp(v) {
        v = v.replace(/\D/g, "");                //Remove tudo o que não é dígito
        v = v.replace(/^(\d\d)(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v = v.replace(/(\d{5})(\d)/, "$1-$2");   //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }

    function cep(v){  //MASCARA PARA CEP

    v=v.replace(/\D/g,"")                      //Remove tudo o que não é dígito
    v=v.replace(/^(\d{5})(\d)/,"$1-$2")         //Esse é tão fácil que não merece explicações
    return v;
}

 function rg(v){  //MASCARA PARA RG
        v=v.replace(/\D/g,"");                                      
     return v;
 }

