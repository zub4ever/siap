<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="ano" class="form-control-label">Ano:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='ano' placeholder="Ex: 2023"  value="{{(@$folhapgto->ano)}}">
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="mes" class="form-control-label">Mês:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='mes' placeholder="Ex: 1"  value="{{(@$folhapgto->mes)}}">
        </div>
    </div>
</div>

<hr>
<h5>Quantitativo</h5>
<hr>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="qtdAposentadoFprev" class="form-control-label">Aposentadorias FPREV:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='qtdAposentadoFprev' placeholder="Ex: 0000"  value="{{(@$folhapgto->qtdAposentadoFprev)}}">
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="qtdAposentadoFffin" class="form-control-label">Aposentadorias FFIN:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='qtdAposentadoFffin' placeholder="Ex: 000"  value="{{(@$folhapgto->qtdAposentadoFffin)}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="qtdPensionistaFprev" class="form-control-label">Penões FPREV:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='qtdPensionistaFprev' placeholder="Ex: 0000"  value="{{(@$folhapgto->qtdPensionistaFprev)}}">
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="qtdPensionistaFfin" class="form-control-label">Pensões FFIN:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='qtdPensionistaFfin' placeholder="Ex: 0000"  value="{{(@$folhapgto->qtdPensionistaFfin)}}">
        </div>
    </div>
</div>
<!--
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="qtdTotalFprev" class="form-control-label">Total FPREV:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='qtdTotalFprev' placeholder="Ex: 0000"  value="{{(@$folhapgto->qtdTotalFprev)}}">
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="qtdTotalFfin" class="form-control-label">Total FFIN:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" name='qtdTotalFfin' placeholder="Ex: 0000"  value="{{(@$folhapgto->qtdTotalFfin)}}">
        </div>
    </div>
</div> -->

<hr>
<h5>Valores</h5>
<hr>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="valorAposFprev" class="form-control-label">Aposentadorias FPREV R$:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" id="valorAposFprev" name='valorAposFprev' placeholder="Ex: 00000000.00"  value="{{(@$folhapgto->valorAposFprev)}}">

        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="valorAposFfin" class="form-control-label">Aposentadorias FFIN R$:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" id="valorAposFfin" name='valorAposFfin' placeholder="Ex: 00000000.00"  value="{{(@$folhapgto->valorAposFfin)}}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="valorPenFprev" class="form-control-label">Pensões FPREV R$:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" id="valorPenFprev" name='valorPenFprev' placeholder="Ex: 00000000.00"  value="{{(@$folhapgto->valorPenFprev)}}">

        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="valorPenFfin" class="form-control-label">Pensões FFIN R$:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" id="valorPenFfin" name='valorPenFfin' placeholder="Ex: 00000000.00"  value="{{(@$folhapgto->valorPenFfin)}}">
        </div>
    </div>
</div>
<!--
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="valorTotalFprev" class="form-control-label">Total FPREV R$:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" id="valorTotalFprev" name='valorTotalFprev' placeholder="Ex: 00000000.00"  value="{{(@$folhapgto->valorTotalFprev)}}">

        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
        <div class="wrap">
            <label for="valorTotalFfin" class="form-control-label">Total FFIN R$:
                <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" id="valorTotalFfin" name='valorTotalFfin' placeholder="Ex: 00000000.00"  value="{{(@$folhapgto->valorTotalFfin)}}">
        </div>
    </div>
</div>
-->



<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <button type="submit" class="btn btn-success">
            Salvar
        </button>
    </div>
</div>



