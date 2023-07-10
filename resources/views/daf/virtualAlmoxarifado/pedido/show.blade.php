@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
    Detalhes do pedido
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
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 5px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    @foreach($empenho as $infos)
        <table style="border-collapse: collapse; border: 1px solid black;">
            <tr>
                <th style="border: 1px solid black;">Código GRP</th>
                <th style="border: 1px solid black;">Número do Contrato</th>
                <th style="border: 1px solid black;">Número SEI</th>
                <th style="border: 1px solid black;">Prazo</th>
                <th style="border: 1px solid black;">Número SEI</th>
            </tr>

            <tr>
                <td style="border: 1px solid black;">{{$infos->cod_grp}}</td>
                <td style="border: 1px solid black;">{{$infos->nr_contrato}}</td>
                <td style="border: 1px solid black;">{{$infos->nr_sei}}</td>
                <td style="border: 1px solid black;">{{$infos->prazo_entrega_contrato}}</td>
                <td style="border: 1px solid black;">{{$infos->nr_sei}}</td>
            </tr>

        </table>
        <br>

    @endforeach

    <br>
    <table>
        <tr>
            <th style="width:10%; text-align: center">Nº Pedido</th>

            <th style="width:7%;">Cod Item</th>

            <th>Descrição</th>
            <th style="width:5%;">CX|UNI</th>
            <th style="width:5%;">Quatidade</th>
            <th style="width:10%;">Valor Initário</th>
            <th style="width:10%;">Valor pedido</th>
        </tr>
        <tbody>
        @foreach($pedido as $item)
            <tr>
                <td>{{ $item->nr_pedido }}</td>

               <td>{{ $item->cod_item }}</td>
                <td>{{ $item->descricao }}</td>
                <td>{{ $item->nm_caixa_unidade }}</td>
                <td>{{ $item->quantidade_pedido }}</td>
                <td class="valor_uni">{{ $item->valor_uni }}</td>
                <td class="valor_pedido">{{ $item->valor_pedido }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
<br>
    <div style="text-align: right;">
        @foreach($registroPreco as $preco)
            <table style="border-collapse: collapse; width: 40%; border: 1px solid black;">
                <tr>
                    <th style="border: 1px solid black;">Número do pedido</th>
                    <th style="border: 1px solid black;">Número do contrato</th>
                    <th style="border: 1px solid black;">Valor do pedido</th>
                </tr>
                <tr>
                    <td style="border: 1px solid black;">{{$preco->nr_pedido}}</td>
                    <td style="border: 1px solid black;">{{$preco->nr_contrato}}</td>
                    <td class="valor_total_pedido" style="border: 1px solid black;">{{$preco->valor_total_pedido}}</td>
                </tr>
            </table>
        @endforeach
    </div>


@endsection
@section('js')
    <!-- Data Table js -->
    <script src="{{asset("assets/vendors/data-table/js/jquery.dataTables.js")}}"></script>
    <script src="{{asset("assets/vendors/data-table/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/vendors/data-table/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/vendors/data-table/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("assets/vendors/data-table/js/responsive.bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
    <!-- Data table Init -->
    <script src="{{asset("assets/js/init/data-table.js")}}"></script>
    <script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="{{asset('js/almoxarifado/AlmoxarifadoVirtual/pedido/listagemPedido.js')}}"></script>

    <script src="{{asset('js/delete.js')}}"></script>
@endsection
