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
use Sunra\PhpSimple\HtmlDomParser;

class DirfController extends Controller {

    public function showUploadForm() {

        return view("dirf.upload-pdf");
    }

    public function upload(Request $request) {
        if ($request->hasFile('html_file')) {
            $file = $request->file('html_file');
            $fileName = $file->getClientOriginalName();

            $fileContent = file_get_contents($file->getPathname());
            $html = new \DOMDocument();
            $html->loadHTML($fileContent);

            $cpfList = [];
            $nameList = [];

            $tables = $html->getElementsByTagName('table');
            foreach ($tables as $table) {
                $rows = $table->getElementsByTagName('tr');
                foreach ($rows as $row) {
                    $cols = $row->getElementsByTagName('td');
                    if ($cols->length == 2) {
                        $cpfTd = $cols->item(0);
                        $nameTd = $cols->item(1);
                        $cpf = $cpfTd->textContent;
                        $name = $nameTd->textContent;

                        // Verifica se o texto da célula contém um CPF
                        if (preg_match('/[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}/', $cpf)) {
                            $cpfList[] = $cpf;
                            $nameList[] = $name;
                        }
                    }
                }
            }

            return view('dirf.upload-result', [
                'cpfList' => $cpfList,
                'nameList' => $nameList
            ]);
        }
    }

    public function store(Request $request)
    {
        $path = $request->file('result')->store('results');
        $file = Storage::get($path);
        
        $cpfList = array();
        $nameList = array();

        $dom = new \DOMDocument();
        $dom->loadHTML($file);
        $tables = $dom->getElementsByTagName('table');
        
        foreach ($tables as $table) {
            $rows = $table->getElementsByTagName('tr');
            foreach ($rows as $row) {
                $cells = $row->getElementsByTagName('td');
                $cpf = "";
                $name = "";
                foreach ($cells as $cell) {
                    $text = trim($cell->nodeValue);
                    if (preg_match('/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/', $text)) {
                        $cpf = $text;
                    } elseif (!empty($text)) {
                        $name = $text;
                    }
                }
                if (!empty($cpf) && !empty($name)) {
                    $cpfList[] = $cpf;
                    $nameList[] = $name;
                }
            }
        }

        // Fazer algo com as listas de CPF e nomes (armazenar no banco, gerar relatório, etc.)

        return view('upload-result')->with('cpfList', $cpfList)->with('nameList', $nameList);
    }
    
    
    public function showUploadResult()
    {
        return view('dirf.upload-result');
    }

}
