@extends('layouts.app')

@section('page-title') Cadastrar requerimento @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/select2/select2.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/css/bootstrap.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/css/ApVoluntaria.css")}}">

@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item"><a href="{{route("reqVoluntaria.index")}}">Requerimentos</a></li>
    <li class="breadcrumb-item active"><a>Cadastrar Requerimento</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Cadastrar requerimento</h4>
                <form action="{{route('reqVoluntaria.store')}}" method="POST">
                    @csrf
                    @include('administracao.reqAposentadorias.reqVoluntaria.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
 

<script src="{{asset('js/reqAposentadorias/ApVoluntaria/script.js')}}"></script>

<!------ Include the above in your HEAD tag ---------->
@endsection


