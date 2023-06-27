$(document).ready(function() {
    $('.valor').mask("#.##0,00", {reverse: true});

    var valorTotalContrato = parseFloat($('#valor').text().replace(',', '.'));
    $('#valor').text(valorTotalContrato.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }));
});
