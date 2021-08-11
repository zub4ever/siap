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




<form method="POST">
        Receita
        <input type="text" name="receita" placeholder="Ex: Pão de queijo">
        <table border=1 id="tabela">
            <tr>
                <td colspan="6" style="text-align: center">
                    <label>Pedidos:</label>
                </td>
            </tr>
            <tr>

                <td>Cód. Produto:</td>
                <td>
                    <input type="text" name="codProduto[]" placeholder="Cód. Produto">
                </td>
                <td>
                    <label>Quantidade:</label>
                </td>
                <td>
                    <input type="text" name="razao[]" placeholder="Quantidade">
                </td>
                <td>
                    <label>Desconto:</label>
                </td>
                <td>
                    <input type="text" name="desconto[]" placeholder="Desconto">
                </td>
            </tr>

        </table>

        <button type="button" id="adicionar">Adicionar</button>
        <button type="submit">Cadastrar</button>

    </form>








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
