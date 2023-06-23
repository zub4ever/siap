<div id="itens-container">
    <!-- Linha de item inicial -->
    <div class="item-row row d-flex justify-content-center">

        <div class="form-group col-md-1">
            <div class="wrap">
                <label for="almoxarifado_virtual_contrato_empenho_id" class="form-control-label">ID Contrato</label>
                <input type="text" name="almoxarifado_virtual_contrato_empenho_id[]" value="{{$id}}" readonly>
            </div>
        </div>


        <div class="form-group col-md-2">
            <div class="wrap">
                <label for="cod_item" class="form-control-label">Códito Item:
                    <span class="text-danger">*</span>
                </label>
                <input type="text" name="cod_item[]" class="form-control" placeholder="Código do Item">
            </div>
        </div>

        <div class="form-group col-md-3">
            <div class="wrap">
                <label for="descricao" class="form-control-label">Descrição Item:
                    <span class="text-danger">*</span>
                </label>
                <input type="text" name="descricao[]" class="form-control" placeholder="Descrição">
            </div>
        </div>

        <div class="form-group col-md-3">
            <div class="wrap">
                <label for="almoxarifado_virtual_categoria_id" class="form-control-label">Categoria do Item
                    <span class="text-danger">*</span>
                </label>

                <select name="almoxarifado_virtual_categoria_id[]" class="form-control almo_virtual_empresa-select2"
                        id="almoxarifado_virtual_categoria_id">
                    <option value="">Selecione uma categoria</option>
                    @foreach ($almo_virtual_categoria as $categoria)
                        <option
                            value="{{ $categoria->id }}" {{ (in_array($categoria->id, old('almoxarifado_virtual_categoria_id', [])) || @$categoria->almoxarifado_virtual_categoria_id == $categoria->id) ? 'selected' : '' }}>
                            {{ $categoria->id }} - {{ $categoria->nm_categoria }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group col-md-2">
            <div class="wrap">
                <label for="valor_uni" class="form-control-label">Valor Unitário Item (R$):
                    <span class="text-danger">*</span>
                </label>
                <input type="text" name="valor_uni[]" class="form-control valor" placeholder="Valor Unitário">
            </div>
        </div>


        <div class="form-group col-md-1 d-flex justify-content-center align-items-center">
            <div class="wrap">
                <label for="valor_uni" class="form-control-label">
                    <span class="text-danger"></span>
                </label>
                <button type="button" class="btn btn-danger btn-remover-item">Remover</button>
            </div>
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
