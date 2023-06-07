<?php

namespace App\Http\Controllers\APIs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Serve;
use Illuminate\Support\Facades\Storage;
use App\Models\DIPREV\ProvadeVida\ProvaDeVida;

use Illuminate\Http\File;



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
        // Obter os dados da etapa1 e etapa2 do request
        $etapa1Data = $request->input('etapa1');
        $etapa2Data = $request->input('etapa2');

        // Upload das fotos
        $fotoDocFrente = $request->file('etapa2.foto_doc_frente');
        $fotoDocVerso = $request->file('etapa2.foto_doc_verso');
        $fotoDocFacial = $request->file('etapa2.foto_doc_facial');

        if ($fotoDocFrente && $fotoDocVerso && $fotoDocFacial) {
            // Salvar as fotos no diretório de armazenamento (storage)
            $fotoDocFrentePath = $fotoDocFrente->store('fotos');
            $fotoDocVersoPath = $fotoDocVerso->store('fotos');
            $fotoDocFacialPath = $fotoDocFacial->store('fotos');

            // Obter apenas o nome dos arquivos das fotos
            $fotoDocFrenteNome = basename($fotoDocFrentePath);
            $fotoDocVersoNome = basename($fotoDocVersoPath);
            $fotoDocFacialNome = basename($fotoDocFacialPath);

            // Atualizar o caminho das fotos nos dados da etapa 2
            $etapa2Data['foto_doc_frente'] = 'storage/fotos/' . $fotoDocFrenteNome;
            $etapa2Data['foto_doc_verso'] = 'storage/fotos/' . $fotoDocVersoNome;
            $etapa2Data['foto_doc_facial'] = 'storage/fotos/' . $fotoDocFacialNome;
        }

        // Configurar os valores fixos
        $etapa2Data['prova_de_vida_status_id'] = 1;
        $etapa2Data['prova_de_vida_ano'] = date('Y');

        // Salvar os dados no banco de dados
        $provaDeVida = ProvaDeVida::create(array_merge($etapa1Data, $etapa2Data));

        if ($provaDeVida) {
            return response()->json(['message' => 'Dados salvos com sucesso'], 200);
        } else {
            return response()->json(['message' => 'Erro ao salvar os dados'], 500);
        }
    }













}
