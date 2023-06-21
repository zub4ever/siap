$(document).ready(function () {

    $('.almo_virtual_empresa-select2').select2();
    $('.elemento_despesa-select2').select2();
    $('.fonte_recurso-select2').select2();
    $('.almo_virtual_programa_trabalho-select2').select2();

    $('.valor').mask("#.##0,00", {reverse: true});

});
