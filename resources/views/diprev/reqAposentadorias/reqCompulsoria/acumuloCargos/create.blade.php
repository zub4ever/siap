@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/beneficiario/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendors/smartwizard/dist/css/smart_wizard_all.css')}}">
@endsection

@section('page-title') Cadastro de  @endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route("home")}}">Início</a></li>
    <li class="breadcrumb-item">
        <a href="{{route("reqCompulsoria.show", $compulsoria_id."#step-2")}}">Beneficiário</a>
    </li>
    <li class="breadcrumb-item active"><a>Cadastrar</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Cadastrar Cargos</h4>
                <form action="{{route('acumuloCargos.store')}}" method="POST" id="formCompulsoria">
                    @csrf
                    <input type="hidden" name="requerimento_aposentadoria_compulsoria_id" value="{{$compulsoria_id}}">
                    @include('diprev.reqAposentadorias.reqCompulsoria.acumuloCargos.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- JavaScript -->
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>

@endsection

