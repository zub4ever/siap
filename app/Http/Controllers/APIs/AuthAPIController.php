<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Serve;
use Firebase\JWT\JWT;

class AuthAPIController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'matricula' => 'required',
            'cpf' => 'required',
        ]);

        //Buscar o registro com base na matrícula e no CPF fornecidos
        $serve = Serve::where('matricula', $request->matricula)
            ->where('cpf', $request->cpf)
            ->first();

        // Verificar se a matrícula e o CPF correspondem a um registro válido
        if (!$serve) {
            return response()->json(['message' => 'Credenciais inválidas'], 401);
        }

        // Gerar um token JWT
        $token = $this->generateJwtToken($serve->id);

        // Retornar a resposta com o token
        return response()->json(['token' => $token], 200);
    }

    private function generateJwtToken($userId)
    {
        $payload = [
            'sub' => $userId,
            'iat' => time(),
            'exp' => time() + (60 * 60) // Token válido por 1 hora
        ];

        $jwtToken = JWT::encode($payload, 'PIKACHU123', 'HS256');

        return $jwtToken;
    }
}
