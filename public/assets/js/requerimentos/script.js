

/*
$(document).ready(function () {
  var cpf = document.querySelector("#cpf");
  cpf.addEventListener("blur", function () {
    if (cpf.value) cpf.value = cpf.value.match(/.{1,3}/g).join(".").replace(/\.(?=[^.]*$)/, "-");
  });
}); */

// MASCARAS
jQuery(function ($) {
  $("#data_nascimento").mask("99-99-9999", {
    completed: function () {
      console.log('complete')
      var value = $(this).val().split('-');
      var maximos = [31, 12, 2100];
      var novoValor = value.map(function (parcela, i) {
        if (parseInt(parcela, 10) > maximos[i]) return maximos[i];
        return parcela;
      });
      if (novoValor.toString() != value.toString()) $(this).val(novoValor.join('-')).focus();
    }
  });
  $("#data_solicitacao").mask("99-99-9999", {
    completed: function () {
      console.log('complete')
      var value = $(this).val().split('-');
      var maximos = [31, 12, 2100];
      var novoValor = value.map(function (parcela, i) {
        if (parseInt(parcela, 10) > maximos[i]) return maximos[i];
        return parcela;
      });
      if (novoValor.toString() != value.toString()) $(this).val(novoValor.join('-')).focus();
    }
  });

  $("#fone").mask("(99) 9999-9999");
  $("#cpf").mask("999.999.999-99");
  $("#cep").mask("99.999-999");
});
// ADICIONANDO METHOD DE DATA NO VALIDATION
$.validator.addMethod("data", function (value, element) {
  return value.match(/^\d\d?\/\d\d\/\d\d\d\d$/);
  return this.optional(element) || retorno;
},
  "Por favor, informe uma data válida"

);




// ADICIONANDO METHOD DE CPF NO VALIDATION
jQuery.validator.addMethod("cpf", function (value, element) {
  value = jQuery.trim(value);
  value = value.replace('.', '');
  value = value.replace('.', '');
  cpf = value.replace('-', '');
  while (cpf.length < 11) cpf = "0" + cpf;
  var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
  var a = [];
  var b = new Number;
  var c = 11;
  for (i = 0; i < 11; i++) {
    a[i] = cpf.charAt(i);
    if (i < 9) b += (a[i] * --c);
  }
  if ((x = b % 11) < 2) {
    a[9] = 0
  } else {
    a[9] = 11 - x
  }
  b = 0;
  c = 11;
  for (y = 0; y < 10; y++) b += (a[y] * c--);
  if ((x = b % 11) < 2) {
    a[10] = 0;
  } else {
    a[10] = 11 - x;
  }

  var retorno = true;
  if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) retorno = false;

  return this.optional(element) || retorno;

}, "Informe um CPF válido");



// FUNÇÃO BUSCAR O CEP
function getEndereco(cep) {
  if ($.trim(cep) != "") {
    $("#loadingCep").html('Pesquisando...');
    $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep=" + cep, function () {
      if (resultadoCEP["resultado"] != 0) {
        $("#cidade").val(unescape(resultadoCEP["cidade"]));
        $("#estado").val(unescape(resultadoCEP["uf"]));
        $("#loadingCep").html("Pronto.");
      } else {
        $("#loadingCep").html("Não encontramos o CEP informado.");
        $("#cep").addClass("error");
      }
    });
  } else {
    $("#cep", input).addClass("error");
    $("#loadingCep").html('Informe o CEP.');
  }
}
//BUSCAR CEP
$(document).ready(function () {
  $("#getEndereco").click(function () {
    getEndereco($("#cep").val());
  });
});


// TELEFONE
$.validator.addMethod("fone", function (value, element) {
  return value.match(/^\d\d?\/\d\d\d\d\-\d\d\d\d$/);

},
  "Por favor, informe uma data válida"

);

// NOME 


//VALIDAÇÂO
$(document).ready(function () {

  $("#formH2H").validate({
    rules: {
      cpf: {
        cpf: true,
        required: true
      }

    },
    messages: {
      cpf: {
        cpf: 'CPF inválido'
      }
    }

    ,
    submitHandler: function (form) {
      alert('Muito bem, as informações estão corretas.');
    }
  });
});