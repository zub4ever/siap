@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/beneficiario/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/smartwizard/dist/css/smart_wizard_all.css')}}">
@endsection

@section('page-title') Comulsória @endsection

@section('main-content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route("home")}}">Início</a></li>
        <li class="breadcrumb-item"><a href="{{route("reqCompulsoria.index")}}">Comulsoria</a></li>
        <li class="breadcrumb-item active"><a>Cadastrar Comulsoria</a></li>
    </ol>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Cadastrar Comulsoria</h4>
                    <form action="{{route('reqCompulsoria.store')}}" method="POST" id="formCompulsoria">
                        <div id="example-basic">
                            @csrf
                            @include('diprev.reqAposentadorias.reqCompulsoria.form')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- JavaScript -->
    <script src="{{asset('assets/vendors/smartwizard/dist/js/jquery.smartWizard.min.js')}}"></script>
    <script src="{{asset('js/apRequerimentos/createReqCompulsoria.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
@endsection
