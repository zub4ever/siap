// $(document).ready(function() {
//     $('.itemPedido').select2();
//
//     // Evento de alteração do item selecionado
//     $(document).on('change', '.itemPedido', function() {
//         var valorUnidade = $(this).find(':selected').data('valor');
//         var row = $(this).closest('.item-row');
//         row.find('input[name="valor_uni[]"]').val(valorUnidade);
//         calcularValorTotal(row);
//     });
//
//     // Evento de alteração da quantidade
//     $(document).on('keyup', 'input[name="quantidade_pedido[]"]', function() {
//         var row = $(this).closest('.item-row');
//         calcularValorTotal(row);
//     });
//
//     // Função para calcular o valor total
//     function calcularValorTotal(row) {
//         var quantidade = row.find('input[name="quantidade_pedido[]"]').val();
//         var valorUnidade = row.find('input[name="valor_uni[]"]').val();
//         var valorTotal = parseFloat(quantidade) * parseFloat(valorUnidade);
//         row.find('input[name="valor_pedido[]"]').val(valorTotal.toFixed(2));
//     }
//
//     $('#valorContrato').mask("#.##0,00", {reverse: true});
// });
//
// $(document).ready(function() {
//     var maxRows = 50; // Número máximo de linhas
//
//     // Adicionar item
//     $('#btn-adicionar-item').click(function() {
//         if ($('.item-row').length < maxRows) {
//             var clone = $('.item-row').first().clone();
//
//             // Limpar valores dos campos adicionados
//             clone.find('input[name="quantidade_pedido[]"], input[name="valor_uni[]"], input[name="valor_pedido[]"]').val('');
//
//             // Limpar valor selecionado do campo de seleção "Item"
//             clone.find('select[name="almoxarifado_virtual_item_id[]"]').val('').trigger('change');
//
//             // Reinicializar o plugin Select2 para os selects adicionais, excluindo o primeiro
//             clone.find('.itemPedido:not(:first)').select2();
//
//             // Remover classes de erro e mensagens de validação
//             clone.find('.error').removeClass('error');
//             clone.find('.error-message').remove();
//
//             clone.appendTo('#itens-container');
//         }
//     });
//
//     // Remover item
//     $(document).on('click', '.btn-remover-item', function() {
//         if ($('.item-row').length > 1) {
//             $(this).closest('.item-row').remove();
//         }
//     });
// });
// $(document).ready(function () {
//     //Sem esse nao funciona
//     $('.valor').mask("#.##0,00", {reverse: true});
// });
