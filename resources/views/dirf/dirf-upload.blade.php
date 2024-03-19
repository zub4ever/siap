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
        <li class="breadcrumb-item active"><a>DIRF Cedula</a></li>
    </ol>
    <div class="container d-flex vh-100">
    <div class="row justify-content-center align-self-center w-100">
        <div class="col-md-6">
            <form action="{{ route('dirf.upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                <div class="card-body">
                    <label for="pdfs">Arquivos Dirfs PDFs: <i>(Separadas)</i></label>
                    <input type="file" name="pdfs[]" id="pdfs" multiple required>
                    <br>
                    <div class="d-flex justify-content-end"> <!-- Alinha o botão à direita com flexbox -->
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>                    
                </div>
            </form>
            <i>Obs: Os arquivos devem estar separados.</i>
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

<script>
   $('#pdfs').change(function(){
    var files = $('#pdfs')[0].files;
    var error = '';
    for(var i = 0; i < files.length; i++){
        var file_name = files[i].name;
        var ext = file_name.split('.').pop().toLowerCase();
        if(jQuery.inArray(ext, ['pdf']) == -1) {
            Swal.fire({
                title: 'Erro',
                text: 'Selecione apenas arquivos PDF',
                icon: 'error',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Limpa o campo de arquivo
                    $('#pdfs').val('');
                }
            });
            break; // Para sair do loop após encontrar o primeiro arquivo inválido
        }
    }
});

</script>

@endsection