<?php

namespace App\Http\Controllers\Dirf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\DIRF\D_2023\DIRF2023;
use App\Http\Requests\DirfFormRequest;
use Illuminate\Http\UploadedFile;
use \setasign\Fpdi\Fpdi;
use \setasign\Fpdi\PdfParser\StreamReader;
use Smalot\PdfParser\Parser;




class DirfController extends Controller {

    public function showUploadForm() {

        return view("dirf.upload-pdf");
    }

    public function upload(DirfFormRequest $request) {
        $pdfs = $request->file('pdfs');
        $errors = [];

        foreach ($pdfs as $pdf) {
            $filename = $pdf->getClientOriginalName();

            // Extrair CPF e Nome do arquivo usando regex
            $pdfData = file_get_contents($pdf->getPathname());
            $parser = new \Smalot\PdfParser\Parser();
            $pdf = $parser->parseContent($pdfData);
            $text = $pdf->getText();

            if (preg_match('/CPF\s*(\d{3})\.?(\d{3})\.?(\d{3})-?(\d{2})\s*Nome Completo\s*(.+)/', $text, $matches)) {
                $cpf = $matches[1] . $matches[2] . $matches[3] . $matches[4];
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
            $pdfData = file_get_contents($pdf->getPathname());
            $parser = new \Smalot\PdfParser\Parser();
            $pdf = $parser->parseContent($pdfData);
            $text = $pdf->getText();

            if (preg_match('/CPF\s*(\d{3})\.?(\d{3})\.?(\d{3})-?(\d{2})\s*Nome Completo\s*(.+)/', $text, $matches)) {
                $cpf = $matches[1] . $matches[2] . $matches[3] . $matches[4];
                $nome = $matches[5];

                // Copiar o arquivo para um novo arquivo com o nome esperado
                $pdfCopy = new Fpdi();
                $pdfCopy->AddPage();
                $pdfCopy->setSourceFile($parser);
                $tplIdx = $pdfCopy->importPage(1);
                $pdfCopy->useTemplate($tplIdx, 0, 0);
                $pdfCopy->Output(public_path("pdfs/DIRF2023_{$cpf}.pdf"), "F");

                // Salvar os dados no banco de dados
                DIRF2023::create([
                    'path' => "pdfs/DIRF2023_{$cpf}.pdf",
                    'cpf' => $cpf,
                    'nome' => $nome,
                    'filename' => "DIRF2023_{$cpf}.pdf",
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

}
