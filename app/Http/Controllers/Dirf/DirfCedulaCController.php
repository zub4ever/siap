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
use Illuminate\Http\Response;

class DirfCedulaCController extends Controller {

    public function index() {

        $cpfList = DB::table('documentos_cedula_c')->pluck('cpf')->toArray();

        return view('dirf.index', [
            'cpfList' => $cpfList
        ]);
    }

    public function download($cpf) {
        $pdfPath = storage_path('app/pdfs/Dirf2023CPF' . str_replace('.', '', $cpf) . '.pdf');

        if (file_exists($pdfPath)) {
            return response()->download($pdfPath, $cpf . '.pdf', [
                        'Content-Type' => 'application/pdf'
            ]);
        }

        return view('dirf.cpf_not_found', ['cpf' => $cpf]);
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
                $cpf = str_replace('.', '', $matches[0]);

                $existingFile = DB::table('documentos_cedula_c')->where('cpf', $cpf)->first();

                if ($existingFile) {
                    Storage::delete($existingFile->pdf_path);
                    DB::table('documentos_cedula_c')->where('cpf', $cpf)->delete();
                }

                $pdfPath = $uploadedFile->storeAs('pdfs', 'Dirf2023CPF' . $cpf . '.pdf');

                DB::table('documentos_cedula_c')->insert([
                    'cpf' => $cpf,
                    'pdf_path' => $pdfPath
                ]);
            }
        }

        return redirect()->route('dirf.index')->with(
                        'success',
                        'Upload realizado com sucesso.'
        );
    }

    public function store($cpf) {
        $pdfPath = storage_path('app/public/pdfs/Dirf2023CPF' . str_replace('.', '', $cpf) . '.pdf');

        if (!file_exists($pdfPath)) {
            return view('dirf.not-found', ['cpf' => $cpf]);
        }

        $response = new Response(file_get_contents($pdfPath), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $cpf . '.pdf"'
        ]);

        return $response;
    }

    public function search() {
        return view('dirf.dirf_search');
    }

    public function result(Request $request) {
        $cpf = $request->input('cpf');

        $document = DB::table('documentos_cedula_c')->where('cpf', $cpf)->first();

        if (!$document) {
            return redirect()->route('dirf.not-found')->with('error', 'O CPF digitado não foi encontrado.');
        }

        $pdfPath = $document->pdf_path;

        return view('dirf.cpf_result', ['pdfPath' => $pdfPath, 'cpf' => $cpf]);
    }

    public function cpfNotFound(Request $request) {
        $cpf = $request->input('cpf');
        $errorMessage = $request->session()->get('error');
        return view('dirf.cpf_not_found', ['cpf' => $cpf, 'errorMessage' => $errorMessage]);
    }
    public function store_c($cpf) {
        $pdfPath = storage_path('app/public/pdfs/Dirf2023CPF' . str_replace('.', '', $cpf) . '.pdf');

        if (!file_exists($pdfPath)) {
            return view('dirf.not-found', ['cpf' => $cpf]);
        }

        $response = new Response(file_get_contents($pdfPath), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $cpf . '.pdf"'
        ]);

        return $response;
    }
    

}
