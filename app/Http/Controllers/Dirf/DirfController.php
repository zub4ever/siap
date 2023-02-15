<?php

namespace App\Http\Controllers\Dirf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\DIRF\D_2023\DIRF2023;
use App\Http\Requests\DirfFormRequest;
use PDF;

class DirfController extends Controller {

    public function showUploadForm() {

        return view("dirf.upload-pdf");
    }
public function upload(DirfFormRequest $request)
{
    $pdfs = $request->file('pdfs');
    $errors = [];

    foreach ($pdfs as $pdf) {
        $filename = $pdf->getClientOriginalName();

        // Extrair CPF e Nome do arquivo usando regex
        if (preg_match('/CPF\s*(\d{3})\.?(\d{3})\.?(\d{3})-?(\d{2})\s*Nome Completo\s*(.+)/', $filename, $matches)) {
            $cpf = $matches[1].$matches[2].$matches[3].$matches[4];
            $nome = $matches[5];
            $path = $pdf->storeAs('pdfs', "DIRF2023_{$cpf}.pdf");
            DIRF2023::create([
                'path' => $path,
                'cpf' => $cpf,
                'nome' => $nome,
            ]);
        } else {
            // Se o arquivo não seguir o padrão, adicionar erro à lista de erros
            $errors[] = "O arquivo '{$filename}' não segue o padrão de nome esperado.";
        }
    }

    if (!empty($errors)) {
        return redirect()->back()->withErrors(new \Illuminate\Support\MessageBag($errors));
    }

    return redirect()->back()->with('success', 'Arquivos enviados com sucesso.');
}



   public function store(DirfFormRequest $request) {
    $errors = [];

    foreach ($request->file('pdfs') as $pdf) {
        $path = $pdf->store('pdfs');
        $filename = $pdf->getClientOriginalName();
        $cpf = null;
        $nome = null;

        // Extrair CPF e Nome do arquivo usando regex
        if (preg_match('/CPF\s*(\d{3})\.?(\d{3})\.?(\d{3})-?(\d{2})\s*Nome Completo\s*(.+)/', $filename, $matches)) {
            $cpf = $matches[1].$matches[2].$matches[3].$matches[4];
            $nome = $matches[5];
        } else {
            // Se o arquivo não seguir o padrão, adicionar erro à lista de erros
            $errors[] = "O arquivo '{$filename}' não segue o padrão de nome esperado.";
        }

        // Salvar os dados no banco de dados
        DIRF2023::create([
            'path' => $path,
            'cpf' => $cpf,
            'nome' => $nome,
            'filename' => "DIRF2023_{$cpf}.pdf",
        ]);
    }

   if (!empty($errors)) {
    return redirect()->back()->withErrors(new \Illuminate\Support\MessageBag($errors));
}

return redirect()->back()->with('success', 'Arquivos enviados com sucesso.');

}



}
