




$(document).ready(function() {
    // $('.valor_uni').each(function() {
    //     var valor = $(this).text();
    //     $(this).text(formatarValor(valor));
    // });

    // $('.valor_pedido').each(function() {
    //     var valor = $(this).text();
    //     $(this).text(formatarValor(valor));
    // });

    function formatarValor(valor) {
        valor = valor.replace(/\s/g, '');
        var valorFormatado = parseFloat(valor).toFixed(2).replace('.', ',');
        valorFormatado = 'R$ ' + valorFormatado;
        return valorFormatado;
    }

    $('.valor_uni').mask("#.##0,00", {reverse: true});
    $('.valor_pedido').mask("#.##0,00", {reverse: true});

    adicionarSimboloReal('.valor_uni'); // Adiciona o símbolo "R$" aos campos
    adicionarSimboloReal('.valor_pedido'); // Adiciona o símbolo "R$" aos campos

    function adicionarSimboloReal(seletor) {
        $(seletor).each(function() {
            var valor = $(this).text();
            $(this).text('R$ ' + valor);
        });
    }
});



$(document).ready(function() {


    function formatarValors(valors) {
        valors = valors.replace(/\s/g, '');
        var valorFormatados = parseFloat(valors).toFixed(2).replace('.', ',');
        valorFormatados = 'R$ ' + valorFormatados;
        return valorFormatados;
    }


    $('.valor_total_pedido').mask("#.##0,00", {reverse: true});


    adicionarSimboloReals('.valor_total_pedido'); // Adiciona o símbolo "R$" aos campos

    function adicionarSimboloReals(seletor) {
        $(seletor).each(function() {
            var valors = $(this).text();
            $(this).text('R$ ' + valors);
        });
    }
});



