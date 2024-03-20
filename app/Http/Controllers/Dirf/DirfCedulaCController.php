<?php

namespace App\Http\Controllers\Dirf;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

use App\Http\Requests\DirfFormRequest;
use Illuminate\Http\UploadedFile;
use \setasign\Fpdi\Fpdi;
use \setasign\Fpdi\PdfParser\StreamReader;
use Smalot\PdfParser\Parser;
//use Smalot\PdfParser\Parser;
use DB;
use Illuminate\Http\Response;
use App\Models\DIRF\DirfCedulaC;

class DirfCedulaCController extends Controller
{

    public function inicio()
    {


        $cedulas = DirfCedulaC::all();
        //dd($cedulas);
        return view('dirf.inicio', compact('cedulas'));
    }

    public function download($cpf)
    {
        $pdfPath = storage_path('app/pdfs/Dirf2024CPF' . str_replace('.', '', $cpf) . '.pdf');

        if (file_exists($pdfPath)) {
            return response()->download($pdfPath, $cpf . '.pdf', [
                'Content-Type' => 'application/pdf'
            ]);
        }

        return view('dirf.cpf_not_found', ['cpf' => $cpf]);
    }

    public function upload(Request $request)
    {
        $files = $request->file('pdfs');

        if (!$files) {
            throw ValidationException::withMessages([
                'pdfs' => 'Nenhum arquivo foi enviado.'
            ]);
        }

        $results = [];
        $uploadCount = 0;

        foreach ($files as $file) {
            if ($file) {
                /**
                 * Ler o arquivo temporário
                 */

                $parser = new Parser();
                $pdf = $parser->parseFile($file->getRealPath());
                $text = $pdf->getText(); // Extrai o texto do PDF

                /**
                 *  Expressão regular para extrair CPF, nome e ano do exercício
                 */

                preg_match("/\d{3}\.\d{3}\.\d{3}-\d{2}/", $text, $cpfMatches);
                preg_match("/\d{3}\.\d{3}\.\d{3}-\d{2}\s*(.*)/", $text, $nameMatches);
                preg_match("/Exercício de (\d+)/", $text, $exerciseMatches);
                /*
                // Prepara os dados
                */
                $cpf = $cpfMatches[0] ?? 'CPF Nao encontrado';
                $name = isset($nameMatches[1]) ? trim(str_replace('Nome Completo', '', $nameMatches[1])) : 'Nome nao encontrado';
                $exerciseYear = $exerciseMatches[1] ?? 'Ano nao encontrado';
                $userId = Auth::id();

                /* Salva o arquivo no diretório storage/app/public/pdf e obtém o caminho
                 */
                $pdfPath = $file->store('public/pdf');
                /*
                // Cria uma nova cédula e salva no banco de dados
                */
                $cedula = new DirfCedulaC();
                $cedula->cpf = $cpf;
                $cedula->nome = $name;
                $cedula->anoExercicio = $exerciseYear;
                $cedula->caminhodoarquivo = $pdfPath;
                $cedula->id_usuario = $userId;

                if ($cedula->save()) {
                    $uploadCount++;
                    $results[] = [
                        'cpf' => $cpf,
                        'nome' => $name,
                        'anoExercicio' => $exerciseYear,
                        'caminhodoarquivo' => $pdfPath,
                        'id_usuario' => $userId
                    ];
                }
            }
        }

        if ($uploadCount > 0) {

            return redirect()->route('cedula.inicio')->with('success', "Foram processados $uploadCount arquivos.");
        } else {

            return response()->json([
                'success' => false,
                'message' => "Nenhum arquivo foi processado.",
                'data' => $results
            ]);
        }
    }




    public function pdf($cpf)
    {
        // Primeiro, encontre a cédula correspondente ao CPF fornecido.
        $cedula = DirfCedulaC::where('cpf', $cpf)->first();

        //dd($cedula);
        // Se a cédula não for encontrada ou o arquivo não existir, retorne um erro ou uma view específica.
        if (!$cedula || !file_exists(storage_path('app/public/' . $cedula->caminhodoarquivo))) {
            // Você pode retornar um erro 404 ou redirecionar para uma página de erro.
            // Por exemplo, retornar uma view dizendo que o arquivo não foi encontrado:
            return response()->json(['message' => 'Arquivo não encontrado']);
        }

        // Se o arquivo existir, prepare e retorne a resposta com o arquivo.
        $caminhodoarquivo = storage_path('app/public/' . $cedula->caminhodoarquivo);

        return new Response(file_get_contents($caminhodoarquivo), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($caminhodoarquivo) . '"'
        ]);
    }

    public function pesquisapublica(Request $request)
    {
        return view('dirf.dirf_search');
    }
    public function resultadoPublico(Request $request)
    {
        $cpf = $request->cpf;
        $nomeInformado = strtolower($request->nome);

        // Busca por CPF e nome
        $cedulasFiltradas = DirfCedulaC::where('cpf', $cpf)
            ->get()
            ->filter(function ($cedula) use ($nomeInformado) {
                $primeiroNome = strtolower(explode(' ', trim($cedula->nome))[0]);
                return $primeiroNome === $nomeInformado;
            });

        if ($cedulasFiltradas->isEmpty()) {
            
            return response()->json([
                'message' => 'Não foram encontrados dados para as credenciais informadas.'
            ], 404);
        }

        
        $nomeDirf = explode(' ', trim($cedulasFiltradas->first()->nome))[0];

       
        return view('dirf.cpf_result', compact('cedulasFiltradas', 'nomeDirf'));
    }



    public function pdfPublico($cpf, $anoExercicio)
    {
        // Primeiro, encontre a cédula correspondente ao CPF fornecido.
        $cedula = DirfCedulaC::where('cpf', $cpf)->where('anoExercicio', $anoExercicio)->first();

        //dd($cedula);
        // Se a cédula não for encontrada ou o arquivo não existir, retorne um erro ou uma view específica.
        if (!$cedula || !file_exists(storage_path('app/public/' . $cedula->caminhodoarquivo))) {
            // Você pode retornar um erro 404 ou redirecionar para uma página de erro.
            // Por exemplo, retornar uma view dizendo que o arquivo não foi encontrado:
            return response()->json(['message' => 'Arquivo não encontrado']);
        }

        /* Se o arquivo existir, prepare e retorne a resposta com o arquivo. */
        $caminhodoarquivo = storage_path('app/public/' . $cedula->caminhodoarquivo);

        return new Response(file_get_contents($caminhodoarquivo), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($caminhodoarquivo) . '"'
        ]);
    }
}
