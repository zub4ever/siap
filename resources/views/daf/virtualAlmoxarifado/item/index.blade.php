@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
    Item
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

    <link rel="stylesheet" type="text/css" href="{{ asset("assets/vendors/data-table/css/buttons.dataTables.min.css") }}">



@endsection
@section('main-content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Início</a></li>
        <li class="breadcrumb-item active"><a>Itens do contrato</a></li>
        <li class="breadcrumb-item ml-auto">
            <a class="btn btn-secondary" data-toggle="tooltip" data-placement="right"
               title="Voltar página inicial" href="/almoxarifadovirtual" role="button">
                Voltar
            </a>

        </li>
    </ol>


    <div class="row">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Contratos</h4>
                    <div class="table-responsive">
                        <table id="dataTable" class="table text-center">
                            <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Codigo item</th>
                                <th class="text-center">Descrição</th>
                                <th class="text-center">Categoria Item</th>
                                <th class="text-center">Código GRP</th>
                                <th class="text-center">Nº Contrato</th>
                                <th class="text-center">Nº SEI</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($itemContratoEpenho as $contrato)
                                <tr>
                                    <td class="text-center">{{$contrato->id}}</td>
                                    <td class="text-center">{{$contrato->cod_item}}</td>
                                    <td class="text-center">{{$contrato->descricao}}</td>

                                    <td class="text-center">{{$contrato->nm_categoria}}</td>
                                    <td class="text-center">{{$contrato->cod_grp}}</td>
                                    <td class="text-center">{{$contrato->nr_contrato}}</td>
                                    <td class="text-center">{{$contrato->nr_sei}}</td>


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
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            } );
        } );
    </script>
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
    <script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
    <script src="{{asset('js/delete.js')}}"></script>

    <script src="{{ asset("assets/vendors/data-table/js/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/data-table/js/buttons.flash.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/data-table/js/jszip.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/data-table/js/pdfmake.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/data-table/js/vfs_fonts.js") }}"></script>
    <script src="{{ asset("assets/vendors/data-table/js/buttons.html5.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/data-table/js/buttons.print.min.js") }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#quiztable').DataTable({
                dom: "Blfrtip",
                buttons: [
                    // Remova ou atualize as opções de botões existentes, se necessário
                ],
                columnDefs: [{
                    orderable: false,
                    targets: -1
                }]
            });
        });
    </script>
@endsection
