@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Dirf
@endsection
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
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item active"><a>DIRF</a></li>
</ol>
@role('Admin')
<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right" title="Cadastrar" href="{{route('pdf.showUploadForm')}}" role="button">
                    Subir HTML de processamento
                </a>
            </div>
            <div class="card-body">
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right" title="Cadastrar" href="{{route('dirf.upload')}}" role="button">
                    Subir nova Cédula
                </a>
            </div>
        </div>
    </div>
</div>
@endrole
<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Cédulas C 2023</h4>
                <div class="table-responsive">
                    <table id="dataTable" class="table text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">#</th>                               
                                <th class="text-center">CPF</th>                               
                                <th class="text-center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cpfList as $cpf)
                            <tr>
                                <td class="text-center"></td>
                                <td class="text-center">{{$cpf}}</td>    
                                <td> 
                                   @hasanyrole('Admin|Tecnico') 

                                    @php
                                    $document = DB::table('documentos_cedula_c')->where('cpf', $cpf)->first();
                                    $pdfPath = $document ? storage_path('app/public/pdfs/Dirf2023CPF' . str_replace('.', '', $cpf) . '.pdf') : null;

                                    @endphp
                                    @if ($pdfPath && file_exists($pdfPath))
                                    <a href="{{ route('dirf.store_c', $cpf) }}" target="_blank">
                                        <i class="ti-printer mr-1 btn btn-warning"></i>
                                    </a>
                                    @endif
                                    @endhasanyrole
                                </td>

                            </tr>                           
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









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
