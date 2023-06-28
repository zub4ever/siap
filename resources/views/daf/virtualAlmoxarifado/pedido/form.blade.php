<style>
    .row-container {
        margin-bottom: 10px;
    }

    .row-container:not(:first-child) {
        margin-top: 10px;
    }

    .remove-btn {
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        cursor: pointer;
        background-color: red;
        border: 1px solid #ddd;
        border-radius: 50%;
        font-size: 16px;
    }
</style>

<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
        <p><strong># {{ $idContrato->id }}</strong></p>
        <p>Código do GRP: {{ $idContrato->cod_grp }}</p>
        <p>Número do Contrato: {{ $idContrato->nr_contrato }}</p>
        <p>Número processo no SEI: {{ $idContrato->nr_sei }}</p>
        <p>Nome da Empresa Contratada: {{ $idContrato->razao_social }}</p>
        <p>Valor total contrato: <span id="valor">{{ $idContrato->saldo_total }}</span></p>
    </div>
</div>
<hr>
<div class="row-container" id="row-container">
    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-12">
            <input type="text" name="almoxarifado_virtual_contrato_empenho_id[]" value="{{$id}}" readonly>

        </div>
        <div class="col-lg-1 col-md-1 col-sm-12">
            <input type="text" id="nr-pedido" name="nr_pedido[]" class="form-control nr-pedido" readonly>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-12">
            <select class="select2 w-100 item-select" name="almoxarifado_virtual_item_id[]">
                <option value="">Selecione</option>
                @foreach ($item as $items)
                    <option value="{{ $items->id }}">{{ $items->descricao }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
            <select class="select2 w-100 cx-uni-select" name="almoxarifado_virtual_cx_uni_id[]">
                <option value="">Selecione</option>
                @foreach ($cxuni as $cx)
                    <option value="{{ $cx->id }}">{{ $cx->nm_caixa_unidade }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-12">
            <input type="number" class="form-control quantidade-pedido" name="quantidade_pedido[]"
                   placeholder="Quantidade">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
            <input type="text" class="form-control valor-uni" name="valor_uni[]" placeholder="Valor unitário" readonly>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
            <input type="number" class="form-control valor-pedido" name="valor_pedido[]" placeholder="Total pedido"
                   readonly>
        </div>

        <div class="col-lg-1 col-md-1 col-sm-12">
            <div class="remove-btn" onclick="removeRow(this)">X</div>
        </div>
    </div>
</div>


<br>
<div class="form-group">
    <button type="button" id="add-row" class="btn btn-outline-info">Adicionar item</button>
</div>

<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: right;">
        <button type="submit" class="btn btn-info">Salvar</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    $(document).ready(function () {
        // Função para gerar o número do pedido
        function generateNumber() {
            var currentDate = new Date();
            var day = currentDate.getDate().toString().padStart(2, '0');
            var month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
            var year = currentDate.getFullYear().toString().slice(-2);
            var hours = currentDate.getHours().toString().padStart(2, '0');
            var minutes = currentDate.getMinutes().toString().padStart(2, '0');

            var number = day + month + year + hours + minutes;
            return number;
        }

        // Gerar o número do pedido ao carregar a página
        var nr_pedido = generateNumber();
        $('#nr-pedido').val(nr_pedido);


        $('.select2').select2();
        $('.valor-uni').mask("#.##0,00", {reverse: true});

        $('#add-row').on('click', function () {


            var newRow = '<div class="row-container">' +
                '<hr>'+
                '<div class="row">' +
                '<div class="col-lg-1 col-md-1 col-sm-12">' +
                '<input type="text" name="almoxarifado_virtual_contrato_empenho_id[]" value="{{$id}}" readonly>' +
                '</div>' +
                '<div class="col-lg-1 col-md-1 col-sm-12">' +
                '<input type="text" id="nr-pedido" name="nr_pedido[]" class="form-control nr-pedido" readonly>' +
                '</div>' +
                '<div class="col-lg-2 col-md-2 col-sm-12">' +
                '<select class="select2 w-100 item-select" name="almoxarifado_virtual_item_id[]">' +
                '<option value="">Selecione</option>' +
                '@foreach ($item as $items)' +
                '<option value="{{ $items->id }}">{{ $items->descricao }}</option>' +
                '@endforeach' +
                '</select>' +
                '</div>' +
                '<div class="col-lg-2 col-md-2 col-sm-12">' +
                '<select class="select2 w-100 cx-uni-select" name="almoxarifado_virtual_cx_uni_id[]">' +
                '<option value="">Selecione</option>' +
                '@foreach ($cxuni as $cx)' +
                '<option value="{{ $cx->id }}">{{ $cx->nm_caixa_unidade }}</option>' +
                '@endforeach' +
                '</select>' +
                '</div>' +
                '<div class="col-lg-1 col-md-1 col-sm-12">' +
                '<input type="number" class="form-control quantidade-pedido" name="quantidade_pedido[]" placeholder="Quantidade">' +
                '</div>' +
                '<div class="col-lg-2 col-md-2 col-sm-12">' +
                '<input type="text" class="form-control valor-uni" name="valor_uni[]" placeholder="Valor Unitário" readonly>' +
                '</div>' +
                '<div class="col-lg-2 col-md-2 col-sm-12">' +
                '<input type="number" class="form-control valor-pedido" name="valor_pedido[]" placeholder="Total pedido" readonly>' +
                '</div>' +
                '<div class="col-lg-1 col-md-1 col-sm-12">' +
                '<div class="remove-btn" onclick="removeRow(this)">X</div>' +
                '</div>' +
                '</div>' +
                '<hr>'+
                '</div>';

            $('#row-container').append(newRow);
            $('.select2').select2();
            $('.valor-uni').mask("#.##0,00", {reverse: true});

            // Clonar o valor do nr-pedido da primeira linha para as novas linhas adicionadas
            var nrPedidoPrimeiraLinha = $('#nr-pedido').val();
            $('.nr-pedido:last').val(nrPedidoPrimeiraLinha);


        });

        $(document).on('change', '.item-select', function () {
            var selectedId = $(this).val();
            var row = $(this).closest('.row');
            var valorUniInput = row.find('.valor-uni');
            var valorPedidoInput = row.find('.valor-pedido');

            if (selectedId !== '') {
                getValorUniFromDatabase(selectedId)
                    .then(valorUni => {
                        valorUniInput.val(valorUni.toFixed(2));
                        recalculatePedidoValue(row);
                    })
                    .catch(error => {
                        console.error('Erro ao obter o valor unitário:', error);
                        valorUniInput.val('0.00');
                    });
            } else {
                valorUniInput.val('0.00');
            }

            recalculatePedidoValue(row);
        });

        $(document).on('input', '.quantidade-pedido', function () {
            var row = $(this).closest('.row');
            recalculatePedidoValue(row);
        });

        function recalculatePedidoValue(row) {
            var quantidadePedidoInput = row.find('.quantidade-pedido');
            var valorUniInput = row.find('.valor-uni');
            var valorPedidoInput = row.find('.valor-pedido');

            var quantidadePedido = parseFloat(quantidadePedidoInput.val()) || 0;
            var valorUni = parseFloat(valorUniInput.val()) || 0;
            var valorPedido = valorUni * quantidadePedido;

            valorPedidoInput.val(valorPedido.toFixed(2));
        }


        function removeRow(btn) {
            $(btn).closest('.row-container').remove();
        }

        function getValorUniFromDatabase(itemId) {
            return fetch('/get-valor-uni?id=' + itemId)
                .then(response => response.json())
                .then(data => {
                    return data.valorUni;
                })
                .catch(error => {
                    console.error('Erro ao obter o valor unitário do banco de dados:', error);
                    return 0;
                });
        }
    });
</script>

