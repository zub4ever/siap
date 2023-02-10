@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Folha Pagamento
@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item active"><a>Folha</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                
                
                
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body"> 
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Atualizar folha</h5>
                        <p class="card-text">Clique para atualizar os números da folha de pagamento </p>
                        <a href="#" class="btn btn-primary">Iniciar</a>
                    </div>
                </div>
            </div>  
        </div>    
    </div> 
</div>






@endsection
@section('js')
<!-- Sweet Alert Js -->
<script src="{{asset("assets/vendors/sweetalert2/js/sweetalert2.all.min.js")}}"></script>
@endsection
