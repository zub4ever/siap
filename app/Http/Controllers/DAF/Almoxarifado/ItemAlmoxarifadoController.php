<?php

namespace App\Http\Controllers\DAF\Almoxarifado;

use App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho;

use App\Models\DAF\AlmoxarifadoVirtual\Categoria;
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
        $itemContratoEpenho = DB:: table('almoxarifado_virtual_item as ai')
            ->join('almoxarifado_virtual_contrato_empenho as ace', 'ai.almoxarifado_virtual_contrato_empenho_id', '=', 'ace.id')
            ->join('almoxarifado_virtual_categoria as avc', 'ai.almoxarifado_virtual_categoria_id', '=', 'avc.id')
            ->select('ai.id','ai.cod_item', 'ai.descricao', 'ace.cod_grp', 'ace.nr_sei', 'ace.nr_contrato', 'avc.nm_categoria')
            ->get();
        //dd($contratoEpenho);
        return view('daf.virtualAlmoxarifado.item.index',compact('itemContratoEpenho'));
    }

    public function create($id)
    {

        $item = AlmoVirtualContratoEmpenho::findOrFail($id);

        $almo_virtual_categoria = Categoria::all();
//        $elemento_despesa = ElementoDespesa::all();
//        $fonte_recurso = FonteDespesa::all();
//        $programa_trabalho = ProgramaTrabalho::all();

        return view('daf.virtualAlmoxarifado.item.create', compact('item', 'id', 'almo_virtual_categoria'));
    }

    public function store(Request $request)
    {
        $itens = [];

        foreach ($request->input('cod_item') as $index => $codItem) {
            $item = [
                'almoxarifado_virtual_contrato_empenho_id' => $request->input('almoxarifado_virtual_contrato_empenho_id')[$index],
                'cod_item' => $codItem,
                'descricao' => $request->input('descricao')[$index],
                'almoxarifado_virtual_categoria_id' => $request->input('almoxarifado_virtual_categoria_id')[$index],
                'valor_uni' => str_replace(',', '.', str_replace('.', '', $request->input('valor_uni')[$index]))
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
                $novoItem->almoxarifado_virtual_categoria_id = $item['almoxarifado_virtual_categoria_id'];
                $novoItem->valor_uni = (float)$item['valor_uni'];
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
