<?php

namespace App\Http\Controllers\Dirf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\DIRF\D_2023\DIRF2023;
use App\Http\Requests\DirfPMRBFormRequest;
use Illuminate\Http\UploadedFile;
use \setasign\Fpdi\Fpdi;
use \setasign\Fpdi\PdfParser\StreamReader;
use Smalot\PdfParser\Parser;
use DB;
use League\Csv\Reader;

class DirfCedulaPMRBCController extends Controller {

    public function index() {

        $cpfList = DB::table('documentos_cedula_c_pmrb')
                ->select('cpf', 'nome', 'matricula', 'pdf_path')
                ->orderBy('cpf')
                ->get();

        return view('dirf_pmrb.index', [
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

    public function upload(DirfPMRBFormRequest $request) {
        $uploadedFiles = $request->file('pdfs_pmrb');
        foreach ($uploadedFiles as $uploadedFile) {
            // Verifica se o arquivo é realmente um PDF
            if ($uploadedFile->extension() !== 'pdf') {
                continue;
            }

            $fileName = $uploadedFile->getClientOriginalName();

            $cpfRegex = '/(\d{3}\.\d{3}\.\d{3}-\d{2})/';
            preg_match($cpfRegex, $fileName, $matches);
            if (empty($matches)) {
                continue;
            }
            $cpf = $matches[0];

            $nameRegex = '/(?<=Nome Completo)[A-Z\s]+/';
            preg_match($nameRegex, $fileName, $nameMatches);
            if (empty($nameMatches)) {
                continue;
            }
            $name = trim($nameMatches[0]);

            $existingFile = DB::table('documentos_cedula_c_pmrb')->where('cpf', $cpf)->first();
            if ($existingFile) {
                Storage::delete($existingFile->pdf_path);
                DB::table('documentos_cedula_c_pmrb')->where('cpf', $cpf)->delete();
            }

            $pdfPath = $uploadedFile->storeAs(
                    'pdfs_pmrb',
                    'Dirf2023CPF' . $cpf . str_replace(' ', '', $name) . '.pdf'
            );

            DB::table('documentos_cedula_c_pmrb')->insert([
                'cpf' => $cpf,
                'nome' => $name,
                'pdf_path' => $pdfPath,
            ]);
        }

        return redirect()->route('dirf_pmrb.index')->with(
                        'success',
                        'Upload realizado com sucesso.'
        );
    }

    public function store($cpf) {

        $document = DB::table('documentos_cedula_c_pmrb')->where('cpf', $cpf)->first();
        $pdfPath = $document ? storage_path('app/public/' . $document->pdf_path) : null;

        if ($pdfPath && file_exists($pdfPath)) {
            $response = new Response(file_get_contents($pdfPath), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . basename($pdfPath) . '"',
            ]);

            return $response->header('Cache-Control', 'public')
                            ->header('Content-Transfer-Encoding', 'binary')
                            ->header('Content-Length', filesize($pdfPath));
        } else {
            return redirect()->back()->with('error', 'Arquivo não encontrado para este CPF.');
        }
    }

    public function search_pmrb() {


        return view('dirf_pmrb.dirfpmrb_search');
    }

    public function resultado_pmrb(Request $request) {
        $cpf = $request->input('cpf');
        $matricula = $request->input('matricula');

        // Verifica se o CPF e a matrícula foram fornecidos
        if (!$cpf || !$matricula) {
            return redirect()->route('dirf_pmrb.not-found')->with('error', 'Por favor, informe o CPF e a matrícula.');
        }

        $document = DB::table('documentos_cedula_c_pmrb')
                ->select('cpf', 'pdf_path', 'nome', 'matricula')
                ->where('cpf', $cpf)
                ->where('matricula', $matricula)
                ->first();

        // Verifica se o registro foi encontrado
        if (!$document) {
            return redirect()->route('dirf_pmrb.not-found')->with('error', 'O CPF e/ou a matrícula informados não foram encontrados.');
        }

        $pdfPath = $document->pdf_path;

        return view('dirf_pmrb.dirfpmrb_resultado', [
            'pdfPath' => $pdfPath,
            'cpf' => $cpf,
            'nome' => $document->nome,
            'matricula' => $document->matricula
        ]);
    }

    public function cpfNotFound(Request $request) {
        $cpf = $request->input('cpf');
        $matricula = $request->input('matricula');
        $errorMessage = $request->session()->get('error');
        return view('dirf_pmrb.cpf_not_found', ['cpf' => $cpf, 'matricula' => $matricula, 'errorMessage' => $errorMessage]);
    }

    public function store_pmrb($cpf, $matricula) {

        $document = DB::table('documentos_cedula_c_pmrb')->where('cpf', $cpf)->where('matricula', $matricula)->first();
        $pdfPath = $document ? storage_path('app/public/' . $document->pdf_path) : null;

        if ($pdfPath && file_exists($pdfPath)) {
            $response = new Response(file_get_contents($pdfPath), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . basename($pdfPath) . '"',
            ]);

            return $response->header('Cache-Control', 'public')
                            ->header('Content-Transfer-Encoding', 'binary')
                            ->header('Content-Length', filesize($pdfPath));
        } else {
            return response()->json(['error' => 'Arquivo não encontrado para este CPF e Matrícula.'], 404);
        }
    }

    //Fim da controller    
}

//


