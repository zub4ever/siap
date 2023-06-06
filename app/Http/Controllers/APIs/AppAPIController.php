<?php

namespace App\Http\Controllers\APIs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Serve;
use Illuminate\Support\Facades\Storage;
use App\Models\DIPREV\ProvadeVida\ProvaDeVida;


class AppAPIController extends Controller
{

    public function getServeByCPF(Request $request)
    {
        $cpf = $request->input('cpf');

        $serve = Serve::where('cpf', $cpf)->first();

        if ($serve) {
            return response()->json([
                'matricula' => $serve->matricula,
                'cpf' => $serve->cpf,
                'nm_servidor' => $serve->nm_servidor,
                'data_nascimento' => $serve->data_nascimento,
            ]);
        } else {
            return response()->json(['message' => 'Nenhum registro encontrado.'], 404);
        }
    }
    public function receberDados(Request $request)
    {
        // Obter os dados do formulário do request
        $data = $request->all();

        //dd($data);
        
        // Upload das fotos
        $fotoDocFrentePath = $request->file('foto_doc_frente')->store('public/fotos');
        $fotoDocVersoPath = $request->file('foto_doc_verso')->store('public/fotos');
        $fotoDocFacialPath = $request->file('foto_doc_facial')->store('public/fotos');
        
        // Salvar os caminhos das fotos nos campos correspondentes
        $data['foto_doc_frente'] = 'storage/' . $fotoDocFrentePath;
        $data['foto_doc_verso'] = 'storage/' . $fotoDocVersoPath;
        $data['foto_doc_facial'] = 'storage/' . $fotoDocFacialPath;
        
        // Configurar os valores fixos
        $data['prova_de_vida_status_id'] = 1;
        $data['prova_de_vida_ano'] = date('Y');
        
        // Salvar os dados no banco de dados
        $provaDeVida = ProvaDeVida::create($data);
        
        if ($provaDeVida) {
            return response()->json(['message' => 'Dados salvos com sucesso'], 200);
        } else {
            return response()->json(['message' => 'Erro ao salvar os dados'], 500);
        }
    }


}
