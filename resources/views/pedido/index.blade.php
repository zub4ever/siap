@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Pedidos
@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item active"><a>Pedido</a></li>
</ol>

<h4>2.0 Informações de Contato</h4>
           
           <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                  <div class="wrap">
                   <div class="table-responsive">                          
                       
                           <div class="table-responsive">
                               <table class="table table-bordered">
                                   <thead>
                                       <tr>
                                           <th class="text-center">Tipo de contato</th>
                                           <th class="text-center">Contato</th>
                                           <th class="text-center">Ação</th>
                                       </tr>
                                   </thead>
                                   <tbody id="tbody">
                                   </tbody>
                               </table>
                           </div>
                           <button class="btn btn-md btn-info" 
                                   id="addBtn" type="button">
                               Adcionar Contato
                           </button>
                       
                       <!<!-- comment -->
                   </div>

                  </div>
               </div>        
           </div> 

@endsection
@section('js')

<script src="{{asset('assets/vendors/smartwizard/dist/js/jquery.smartWizard.min.js')}}"></script>
<script src="{{asset('assets/vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{Config::get('app.url')}}/node_modules/select2/jquery.select2.js"></script>
<script src="{{Config::get('app.url')}}/node_modules/select2/dist/js/select2.min.js"></script>

<script src="{{asset('assets/js/pedido/create.js')}}"></script>


@endsection
