$(document).ready(function () {
  

  
    $("#cpfD").mask("000.000.000-00");

    $("#data_nascimento").mask("00/00/0000");

    //TESTES
    $("#rg").mask("999.999.999-W", {
        translation: {
            'W': {
                pattern: /[X0-9]/
            }
        },
        reverse: true
    });

    var options = {
        translation: {
            'A': {pattern: /[A-Z]/},
            'a': {pattern: /[a-zA-Z]/},
            'S': {pattern: /[a-zA-Z0-9]/},
            'L': {pattern: /[a-z]/},
        }
    }

    $("#telefoneD").blur(function (event) {
        if ($(this).val().length == 15) {
            $("#telefoneD").mask("(00) 00000-0009")
        } else {
            $("#telefoneD").mask("(00) 0000-00009")
        }
    });

    //$("#celular").mask("(00) 00000-00009")

    $("#telefone").blur(function (event) {
        if ($(this).val().length == 15) {
            $("#telefone").mask("(00) 00000-0009")
        } else {
            $("#telefone").mask("(00) 0000-00009")
        }
    });

});