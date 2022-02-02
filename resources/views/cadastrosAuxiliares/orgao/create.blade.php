@extends('layouts.app')

@section('page-title') Cadastrar Origem @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/select2/select2.min.css")}}">
@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item"><a href="{{route("orgao.index")}}">Orgão</a></li>
    <li class="breadcrumb-item active"><a>Cadastrar Orgão</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Cadastrar Orgão</h4>
                <form action="{{route('orgao.store')}}" method="POST">
                    @csrf
                    @include('cadastrosAuxiliares.orgao.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


