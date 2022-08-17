$(document).ready(function () {

    $('.servidor-select2').select2();

    $('.almo_tipos-select2').select2();
    $('.almo_contrato-select2').select2();
    $('.almo_condicao-select2').select2();
    $('.almo_marca-select2').select2();
    $('.almo_localizacao_dpto-select2').select2();
    $('.almo_responsavel-select2').select2();

    $('#almoxarifado_cedido_id').change(function(){
        var valor = $('#almoxarifado_cedido_id').val();
        if (valor == "2"){
          $('#cedido_localizacao').show();
        }
        else {
          $('#cedido_localizacao').hide();
        }
      });

});



