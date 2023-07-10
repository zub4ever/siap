<?php

namespace App\Http\Controllers\DAF\Almoxarifado;

use App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho;
use App\Models\DAF\AlmoxarifadoVirtual\CaixaUnidade;
use App\Models\DAF\AlmoxarifadoVirtual\ItemAlmoxarifado;
use App\Models\DAF\AlmoxarifadoVirtual\Pedido;
use App\Models\DAF\AlmoxarifadoVirtual\RegistroPreco;
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


        return view('daf.virtualAlmoxarifado.pedido.create', compact('idContrato', 'id', 'item', 'cxuni'));
    }


    public function store(Request $request)
    {
        $itens = [];

        $nr_pedido = $request->input('nr_pedido');
        $quantidade_pedido = $request->input('quantidade_pedido');
        $valor_uni = $request->input('valor_uni');
        $valor_pedido = $request->input('valor_pedido');
        $almoxarifado_virtual_cx_uni_id = $request->input('almoxarifado_virtual_cx_uni_id');
        $almoxarifado_virtual_item_id = $request->input('almoxarifado_virtual_item_id');
        $almoxarifado_virtual_contrato_empenho_id = $request->input('almoxarifado_virtual_contrato_empenho_id');

        // Verificar se todos os arrays possuem a mesma quantidade de elementos
        if (count($quantidade_pedido) === count($valor_uni) && count($valor_uni) === count($valor_pedido) &&
            count($valor_pedido) === count($almoxarifado_virtual_cx_uni_id) &&
            count($almoxarifado_virtual_cx_uni_id) === count($almoxarifado_virtual_item_id) &&
            count($almoxarifado_virtual_item_id) === count($almoxarifado_virtual_contrato_empenho_id)) {

            $valor_total_pedido = array_sum($valor_pedido); // Somatório dos valores dos pedidos

            foreach ($quantidade_pedido as $index => $quantidade) {
                $item = [
                    'nr_pedido' => $nr_pedido[$index],
                    'quantidade_pedido' => $quantidade,
                    'valor_uni' => $valor_uni[$index],
                    'valor_pedido' => $valor_pedido[$index],
                    'almoxarifado_virtual_cx_uni_id' => $almoxarifado_virtual_cx_uni_id[$index],
                    'almoxarifado_virtual_item_id' => $almoxarifado_virtual_item_id[$index],
                    'almoxarifado_virtual_contrato_empenho_id' => $almoxarifado_virtual_contrato_empenho_id[$index]
                ];

                $itens[] = $item;
            }

            DB::beginTransaction();

            try {
                foreach ($itens as $item) {
                    $novoItem = new Pedido();
                    $novoItem->nr_pedido = $item['nr_pedido'];
                    $novoItem->quantidade_pedido = $item['quantidade_pedido'];
                    $novoItem->valor_uni = $item['valor_uni'];
                    $novoItem->valor_pedido = $item['valor_pedido'];
                    $novoItem->almoxarifado_virtual_cx_uni_id = $item['almoxarifado_virtual_cx_uni_id'];
                    $novoItem->almoxarifado_virtual_item_id = $item['almoxarifado_virtual_item_id'];
                    $novoItem->almoxarifado_virtual_contrato_empenho_id = $item['almoxarifado_virtual_contrato_empenho_id'];
                    $novoItem->save();
                }

                // Inserir informações na tabela almoxarifado_virtual_registro_preco
                $registroPreco = new RegistroPreco();
                $registroPreco->nr_pedido = $nr_pedido[0]; //  o número do pedido é o mesmo para todos os itens
                $registroPreco->valor_total_pedido = $valor_total_pedido;
                $registroPreco->almoxarifado_virtual_contrato_empenho_id = $almoxarifado_virtual_contrato_empenho_id[0]; //  o contrato/empenho é o mesmo para todos os itens

                $registroPreco->save();

                DB::commit();

                //return redirect()->route('pedidoAlmo.index')->with('success', 'Itens cadastrados com sucesso.');
                return redirect()->route('detalhes_pedido', ['nr_pedido' => $nr_pedido[0]])->with('success', 'Pedido realizado com sucesso.');

                //return response()->json(['nr_pedido' => $nr_pedido[0]]);

            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->route('pedidoAlmo.index')->with('error', 'Falha ao cadastrar os Itens.');
            }
        } else {
            return redirect()->route('pedidoAlmo.index')->with('error', 'Os arrays possuem tamanhos diferentes.');
        }
    }

    public function show($nr_pedido)
    {
        //$pedido = Pedido::where('nr_pedido', $nr_pedido)->get();

        $pedido = DB::table('almoxarifado_virtual_pedido as item')
            ->join('almoxarifado_virtual_cx_uni as cxUni', 'item.almoxarifado_virtual_cx_uni_id', '=', 'cxUni.id')
            ->join('almoxarifado_virtual_item as itemDescrito', 'item.almoxarifado_virtual_item_id', '=', 'itemDescrito.id')
            ->where('nr_pedido', $nr_pedido)
            ->select('item.*', 'cxUni.*', 'itemDescrito.*')
            ->get();


        $empenho = DB::table('almoxarifado_virtual_pedido as pedidoInfo')
            ->join('almoxarifado_virtual_contrato_empenho as empenho', 'pedidoInfo.almoxarifado_virtual_contrato_empenho_id', '=', 'empenho.id')
            ->where('pedidoInfo.nr_pedido', $nr_pedido)
            ->select('empenho.*')
            ->distinct()
            ->get();

        $registroPreco = DB::table('almoxarifado_virtual_registro_preco as preco')
        ->join('almoxarifado_virtual_contrato_empenho as empenho', 'preco.almoxarifado_virtual_contrato_empenho_id', '=', 'empenho.id')
        ->where('nr_pedido', $nr_pedido)
        ->select('preco.*', 'empenho.*')
        ->get();

        return view('daf.virtualAlmoxarifado.pedido.show', compact('pedido','empenho','registroPreco'));
    }


    public function pdf_pedido()
    {


        return view('daf . virtualAlmoxarifado . pedido . pdf . pdf_pedido');
    }


    public function getValorUni(Request $request)
    {
        $selectedId = $request->input('id');

        // Consultar o banco de dados para obter o valor unitário do item
        $item = ItemAlmoxarifado::where('id', $selectedId)->first();

        if ($item) {
            $valorUni = floatval($item->valor_uni);
        } else {
            $valorUni = 0.00;
        }

        return response()->json(['valorUni' => $valorUni]);
    }


}
