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
use DB;

class DirfCedulaCController extends Controller {

    public function index() {

        $cpfList = DB::table('documentos')->pluck('cpf')->toArray();

        return view('dirf.index', [
            'cpfList' => $cpfList
        ]);
    }

    public function download($cpf) {
        $pdfPath = storage_path('app/pdf/Dirf2023CPF' . str_replace('.', '', $cpf) . '.pdf');

        if (file_exists($pdfPath)) {
            return response()->download($pdfPath);
        }

        abort(404);
    }

    public function upload(DirfFormRequest $request) {
        $cpfRegex = '/(\d{3}\.\d{3}\.\d{3}-\d{2})/'; // Regex para extrair o CPF do nome do arquivo

        $uploadedFiles = $request->file('pdfs');

        foreach ($uploadedFiles as $uploadedFile) {
            // Verifica se o arquivo é realmente um PDF
            if ($uploadedFile->extension() !== 'pdf') {
                continue;
            }

            $fileName = $uploadedFile->getClientOriginalName();
            preg_match($cpfRegex, $fileName, $matches);

            if (!empty($matches)) {
                $cpf = $matches[0];

                $existingFile = DB::table('documentos')->where('cpf', $cpf)->first();

                if ($existingFile) {
                    Storage::delete($existingFile->pdf_path);
                    DB::table('documentos')->where('cpf', $cpf)->delete();
                }

                $pdfPath = $uploadedFile->store('pdfs');

                DB::table('documentos')->insert([
                    'cpf' => $cpf,
                    'pdf_path' => $pdfPath
                ]);
            }
        }

        return redirect()->route('dirf.index')->with(
                        'success',
                        "Upload realizado com sucesso."
        );
    }

    public function store($cpf) {
        $document = DB::table('documentos')->where('cpf', $cpf)->first();

        if (!$document) {
            abort(404);
        }

        $pdfPath = $document->pdf_path;

        return response(Storage::get($pdfPath), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $cpf . '.pdf"'
        ]);
    }

}
