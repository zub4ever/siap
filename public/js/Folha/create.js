$(document).ready(function() {
    $('.valor').mask("00.000.000,00", {reverse: true});
    $('.valorfprev').mask("00.000.000,00", {reverse: true});
    $('.valorapffin').mask("00.000.000,00", {reverse: true});
    $('.valorpffin').mask("00.000.000,00", {reverse: true});

    $('form').submit(function() {
        $('.valor, .valorfprev, .valorapffin, .valorpffin').each(function() {
            var valor = $(this).val();
            valor = valor.replace(/\./g, '');
            valor = valor.replace(',', '.');
            $(this).val(valor);
        });
    });
});
