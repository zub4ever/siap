@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/beneficiario/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendors/smartwizard/dist/css/smart_wizard_all.css')}}">
@endsection

@section('page-title') Alterar Familiares @endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route("home")}}">Início</a></li>
    <li class="breadcrumb-item">
        <a href="{{route("beneficiario.show", $dependente->pessoas_id."#step-3")}}">Beneficiário</a>
    </li>
    <li class="breadcrumb-item active"><a>Alterar Familiares</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Alterar Familiares</h4>
                <form action="{{route('familiares.update', $dependente->id)}}" method="POST" id="formBeneficiario">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="beneficiario" value="{{$beneficiario->id}}">
                    <input type="hidden" name="pessoas_id" value="{{$dependente->pessoas_id}}">
                    @include('beneficiario.familiar.form')
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
