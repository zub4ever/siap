@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Atualizações
@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item active"><a>CAPS|COIN|COFIN</a></li>
    <li class="breadcrumb-item active"><a>Upload</a></li>
</ol>



<form method="POST" action="{{ route('conselho.upload') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="conselho_tipo_id">Tipo de Conselho:</label>
        <select name="conselho_tipo_id" id="conselho_tipo_id">
            @foreach($tiposConselho as $tipoConselho)
            <option value="{{ $tipoConselho->id }}">{{ $tipoConselho->nm_tipo_conselho }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="conselho_ano_id">Ano do Conselho:</label>
        <select name="conselho_ano_id" id="conselho_ano_id">
            @foreach($anosConselho as $anoConselho)
            <option value="{{ $anoConselho->id }}">{{ $anoConselho->nm_ano }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="conselho_categoria_id">Categoria do Conselho:</label>
        <select name="conselho_categoria_id" id="conselho_categoria_id">
            @foreach($categoriasConselho as $categoriaConselho)
            <option value="{{ $categoriaConselho->id }}">{{ $categoriaConselho->nm_categoria }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="arquivo">Arquivo:</label>
        <input type="file" name="arquivo" id="arquivo">
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>









@endsection
@section('js')
<!-- Sweet Alert Js -->
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
@endsection

