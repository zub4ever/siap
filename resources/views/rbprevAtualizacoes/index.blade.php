@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Atualizações
@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item active"><a>Atualizações</a></li>
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
                        <h5 class="card-title">Atualizar RBPREV Números</h5>
                        <p class="card-text">Clique para atualizar o RBPREV Números </p>
                        <a href="{{route('rbprevNumeros.index')}}" class="btn btn-primary">Iniciar</a>
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