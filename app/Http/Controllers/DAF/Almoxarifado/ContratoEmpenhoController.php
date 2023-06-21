<?php

namespace App\Http\Controllers\DAF\Almoxarifado;

use App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho;

use App\Models\DAF\AlmoxarifadoVirtual\ElementoDespesa;
use App\Models\DAF\AlmoxarifadoVirtual\EmpresaContratada;
use App\Models\DAF\AlmoxarifadoVirtual\FonteDespesa;
use App\Models\DAF\AlmoxarifadoVirtual\ProgramaTrabalho;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class ContratoEmpenhoController extends Controller
{

    public function index()
    {
        $contratoEpenho = DB:: table('almoxarifado_virtual_contrato_empenho as almo_virtual')
            ->join('almoxarifado_virtual_empresa_contratada as empresa', 'almo_virtual.almoxarifado_virtual_empresa_contratada_id', '=', 'empresa.id')
            ->select('almo_virtual.id', 'almo_virtual.cod_grp', 'almo_virtual.nr_sei', 'almo_virtual.nr_contrato', 'empresa.razao_social','empresa.cnpj')
            ->get();
        //dd($contratoEpenho);
        return view('daf.virtualAlmoxarifado.contratoEmpenho.index', compact('contratoEpenho'));
    }

    public function create()
    {
        $empresa_contratada = EmpresaContratada::all();
        $elemento_despesa = ElementoDespesa::all();
        $fonte_recurso = FonteDespesa::all();
        $programa_trabalho = ProgramaTrabalho::all();

        return view('daf.virtualAlmoxarifado.contratoEmpenho.create', compact('empresa_contratada', 'elemento_despesa', 'fonte_recurso', 'programa_trabalho'));
    }

    public function store(Request $request)
    {
        // Obter o usuário logado
        $user = auth()->user();
        $cod_grp = $request->input('cod_grp');
        $saldo_total = str_replace(',', '.', str_replace('.', '', $request->input('saldo_total')));

        // Verificar se o CNPJ já está cadastrado
        $contratoExistente = AlmoVirtualContratoEmpenho::where('cod_grp', $cod_grp)->first();

        if ($contratoExistente) {
            return redirect()->route('ContratoEmpenho.index')->with('error', 'Esse Contrato já está cadastrado.');
        }

        // Validação do formato da hora
        $horaAssinatura = $request->input('hora_assinatura');
        $validHoraAssinatura = DateTime::createFromFormat('H:i:s', $horaAssinatura);

        if (!$validHoraAssinatura) {
            DB::rollBack();
            return redirect()->route('ContratoEmpenho.index')->with('error', 'Formato de hora de assinatura inválido.');
        }

        $empresaContratada = new AlmoVirtualContratoEmpenho($request->all());
        $empresaContratada->saldo_total = $saldo_total;
        $empresaContratada->hora_assinatura = $horaAssinatura;
        DB::beginTransaction();

        if (!$empresaContratada) {
            DB::rollBack();
            return redirect()->route('ContratoEmpenho.index')->with('error', 'Falha ao cadastrar o Contrato.');
        }

        if ($user) {
            $empresaContratada->users_id = $user->id;
            $empresaContratada->save();
        }

        DB::commit();

        return redirect()->route('ContratoEmpenho.index')->with('success', 'Contrato cadastrado com sucesso.');
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
