@extends('layouts.app')

@section('page-title') Dados da Meta @endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route("home")}}">Início</a></li>
    <li class="breadcrumb-item"><a href="{{route("projeto.show", $idProjeto."#step-5")}}">Projeto</a></li>
    <li class="breadcrumb-item active"><a>Dados da Meta</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Dados da meta</h4>
                    @include('programa.projeto.meta.form-show')
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
@endsection
