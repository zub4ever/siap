<?php

namespace App\Http\Controllers\DAF\Almoxarifado;
use App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho;

use App\Models\DAF\AlmoxarifadoVirtual\EmpresaContratada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class ContratoEmpenhoController extends Controller
{

    public function index()
    {


        return view('daf.virtualAlmoxarifado.contratoEmpenho.index');
    }

    public function create()
    {
        $empresa_contratada = EmpresaContratada::all();

        return view('daf.virtualAlmoxarifado.contratoEmpenho.create', compact('empresa_contratada'));
    }

    public function store(Request $request)
    {
        // obter o usuário logado
        $user = auth()->user();
        $cod_grp = $request->input('cod_grp');

        // Verificar se o CNPJ já está cadastrado
        $contratoExistente = AlmoVirtualContratoEmpenho::where('cod_grp', $cod_grp)->first();

        if ($contratoExistente) {
            return redirect()->route('ContratoEmpenho.index')->with('error', 'Esse Contrato já está cadastrado.');
        }

        DB::beginTransaction();

        $empresaContratada = AlmoVirtualContratoEmpenho::create($request->all());

        $empresaContratada->users_id = $user->id;


        if (!$empresaContratada) {
            DB::rollBack();
            return redirect()->route('almoxarifadoVirtualEmpresa.index')->with('error', 'Falha ao cadastrar a empresa.');
        }

        $empresaContratada->save();
        DB::commit();

        return redirect()->route('almoxarifadoVirtualEmpresa.index')->with('success', 'Empresa cadastrada com sucesso.');
    }


    public function retornaCNPJ(Request $request)
    {
        $cnpj = $request->input('cnpj');
        $url = "https://api-publica.speedio.com.br/buscarcnpj?cnpj={$cnpj}";

        $client = new Client();
        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);
        //dd($data);

        return response()->json($data);
    }


}
