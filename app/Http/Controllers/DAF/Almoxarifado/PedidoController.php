<?php

namespace App\Http\Controllers\DAF\Almoxarifado;

use App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho;
use App\Models\DAF\AlmoxarifadoVirtual\CaixaUnidade;
use App\Models\DAF\AlmoxarifadoVirtual\ItemAlmoxarifado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class PedidoController extends Controller
{
    public function index()
    {


        return view('daf.virtualAlmoxarifado.pedido.index');
    }


    public function create($id)
    {


        $idContrato = AlmoVirtualContratoEmpenho::join('almoxarifado_virtual_empresa_contratada', 'almoxarifado_virtual_contrato_empenho.almoxarifado_virtual_empresa_contratada_id', '=', 'almoxarifado_virtual_empresa_contratada.id')
            ->select('almoxarifado_virtual_contrato_empenho.id',
                'almoxarifado_virtual_contrato_empenho.cod_grp',
                'almoxarifado_virtual_contrato_empenho.nr_contrato',
                'almoxarifado_virtual_contrato_empenho.nr_sei',
                'almoxarifado_virtual_contrato_empenho.saldo_total',

                'almoxarifado_virtual_empresa_contratada.razao_social')
            ->findOrFail($id);

        $item = ItemAlmoxarifado::where('almoxarifado_virtual_contrato_empenho_id', $id)->get();
        $cxuni = CaixaUnidade::all();




        return view('daf.virtualAlmoxarifado.pedido.create', compact('idContrato', 'id','item','cxuni'));
    }


}
