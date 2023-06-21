$(document).ready(function() {
    var maxRows = 20; // Número máximo de linhas

    // Adicionar item
    $('#btn-adicionar-item').click(function() {
        if ($('.item-row').length < maxRows) {
            var clone = $('.item-row').first().clone();
            clone.find(':input').val('');

            // Copiar valor do campo almoxarifado_virtual_contrato_empenho_id da primeira linha
            var contratoEmpenhoId = $('.item-row:first').find('input[name="almoxarifado_virtual_contrato_empenho_id[]"]').val();
            clone.find('input[name="almoxarifado_virtual_contrato_empenho_id[]"]').val(contratoEmpenhoId);

            clone.appendTo('#itens-container');
        }
    });

    // Remover item
    $(document).on('click', '.btn-remover-item', function() {
        if ($('.item-row').length > 1) {
            $(this).closest('.item-row').remove();
        }
    });
});

