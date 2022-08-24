@extends('layouts.app')

@section('page-title') Servidor @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/select2/select2.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/css/bootstrap.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/css/ApVoluntaria.css")}}">


@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item"><a href="{{route("servidor.index")}}">Sevidor</a></li>
    <li class="breadcrumb-item active"><a>Visualizar informações</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title"> Informações do servidor</h4>                              
                    @include('servidor.form-show')             
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('assets/js/requerimentos/script.js')}}"></script>
<script src="{{asset('assets/vendors/smartwizard/dist/js/jquery.smartWizard.min.js')}}"></script>
<script src="{{asset('assets/vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{Config::get('app.url')}}/node_modules/select2/jquery.select2.js"></script>
<script src="{{Config::get('app.url')}}/node_modules/select2/dist/js/select2.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
@endsection