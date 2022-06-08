<?php

namespace App\Http\Controllers\DAP;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use PDF;

class APIController extends Controller
{
    public function token()
    {
        try {
            /* Criação do objeto cliente */
            $guzzle = new Client([
                'headers' => [
                    'gw-dev-app-key' => config('apiCobranca.gw_dev_app_key'),
                    'Authorization' => config('apiCobranca.authorization'),
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                /* Desativar SSL*/
                /* =>false*/
                'verify' => false
            ]);
            /* Requisição POST*/
            $response = $guzzle->request('POST', 'https://oauth.sandbox.bb.com.br/oauth/token?gw-dev-app-key=' . config('apiCobranca.gw_dev_app_key'),
                array(
                    'form_params' => array(
                        'grant_type' => 'client_credentials',
                        'client_id' => config('apiCobranca.client_id'),
                        'client_secret' => config('apiCobranca.client_secret'),
                        'scope' => 'cobrancas.boletos-requisicao cobrancas.boletos-info'
                    )));

            /* Recuperar o corpo da resposta da requisição */
            $body = $response->getBody();

            /* Acessar as dados da resposta - JSON */
            $contents = $body->getContents();

            /* Converte o JSON em array associativo PHP */
            $token = json_decode($contents);

            return $token->access_token;
            //dd($token->access_token);


        } catch (GuzzleException $e) {
            echo $e->getMessage();
        }


    }

    public function registrar()
    {
        /* Informações do Boleto */
        $body = array(
            "numeroConvenio" => 3128557,
            "numeroCarteira" => 17,
            "numeroVariacaoCarteira" => 35,
            "codigoModalidade" => 1,
            "dataEmissao" => "04.05.2022",
            "dataVencimento" => "12.06.2022",
            "valorOriginal" => 123.50,
            "valorAbatimento" => 0,
            "quantidadeDiasProtesto" => 0,
            "indicadorNumeroDiasLimiteRecebimento" => "N",
            "numeroDiasLimiteRecebimento" => 0,
            "codigoAceite" => "A",
            "codigoTipoTitulo" => 4,
            "descricaoTipoTitulo" => "DS",
            "indicadorPermissaoRecebimentoParcial" => "N",
            "numeroTituloBeneficiario" => "000101",
            "textoCampoUtilizacaoBeneficiario" => "RPPS",
            "codigoTipoContaCaucao" => 0,
            "numeroTituloCliente" => "00031285570006004000",
            "textoMensagemBloquetoOcorrencia" => "TESTE",

            "pagador" => array(
                "tipoInscricao" => 2,
                "numeroInscricao" => 97257206000133,
                "nome" => "PAPELARIA FILARDES GARRIDO",
                "endereco" => "fakE",
                "cep" => 69915204,
                "cidade" => "RIO BRANCO",
                "bairro" => "ESPERANCA",
                "uf" => "AC",
                "telefone" => "000000000"
            ),
             "indicadorPix"=> "S"

        );

        /* Converte array em json */

        $body = json_encode($body);

        //dd($body);

        try {
            $guzzle = new Client([
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token(),
                    'Content-Type' => 'application/json',
                ],
                'verify' => false
            ]);


            /* Requisição */
            $response = $guzzle->request('POST', 'https://api.sandbox.bb.com.br/cobrancas/v2/boletos?gw-dev-app-key=' . config('apiCobranca.gw_dev_app_key'),

                [
                    'body' => $body
                ]
            );

            /* Recuperar o corpo da resposta da requisição */
            $body = $response->getBody();

            /* Acessar as dados da resposta - JSON */
            $contents = $body->getContents();

            /* Conveter o JSON em array associativo PHP */
            $boleto = json_decode($contents);


            //$dadosboleto = $boleto;

            dd($boleto);


            //return view("dap.guiaCNPJ.verGuiaPDF", compact('dadosboleto'));




        } catch (ClientException $e) {
            echo $e->getMessage();
        }


    }

    public function listar()
    {
        try {
            $guzzle = new Client([
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token(),
                    'Content-Type' => 'application/json',
                ],
                'verify' => false
            ]);

            /* Requisição */
            $response = $guzzle->request('GET', 'https://api.sandbox.bb.com.br/cobrancas/v2/boletos?gw-dev-app-key=' . config('apiCobranca.gw_dev_app_key') .
                '&agenciaBeneficiario=' . '452' .
                '&contaBeneficiario=' . '123873' .
                '&indicadorSituacao=' . 'B' .
                '&indice=' . '20' .
                '&codigoEstadoTituloCobranca=' . '7' .
                '&dataInicioMovimento=' . '01.01.2021' .
                '&dataFimMovimento=' . '27.08.2021'
            );

            /* Recuperar o corpo da resposta da requisição */
            $body = $response->getBody();

            /* Acessar as dados da resposta - JSON */
            $contents = $body->getContents();

            /* Converter o JSON em array associativo do PHP */
            $boletos = json_decode($contents);

            dd($boletos);

        } catch (GuzzleException $e) {
            echo $e->getMessage();
        }
    }

    public function consultar(){
        $id = '00031285570007004000';
        try {
            $guzzle = new Client([
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token(),
                    'Content-Type' => 'application/json',
                ],
                'verify' => false
            ]);

            /* Requisição */
            $response = $guzzle->request('GET', 'https://api.hm.bb.com.br/cobrancas/v2/boletos/'.
                $id .
                '?gw-dev-app-key=' . config('apiCobranca.gw_dev_app_key') .
                '&numeroConvenio=' .'3128557'
            );

            /* Recuperar o corpo da resposta da requisição */
            $body = $response->getBody();

            /* Acessar as dados da resposta - JSON */
            $contents = $body->getContents();

            /* Converter o JSON em array associativo do PHP */
            $boleto = json_decode($contents);


            //dd($boleto);


            $dadosboleto = $boleto;


            return view("dap.guiaCNPJ.verGuiaPDF", compact('dadosboleto'));

        } catch (ClientException $e) {
            echo $e->getMessage();
        }

    }

    public function atualizar()
    {

    }


}
