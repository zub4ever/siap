@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Almoxarifado
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
        <li class="breadcrumb-item active"><a>Almoxarifado</a></li>
    </ol>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">

                    <div class="pull-right">
                        <a class="btn btn-inverse-warning btn-md" href="{{route('almoxarifado.index')}}">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <hr/>
            <h4>FILTRO DE PESQUISA</h4>
            <hr/>
            <form>
                @csrf
                <div class="row">
                    <div class="col-sm-4 col-md-4-lg-4 mt-4">
                        <div class="wrap">
                            <label for="" class="form-control-label">Tipo de Item:
                                <span class="text-danger">*</span>
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="almo_tipo">
                                <label class="form-check-label" for="flexCheckDefault">
                                    01 - Equipamento
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="2" id="almo_tipo">
                                <label class="form-check-label" for="flexCheckChecked">
                                    02 - Mobilário
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="3" id="almo_tipo">
                                <label class="form-check-label" for="flexCheckChecked">
                                    03 - Informática
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4-lg-4 mt-4">
                        <div class="wrap">
                            <label for="" class="form-control-label">Condição de Item:
                                <span class="text-danger">*</span>
                            </label>
                            {{--                            <div class="form-check">--}}
                            {{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
                            {{--                                <label class="form-check-label" for="flexCheckDefault">--}}
                            {{--                                    Default checkbox--}}
                            {{--                                </label>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="form-check">--}}
                            {{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">--}}
                            {{--                                <label class="form-check-label" for="flexCheckChecked">--}}
                            {{--                                    Checked checkbox--}}
                            {{--                                </label>--}}
                            {{--                            </div>--}}


                        </div>
                    </div>


                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <br/>
                    <div class="row">
                        <div class="col-md-4">
                                            <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary">Buscar</button>
                                            </span>
                        </div>
                        &nbsp;
                        <div class="col-md-4">

                            @if($almo_tipo!=null)
                                <a href="{{ url('/filtros/relatorios/'.$almo_tipo.'/pdf') }}"
                                   type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                                    Imrpimir</a>
{{--                            @elseif($ano!=null&&$tipoPoluicao==null&&$regional!=null&&$auditorFiscal!=null)--}}
{{--                                <a href="{{ url('/denuncia/relatorios/ano/'.$ano.'/0/'.$regional.'/'.$auditorFiscal.'/pdf') }}"--}}
{{--                                   type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>--}}
{{--                                    Imrpimir</a>--}}
{{--                            @elseif($ano!=null&&$tipoPoluicao!=null&&$regional==null&&$auditorFiscal!=null)--}}
{{--                                <a href="{{ url('/denuncia/relatorios/ano/'.$ano.'/'.$tipoPoluicao.'/0/'.$auditorFiscal.'/pdf') }}"--}}
{{--                                   type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>--}}
{{--                                    Imrpimir</a>--}}
{{--                            @elseif($ano!=null&&$tipoPoluicao!=null&&$regional!=null&&$auditorFiscal==null)--}}
{{--                                <a href="{{ url('/denuncia/relatorios/ano/'.$ano.'/'.$tipoPoluicao.'/'.$regional.'/0/pdf') }}"--}}
{{--                                   type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>--}}
{{--                                    Imrpimir</a>--}}
{{--                            @elseif($ano!=null&&$tipoPoluicao!=null&&$regional==null&&$auditorFiscal==null)--}}
{{--                                <a href="{{ url('/denuncia/relatorios/ano/'.$ano.'/'.$tipoPoluicao.'/0/0/pdf') }}"--}}
{{--                                   type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>--}}
{{--                                    Imrpimir</a>--}}
{{--                            @elseif($ano!=null&&$tipoPoluicao==null&&$regional!=null&&$auditorFiscal==null)--}}
{{--                                <a href="{{ url('/denuncia/relatorios/ano/'.$ano.'/0/'.$regional.'/0/pdf') }}"--}}
{{--                                   type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>--}}
{{--                                    Imrpimir</a>--}}
{{--                            @elseif($ano!=null&&$tipoPoluicao==null&&$regional==null&&$auditorFiscal!=null)--}}
{{--                                <a href="{{ url('/denuncia/relatorios/ano/'.$ano.'/0/0/'.$auditorFiscal.'/pdf') }}"--}}
{{--                                   type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>--}}
{{--                                    Imrpimir</a>--}}
                            @endif


                        </div>
                    </div>
                </div>

            </form>
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
