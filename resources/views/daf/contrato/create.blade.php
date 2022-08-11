@extends('layouts.app')

@section('page-title') Cadastrar Contrato @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/select2/select2.min.css")}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item"><a href="{{route("contrato.index")}}">Contrato</a></li>
    <li class="breadcrumb-item active"><a>Cadastrar Contrato</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Cadastrar Contrato</h4>
                <form action="{{route('contrato.store')}}" method="POST">
                    @csrf
                    @include('daf.contrato.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

<script src="{{asset('assets/vendors/smartwizard/dist/js/jquery.smartWizard.min.js')}}"></script>
<script src="{{asset('assets/vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/almoxarifado/almoxarifado.js')}}"></script>


@endsection
