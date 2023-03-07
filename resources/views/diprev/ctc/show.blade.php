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



<h4>CTC Certidão #{{ $ctc_certidao->ctc_numero }}</h4>

<div class="row">
    <div class="col-md-12">
        <table>
            <thead>
                <tr>
                    <th style="width:5%;border: 1px solid black;">ID</th>
                    <th style="border: 1px solid black;">ANO</th>
                    <th style="border: 1px solid black;">TEMPO BRUTO</th>
                    <th style="border: 1px solid black;">FALTAS</th>
                    <th style="border: 1px solid black;">LICENÇA</th>
                    <th style="border: 1px solid black;">LICENÇA<br>SEM VENCIMENTO</th>
                    <th style="border: 1px solid black;">SUSPENSÕES</th>
                    <th style="border: 1px solid black;">DISPONIBILIDADE</th>
                    <th style="border: 1px solid black;">OUTRAS</th>
                    <th style="border: 1px solid black;">TOTAL LÍQUIDO</th>
                    <th style="width:5%; border: 1px solid black;">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->ano }}</td>
                    <td>{{ $registro->tempo_bruto }}</td>
                    <td>{{ $registro->faltas}}</td>
                    <td>{{ $registro->licencas}}</td>
                    <td>{{ $registro->licencas_sem_vencimento}}</td>
                    <td>{{ $registro->suspensoes}}</td>
                    <td>{{ $registro->disponibilidade}}</td>
                    <td>{{ $registro->outras}}</td>
                    <td>{{ $registro->tempo_liquido}}</td>
                    <td>
                        <a href="{{route('deducao.edit',$registro->id)}}">
                            <i class="ti-pencil mr-1 btn btn-success"></i>
                        </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table> 



    </div>
</div>

<hr>

<a href="{{ route('ctc.index') }}" class="btn btn-default">Voltar para a lista</a>













<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">
        <a href="{{route('events.pdf',$ctc_certidao->id)}}">
            <button type="submit" class="btn btn-danger">
                <i class="ti-printer mr-1"></i> Imprimir
            </button>
        </a>
        <a href="{{route('verso.show',$ctc_certidao->id)}}">
            <button type="submit" class="btn btn-success">
                <i class="ti-printer mr-1"></i>Verso da CTC
            </button>
        </a>
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


