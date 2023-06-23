<div id="itens-container">
    <!-- Linha de item inicial -->
    <div class="item-row row">

        <div class="form-group col-md-1 d-flex align-items-center">
            <label for="almoxarifado_virtual_contrato_empenho_id"></label>
            <input type="text" name="almoxarifado_virtual_contrato_empenho_id[]" value="{{$id}}" readonly>
        </div>


        <div class="form-group col-md-2">
            <input type="text" name="cod_item[]" class="form-control" placeholder="Código do Item">
        </div>

        <div class="form-group col-md-3">
            <input type="text" name="descricao[]" class="form-control" placeholder="Descrição">
        </div>

        <div class="form-group col-md-3">
{{--            <input type="text" name="almoxarifado_virtual_categoria_id[]" class="form-control" placeholder="Categoria">--}}

            <select name="almoxarifado_virtual_categoria_id[]" class="form-control almo_virtual_empresa-select2"
                    id="almoxarifado_virtual_categoria_id">
                <option value="">Selecione uma categoria</option>
                @foreach ($almo_virtual_categoria as $categoria)
                    <option value="{{ $categoria->id }}" {{ (in_array($categoria->id, old('almoxarifado_virtual_categoria_id', [])) || @$categoria->almoxarifado_virtual_categoria_id == $categoria->id) ? 'selected' : '' }}>
                        {{ $categoria->id }} - {{ $categoria->nm_categoria }}
                    </option>
                @endforeach
            </select>

        </div>

        <div class="form-group col-md-2">
            <input type="text" name="valor_uni[]" class="form-control valor" placeholder="Valor Unitário">
        </div>


        <div class="form-group col-md-1">
            <button type="button" class="btn btn-danger btn-remover-item">Remover</button>
        </div>
    </div>
</div>

<div class="mt-4">
    <button type="button" class="btn btn-primary" id="btn-adicionar-item">Adicionar Item</button>
</div>


<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: right;">
        <button type="submit" class="btn btn-info">
            Salvar
        </button>
    </div>
</div>
