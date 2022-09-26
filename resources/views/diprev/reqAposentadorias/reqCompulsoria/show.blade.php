@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/beneficiario/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendors/smartwizard/dist/css/smart_wizard_all.css')}}">
@endsection

@section('page-title') Cadastro de  @endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route("home")}}">Início</a></li>
    <li class="breadcrumb-item"><a href="{{route("reqCompulsoria.index")}}">Beneficiário</a></li>
    <li class="breadcrumb-item active"><a>Cadastrar beneficiário</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Cadastrar Beneficiário</h4>
                <div id="example-basic">
                    @include('diprev.reqAposentadorias.reqCompulsoria.form-show')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- JavaScript -->
<script src="{{asset('assets/vendors/smartwizard/dist/js/jquery.smartWizard.min.js')}}"></script>
<script src="{{asset('js/apRequerimentos/show.js')}}"></script>
<!-- Sweet Alert Js -->
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
@endsection
