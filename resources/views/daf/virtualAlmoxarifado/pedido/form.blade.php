<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
        <p><strong># {{ $idContrato->id }}</strong></p>
        <p>Código do GRP: {{ $idContrato->cod_grp }}</p>
        <p>Número do Contrato: {{ $idContrato->nr_contrato }}</p>
        <p>Número processo no SEI: {{ $idContrato->nr_sei }}</p>
        <p>Nome da Empresa Contratada: {{ $idContrato->razao_social }}</p>
        <p>Valor total contrato R$: <span id="valor">{{ $idContrato->saldo_total }}</span></p>
    </div>
</div>
<hr>

<form id="itemForm">
    <div id="formItems" class="item-row">
        <div class="item-row row">
            <div class="form-group col-md-1">
                <div class="wrap">
                    <label for="almoxarifado_virtual_contrato_empenho_id" class="form-control-label"># Contrato</label>
                    <input type="text" name="almoxarifado_virtual_contrato_empenho_id[]" value="{{$id}}" readonly>
                </div>
            </div>

            <div class="form-group col-md-2">
                <div class="wrap">
                    <label for="almoxarifado_virtual_item_id" class="form-control-label">Item
                        <span class="text-danger">*</span>
                    </label>
                    <select name="almoxarifado_virtual_item_id[]" class="form-control itemPedido"
                            id="almoxarifado_virtual_item_id">
                        <option value="">Selecione um item</option>
                        @foreach ($item as $itens)
                            <option
                                value="{{ $itens->id }}"
                                data-valor="{{ $itens->valor_uni }}" {{ (in_array($itens->id, old('almoxarifado_virtual_item_id', [])) || @$itens->almoxarifado_virtual_item_id == $itens->id) ? 'selected' : '' }}>
                                {{ $itens->id }} - {{ $itens->descricao}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group col-md-2">
                <div class="wrap">
                    <label for="almoxarifado_virtual_cx_uni_id" class="form-control-label">CX|UN
                        <span class="text-danger">*</span>
                    </label>
                    <select name="almoxarifado_virtual_cx_uni_id[]" class="form-control"
                            id="almoxarifado_virtual_cx_uni_id">
                        <option value="">Selecione um item</option>
                        @foreach ($cxuni as $cx)
                            <option
                                value="{{ $cx->id }}" {{ (in_array($cx->id, old('almoxarifado_virtual_cx_uni_id', [])) || @$cx->almoxarifado_virtual_cx_uni_id == $cx->id) ? 'selected' : '' }}>
                                {{ $cx->nm_caixa_unidade}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group col-md-1">
                <div class="wrap">
                    <label for="quantidade_pedido" class="form-control-label">Qtd:
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="quantidade_pedido[]" class="form-control quantidade" placeholder="Qtd">
                </div>
            </div>

            <div class="form-group col-md-2">
                <div class="wrap">
                    <label for="valor_uni" class="form-control-label">Valor (R$):
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="valor_uni[]" class="form-control valor" placeholder="Valor" readonly>
                </div>
            </div>
            <div class="form-group col-md-2">
                <div class="wrap">
                    <label for="valor_pedido" class="form-control-label">Valor total (R$):
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="valor_pedido[]" class="form-control valor_pedido" placeholder="Valor"
                           readonly>
                </div>
            </div>

            <div class="form-group col-md-2 text-center align-self-center">
                <div class="wrap">
                    <label for="" class="form-control-label">Ação:</label>
                </div>
                <button type="button" class="btn btn-danger btn-remover-item">X</button>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="button" id="btn-adicionar-item" class="btn btn-primary">Adicionar item</button>
    </div>
    <div id="itens-container">
        <h4>Itens adicionados:</h4>
        <table id="itens-table">
            <tr>
                <th># Contrato</th>
                <th>Item</th>
                <th>CX|UN</th>
                <th>Qtd</th>
                <th>Valor (R$)</th>
                <th>Valor total (R$)</th>
                <th>Ação</th>
            </tr>
        </table>
    </div>


</form>

<script>
    $(document).ready(function () {
        // Inicializar o Select2
        $('.itemPedido').select2();

        // Evento de alteração do item selecionado
        $(document).on('change', '.itemPedido', function () {
            var row = $(this).closest('.item-row');
            calcularValorTotal(row);
        });

        // Evento de alteração da quantidade
        $(document).on('keyup', '.quantidade', function () {
            var row = $(this).closest('.item-row');
            calcularValorTotal(row);
        });

        // Função para calcular o valor total
        function calcularValorTotal(row) {
            var quantidade = row.find('.quantidade').val();
            var valorUnidade = row.find('.itemPedido :selected').data('valor');
            var valorTotal = parseFloat(quantidade) * parseFloat(valorUnidade);

            row.find('.valor').val(valorUnidade.toFixed(2));
            row.find('.valor_pedido').val(valorTotal.toFixed(2));
        }

        // Variável para armazenar a lista de itens selecionados
        var itemList = [];

        // Adicionar item
        // Adicionar item
        // Adicionar item
        $('#btn-adicionar-item').click(function() {
            var newItem = {};

            // Obter os valores dos campos do item atual
            var itemRow = $(this).closest('.item-row');
            newItem.almoxarifado_virtual_contrato_empenho_id = itemRow.find('[name="almoxarifado_virtual_contrato_empenho_id[]"]').val();
            newItem.almoxarifado_virtual_item_id = itemRow.find('[name="almoxarifado_virtual_item_id[]"]').val();
            newItem.almoxarifado_virtual_cx_uni_id = itemRow.find('[name="almoxarifado_virtual_cx_uni_id[]"]').val();
            newItem.quantidade_pedido = itemRow.find('[name="quantidade_pedido[]"]').val();
            newItem.valor_uni = itemRow.find('.valor').val();
            newItem.valor_pedido = itemRow.find('.valor_pedido').val();

            console.log('Novo Item:', newItem); // Exibir os valores capturados do item

            // Adicionar o item à lista
            itemList.push(newItem);

            console.log('Lista de Itens:', itemList); // Exibir a lista de itens atualizada

            // Limpar os campos do item atual
            itemRow.find('input[type="text"]').val('');

            // Limpar a tabela de itens
            $('#itens-table').empty();

            // Cabeçalho da tabela
            var tableHeader = '<tr><th># Contrato</th><th>Item</th><th>CX|UN</th><th>Qtd</th><th>Valor (R$)</th><th>Valor total (R$)</th><th>Ação</th></tr>';
            $('#itens-table').append(tableHeader);

            // Iterar sobre os itens da lista e criar as linhas da tabela
            $.each(itemList, function(index, item) {
                var tableRow = '<tr>' +
                    '<td>' + (item.almoxarifado_virtual_contrato_empenho_id || '') + '</td>' +
                    '<td>' + (item.almoxarifado_virtual_item_id || '') + '</td>' +
                    '<td>' + (item.almoxarifado_virtual_cx_uni_id || '') + '</td>' +
                    '<td>' + (item.quantidade_pedido || '') + '</td>' +
                    '<td>' + (item.valor_uni || '') + '</td>' +
                    '<td>' + (item.valor_pedido || '') + '</td>' +
                    '<td><button type="button" class="btn btn-danger btn-remover-item">X</button></td>' +
                    '</tr>';
                $('#itens-table').append(tableRow);
            });
        });


        // Remover item
        $(document).on('click', '.btn-remover-item', function () {
            var rowIndex = $(this).closest('tr').index();
            itemList.splice(rowIndex, 1);

            $(this).closest('tr').remove();
        });
    });

</script>


