@extends('layouts.app')

@section('page-title')
 Ver Atendimento
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/select2/select2.min.css")}}">
@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route("home")}}">Início</a></li>
    <li class="breadcrumb-item"><a href="{{route("atendimentos.index")}}">Atendimentos</a></li>
    <li class="breadcrumb-item active"><a>ver atendimento</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Ver atendimento</h4>
                <form action="{{route('atendimentos.show', $atendimentos->id)}}">                                   
                    @include('administracao.atendimentos.form-show')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/administracao/comunidade/create.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/vendors/select2/plugin/select2.js')}}"></script>
@endsection
