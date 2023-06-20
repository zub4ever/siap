<?php

namespace App\Http\Controllers\DAF\Almoxarifado;


use App\Models\DAF\AlmoxarifadoVirtual\EmpresaContratada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class EmpresaContratadaController extends Controller
{

    public function index()
    {


        return view('daf.virtualAlmoxarifado.empresa.index');
    }

    public function create()
    {


        return view('daf.virtualAlmoxarifado.empresa.create');
    }

    public function store(Request $request)
    {
        $cnpj = $request->input('cnpj');

        // Verificar se o CNPJ já está cadastrado
        $empresaExistente = EmpresaContratada::where('cnpj', $cnpj)->first();

        if ($empresaExistente) {
            return redirect()->route('almoxarifadoVirtualEmpresa.index')->with('error', 'A empresa já está cadastrada.');
        }

        DB::beginTransaction();

        $empresaContratada = EmpresaContratada::create($request->all());

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
