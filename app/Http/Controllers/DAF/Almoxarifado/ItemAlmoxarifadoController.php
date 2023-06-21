<?php

namespace App\Http\Controllers\DAF\Almoxarifado;

use App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho;

use App\Models\DAF\AlmoxarifadoVirtual\ElementoDespesa;
use App\Models\DAF\AlmoxarifadoVirtual\EmpresaContratada;
use App\Models\DAF\AlmoxarifadoVirtual\FonteDespesa;
use App\Models\DAF\AlmoxarifadoVirtual\ItemAlmoxarifado;
use App\Models\DAF\AlmoxarifadoVirtual\ProgramaTrabalho;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class ItemAlmoxarifadoController extends Controller
{

    public function index()
    {
//        $contratoEpenho = DB:: table('almoxarifado_virtual_contrato_empenho as almo_virtual')
//            ->join('almoxarifado_virtual_empresa_contratada as empresa', 'almo_virtual.almoxarifado_virtual_empresa_contratada_id', '=', 'empresa.id')
//            ->select('almo_virtual.id', 'almo_virtual.cod_grp', 'almo_virtual.nr_sei', 'almo_virtual.nr_contrato', 'empresa.razao_social','empresa.cnpj')
//            ->get();
//        //dd($contratoEpenho);
        return view('daf.virtualAlmoxarifado.item.index');
    }

    public function create($id)
    {

         $item = AlmoVirtualContratoEmpenho::findOrFail($id);

//        $empresa_contratada = EmpresaContratada::all();
//        $elemento_despesa = ElementoDespesa::all();
//        $fonte_recurso = FonteDespesa::all();
//        $programa_trabalho = ProgramaTrabalho::all();

       return view('daf.virtualAlmoxarifado.item.create',compact('item','id'));
    }

    public function store(Request $request)
    {
        $itens = [];

        foreach ($request->input('cod_item') as $index => $codItem) {
            $item = [
                'almoxarifado_virtual_contrato_empenho_id' => $request->input('almoxarifado_virtual_contrato_empenho_id')[$index],
                'cod_item' => $codItem,
                'descricao' => $request->input('descricao')[$index],
                'categoria' => $request->input('categoria')[$index],
                'valor_uni' => $request->input('valor_uni')[$index]
            ];

            $itens[] = $item;
        }

        DB::beginTransaction();

        try {
            foreach ($itens as $item) {
                $novoItem = new ItemAlmoxarifado();
                $novoItem->almoxarifado_virtual_contrato_empenho_id = $item['almoxarifado_virtual_contrato_empenho_id'];
                $novoItem->cod_item = $item['cod_item'];
                $novoItem->descricao = $item['descricao'];
                $novoItem->categoria = $item['categoria'];
                $novoItem->valor_uni = $item['valor_uni'];
                //dd($novoItem);
                $novoItem->save();
            }

            DB::commit();

            return redirect()->route('itemAlmo.index')->with('success', 'Itens cadastrados com sucesso.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('itemAlmo.index')->with('error', 'Falha ao cadastrar os Itens.');
        }
    }












}
