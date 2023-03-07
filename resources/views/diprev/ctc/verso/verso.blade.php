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
@php
use Carbon\Carbon;
@endphp

<table class="table table-bordered">
    <thead>
        <tr>
            <td colspan="3">FREQUÊNCIA - DISCRIMINAÇÃO DAS DEDUÇÕES DO TEMPO BRUTO</td>
        </tr>
        <tr>
            <th scope="col">Períodos</th>
            <th scope="col">Tempo em dias</th>
            <th scope="col">Identificação da Ocorrência</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registros as $registro)
        <tr class="table-light">
            <td>De:  @if(!empty($registro->tempo_bruto_inicio_1) && !empty($registro->tempo_bruto_fim_1))
                {{ Carbon::parse($registro->tempo_bruto_inicio_1)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_bruto_fim_1)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_bruto_dias_1 }}</td>
            <td>{{ $registro->id_ocorrencia_1 }}</td>
        </tr>
        <tr class="table-light">
            <td>De:  @if(!empty($registro->tempo_bruto_inicio_2) && !empty($registro->tempo_bruto_fim_2))
                {{ Carbon::parse($registro->tempo_bruto_inicio_2)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_bruto_fim_2)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_bruto_dias_2 }}</td>
            <td>{{ $registro->id_ocorrencia_2 }}</td>
        </tr>
        <tr class="table-light">
            <td>De:  @if(!empty($registro->tempo_bruto_inicio_3) && !empty($registro->tempo_bruto_fim_3))
                {{ Carbon::parse($registro->tempo_bruto_inicio_3)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_bruto_fim_3)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_bruto_dias_3 }}</td>
            <td>{{ $registro->id_ocorrencia_3 }}</td>
        </tr>
        <tr class="table-light">
            <td>De:  @if(!empty($registro->tempo_bruto_inicio_4) && !empty($registro->tempo_bruto_fim_4))
                {{ Carbon::parse($registro->tempo_bruto_inicio_4)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_bruto_fim_4)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_bruto_dias_4 }}</td>
            <td>{{ $registro->id_ocorrencia_4 }}</td>
        </tr>
        <tr class="table-light">
            <td>De:  @if(!empty($registro->tempo_bruto_inicio_5) && !empty($registro->tempo_bruto_fim_5))
                {{ Carbon::parse($registro->tempo_bruto_inicio_5)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_bruto_fim_5)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_bruto_dias_5 }}</td>
            <td>{{ $registro->id_ocorrencia_5 }}</td>
        </tr>
        <tr class="table-light">
            <td>De:  @if(!empty($registro->tempo_bruto_inicio_6) && !empty($registro->tempo_bruto_fim_6))
                {{ Carbon::parse($registro->tempo_bruto_inicio_6)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_bruto_fim_6)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_bruto_dias_3 }}</td>
            <td>{{ $registro->id_ocorrencia_3 }}</td>
        </tr>
        @endforeach

    </tbody>
</table>


<table class="table table-bordered">
    <thead>
        <tr>
            <td colspan="3">TEMPO ESPECIAL INCLUÍDO, SEM CONVERSÃO, NO PERÍODO DE CONTRIBUIÇÃO COMPREENDIDO NESTA CERTIDÃO</td>
        </tr>
        <tr>
            <th scope="col">Especificação do exercício do tempo especial</th>
            <th scope="col">Período</th>
            <th scope="col">Tempo em dias</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registros as $registro)
        <tr class="table-light">
            <td>a) grave</td>
            <td>De:  @if(!empty($registro->tempo_especial_inicio_1) && !empty($registro->tempo_especial_fim_1))
                {{ Carbon::parse($registro->tempo_especial_inicio_1)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_especial_fim_1)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_especial_dias_1 }}</td>
        </tr>
        <tr class="table-light">
            <td>b) moderada</td>
            <td>De:  @if(!empty($registro->tempo_especial_inicio_2) && !empty($registro->tempo_especial_fim_2))
                {{ Carbon::parse($registro->tempo_especial_inicio_2)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_especial_fim_2)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_especial_dias_2 }}</td>
        </tr>
        <tr class="table-light">
            <td>c) leve</td>
            <td>De:  @if(!empty($registro->tempo_especial_inicio_3) && !empty($registro->tempo_especial_fim_3))
                {{ Carbon::parse($registro->tempo_especial_inicio_3)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_especial_fim_3)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_especial_dias_3 }}</td>
        </tr>
        <tr class="table-light">
            <td>II - No cargo de policial, agente penitenciário ou de agente socioeducativo</td>
            <td>De:  @if(!empty($registro->tempo_especial_inicio_4) && !empty($registro->tempo_bruto_fim_4))
                {{ Carbon::parse($registro->tempo_especial_inicio_4)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_especial_fim_4)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_especial_dias_4 }}</td>         
        </tr>
        @endforeach
    </tbody>
</table>


<table class="table table-bordered">
    <thead>
        <tr>
            <td colspan="3">TEMPO DE EFETIVO EXERCÍCIO DAS FUNÇÕES DE MAGISTÉRIO NA EDUCAÇÃO INFANTIL E NO ENSINO FUNDAMENTAL
E MÉDIO NO PERÍODO DE CONTRIBUIÇÃO COMPREENDIDO NESTA CERTIDÃO</td>
        </tr>
        <tr>
            
            <th scope="col">Período</th>
            <th scope="col">Tempo em dias</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registros as $registro)
        <tr class="table-light">
           
            <td>De:  @if(!empty($registro->tempo_magisterio_incio_1) && !empty($registro->tempo_magisterio_fim_1))
                {{ Carbon::parse($registro->tempo_magisterio_incio_1)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_magisterio_fim_1)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_magisterio_dias_1 }}</td>
        </tr>
        <tr class="table-light">
          
            <td>De:  @if(!empty($registro->tempo_magisterio_incio_2) && !empty($registro->tempo_magisterio_fim_2))
                {{ Carbon::parse($registro->tempo_magisterio_incio_2)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_magisterio_fim_2)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_magisterio_dias_2 }}</td>
        </tr>
        <tr class="table-light">
           
            <td>De:  @if(!empty($registro->tempo_magisterio_incio_3) && !empty($registro->tempo_magisterio_fim_3))
                {{ Carbon::parse($registro->tempo_magisterio_incio_3)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_magisterio_fim_3)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_magisterio_dias_3 }}</td>
        </tr>
        <tr class="table-light">
           
            <td>De:  @if(!empty($registro->tempo_magisterio_incio_4) && !empty($registro->tempo_magisterio_fim_4))
                {{ Carbon::parse($registro->tempo_magisterio_incio_4)->format('d/m/Y') }} A {{ Carbon::parse($registro->tempo_magisterio_fim_4)->format('d/m/Y') }}
                @endif
            </td>
            <td>{{ $registro->tempo_magisterio_dias_4 }}</td>         
        </tr>
        @endforeach
    </tbody>
</table>








<div class="col-sm-12 mt-5">
    <div class="wrap mt-1" style="text-align: center;">

        <a href="{{route('verso.edit',$ctc_certidao->id)}}">
            <button type="submit" class="btn btn-success">
                <i class="ti-printer mr-1"></i>Editar Verso da CTC
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


