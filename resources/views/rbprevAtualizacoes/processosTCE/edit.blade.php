@extends('layouts.app')

@section('page-title') Editar @endsection

@section('css')
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/jquery.dataTables.css")}}">
<link rel="stylesheet" type="text/css"
      href="{{asset("assets/vendors/data-table/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" type="text/css"
      href="{{asset("assets/vendors/data-table/css/responsive.bootstrap.min.css")}}">
<link rel="stylesheet" type="text/css"
      href="{{asset("assets/vendors/data-table/css/responsive.jqueryui.min.css")}}">
<!-- Sweet Alert Css -->
<link rel="stylesheet" href="{{asset("assets/vendors/sweetalert2/css/sweetalert2.min.css")}}">
@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route("home")}}">Início</a></li>
    <li class="breadcrumb-item"><a href="{{route("processosTCE.index")}}">Processos Homologados</a></li>
    <li class="breadcrumb-item active"><a>Editar Processos Homologados</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Processos Homologados</h4>
                <form action="{{route('processosTCE.update', $processos->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('rbprevAtualizacoes.processosTCE.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/vendors/select2/plugin/select2.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/vendors/smartwizard/dist/js/jquery.smartWizard.min.js')}}"></script>
<script src="{{asset('assets/vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/processosTCE/create.js')}}"></script>
@endsection
