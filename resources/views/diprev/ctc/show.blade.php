@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
View CTC
@endsection
@section('css')
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/jquery.dataTables.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/responsive.bootstrap.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/data-table/css/responsive.jqueryui.min.css")}}">
<!-- Sweet Alert Css -->
<link rel="stylesheet" href="{{asset("assets/vendors/sweetalert2/css/sweetalert2.min.css")}}">
@endsection
@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item active"><a>CTC</a></li>
</ol>


@if ($ctc_certidao)
<!-- Formulário para editar as deduções correspondentes ao ano selecionado -->
{!! Form::model(null, [
'route' => ['deductions.update', [$ctc_certidao->id, $ano]],
'method' => 'PUT'
]) !!}
<div class="form-group">
    {!! Form::label('ano', 'Ano:') !!}
    <select name="ano" id="ano" class="form-control">
        @foreach($ano as $ano_option)
        <option value="{{ $ano_option }}" {{ $ano->first() == $ano_option ? 'selected' : '' }}>{{ $ano_option }}</option>

        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::label('faltas', 'Faltas:') !!}
    {!! Form::text('faltas', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('licencas', 'Licenças:') !!}
    {!! Form::text('licencas', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('licencas_sem_vencimento', 'Licenças sem vencimento:') !!}
    {!! Form::text('licencas_sem_vencimento', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('suspensoes', 'Suspensões:') !!}
    {!! Form::text('suspensoes', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('disponibilidade', 'Disponibilidade:') !!}
    {!! Form::text('disponibilidade', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('outras', 'Outras:') !!}
    {!! Form::text('outras', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@endif














@endsection
@section('js')
<!-- Data Table js -->
<script src="{{asset("assets/vendors/data-table/js/jquery.dataTables.js")}}"></script>
<script src="{{asset("assets/vendors/data-table/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/vendors/data-table/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/vendors/data-table/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("assets/vendors/data-table/js/responsive.bootstrap.min.js")}}"></script>
<!-- Data table Init -->
<script src="{{asset("assets/js/init/data-table.js")}}"></script>
<!-- Sweet Alert Js -->
<!-- Sweet Alert Js -->
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
<script src="{{asset('js/delete.js')}}"></script>
@endsection


