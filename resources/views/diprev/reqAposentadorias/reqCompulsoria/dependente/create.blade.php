@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/beneficiario/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendors/smartwizard/dist/css/smart_wizard_all.css')}}">
@endsection

@section('page-title') Cadastro de Familiares @endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route("home")}}">Início</a></li>
    <li class="breadcrumb-item">
        <a href="{{route("reqCompulsoria.show", $compulsoria->id."#step-2")}}">Beneficiário</a>
    </li>
    <li class="breadcrumb-item active"><a>Cadastrar Beneficiário</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Cadastrar Familiares</h4>
                <form action="{{route('dependentes.store')}}" method="POST" id="formCompulsoria">
                    @csrf
                    <input type="hidden" name="requerimento_aposentadoria_compulsoria_id" value="{{$compulsoria->id}}">
                    <input type="hidden" name="requerimento_aposentadoria_compulsoria_id" value="{{$compulsoria}}">
                    @include('diprev.reqAposentadorias.reqCompulsoria.dependente.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- JavaScript -->
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('js/beneficiario/dependente/create.js')}}"></script>
@endsection

