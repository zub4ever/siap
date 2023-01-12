@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Dash Atendimentos
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
    <li class="breadcrumb-item active"><a>Atendimentos Dash</a></li>
</ol>

<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg" style="background-color:#F68936">
            <div class="inner">
                <h3> {{count($atendimentos)}}</h3>

                <h4><strong>Total</strong></h4>
            </div>
            <div class="icon">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg" style="background-color:#67CB42">
            <div class="inner">
                <h3>{{$counts}}</h3>

                <h4><strong>Em Aberto</strong></h4>
            </div>
            <div class="icon">
                <i class="fa fa-folder-open" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg" style="background-color:#17B7B5">
            <div class="inner">
                <h3>{{$countFechadas}}</h3>

                <h4><strong>Fechadas</strong></h4>
            </div>
            <div class="icon">
                <i class="fa fa-archive" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg" style="background-color:#CDD71C">
            <div class="inner">
                <h3>{{$countAndamento}}</h3>

                <h4><strong>Em andamento</strong></h4>
            </div>
            <div class="icon">
                <i class="fa fa-times-circle-o" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</div>



 <div class="row">
    
    <div class="col-lg-7 col-sm-7 col-xs-12">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><strong>Denúncias da Semana </strong></h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                      <!--Conteudo-->
                      <div id="ca_graph" class="overlay">
                          <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                          @columnchart('Finances', 'ca_graph') 
                        </div>
                      <!--Fim Conteudo-->
                   </div>

            </div><!-- /.row -->
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
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
