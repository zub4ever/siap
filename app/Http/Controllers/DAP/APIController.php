<?php

namespace App\Http\Controllers\DAP;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

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
            $response = $guzzle->request('POST', 'https://api.hm.bb.com.br/cobrancas/v2/boletos?gw-dev-app-key=' . config('apiCobranca.gw_dev_app_key'),
                array(
                    'form_params' => array(
                        'grant_type' => 'client_credentials',
                        'client_id' => config('apiCobranca.client_id'),
                        'client_secret' => config('apiCobranca.client_secret'),
                        'scope' => 'cobrancas.boletos-info cobrancas.boletos-requisicao'
                    )));

            /* Recuperar o corpo da resposta da requisição */
            $body = $response->getBody();

            /* Acessar as dados da resposta - JSON */
            $contents = $body->getContents();

            /* Converte o JSON em array associativo PHP */
            $token = json_decode($contents);

            //return $token->access_token;
            dd($token->access_token);


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
            "dataEmissao" => "09.02.2021",
            "dataVencimento" => "12.02.2021",
            "valorOriginal" => 456.32,
            "valorAbatimento" => 0,
            "quantidadeDiasProtesto" => 0,
            "quantidadeDiasNegativacao" => 0,
            "orgaoNegativador" => 0,
            "indicadorAceiteTituloVencido" => "N",
            "numeroDiasLimiteRecebimento" => 0,
            "codigoAceite" => "N",
            "codigoTipoTitulo" => 2,
            "descricaoTipoTitulo" => "DM",
            "indicadorPermissaoRecebimentoParcial" => "N",
            "numeroTituloBeneficiario" => "947262434",
            "campoUtilizacaoBeneficiario" => "RPPS",
            "numeroTituloCliente" => "0003128557700000600",
            "mensagemBloquetoOcorrencia" => "BOLETO DE TESTE",

            "multa" => array(

                "valor" => 54.80
  ),
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
            "beneficiarioFinal" => array(
                "tipoInscricao" => 2,
                "numeroInscricao" => 97257206000133,
                "nome" => "PAPELARIA FILARDES GARRIDO"
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

            dd($boleto);

        } catch (ClientException $e) {
            echo $e->getMessage();
        }


    }

    public function listar()
    {

    }

    public function consultar()
    {

    }

    public function atualizar()
    {

    }


}
