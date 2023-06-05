<?php

namespace App\Http\Controllers\APIs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Serve;

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

}
