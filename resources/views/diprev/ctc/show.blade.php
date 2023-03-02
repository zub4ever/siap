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


<div class="container">
    <h1>CTC Certidão #{{ $ctc_certidao->id }}</h1>

    <div class="row">
        <div class="col-md-4">
            <h4>Deduções</h4>
            <ul>
                @foreach ($deducoes as $ano => $deducoes_ano)
                <li>Ano {{ $ano }}</li>
                @endforeach
            </ul>
            <form action="{{ route('deductions.update', [$ctc_certidao->id, $anoSelecionado ?? '']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tempo_bruto">Tempo Bruto</label>
                    <input type="number" name="tempo_bruto" id="tempo_bruto" class="form-control" value="{{ $deducaoSelecionada->tempo_bruto }}">
                </div>
                <div class="form-group">
                    <label for="faltas">Faltas</label>
                    <input type="number" name="faltas" id="faltas" class="form-control" value="{{ $deducaoSelecionada->faltas }}">
                </div>
                <div class="form-group">
                    <label for="licencas">Licenças</label>
                    <input type="number" name="licencas" id="licencas" class="form-control" value="{{ $deducaoSelecionada->licencas }}">
                </div>
                <div class="form-group">
                    <label for="licencas_sem_vencimento">Licenças sem vencimento</label>
                    <input type="number" name="licencas_sem_vencimento" id="licencas_sem_vencimento" class="form-control" value="{{ $deducaoSelecionada->licencas_sem_vencimento }}">
                </div>
                <div class="form-group">
                    <label for="suspensoes">Suspensões</label>
                    <input type="number" name="suspensoes" id="suspensoes" class="form-control" value="{{ $deducaoSelecionada->suspensoes }}">
                </div>
                <div class="form-group">
                    <label for="disponibilidade">Disponibilidade</label>
                    <input type="number" name="disponibilidade" id="disponibilidade" class="form-control" value="{{ $deducaoSelecionada->disponibilidade }}">
                </div>
                <div class="form-group">
                    <label for="outras">Outras</label>
                    <input type="number" name="outras" id="outras" class="form-control" value="{{ $deducaoSelecionada->outras }}">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

    <hr>

    <a href="{{ route('ctc.index') }}" class="btn btn-default">Voltar para a lista</a>
</div>

@push('scripts')
<script>
    $(function () {
        // Obtém o ano selecionado no select
        $('#ano_select').on('change', function () {
            var anoSelecionado = $(this).val();
            window.location.href = "{{ route('ctc.show', [$ctc_certidao->id, ':ano']) }}".replace(':ano', anoSelecionado);
        });
    });
</script>
@endpus














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


