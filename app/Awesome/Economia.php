<?php

namespace App\Awesome;

class Economia{
    
    // URL base da API de Economia
    const BASE_URL = "https://economia.awesomeapi.com.br/json";

    // método responsável por consultar a cotação atual das moedas
    public function consultarCotacao($moeda1, $moeda2){
        return $this->get("/last/" . $moeda1 . "-" . $moeda2);
    }

    // método responsável por consultar 
    public function consultarUltimosFechamentos($moeda1, $moeda2, $dias = 1){
        return $this->get("/daily/" . $moeda1 . "-" . $moeda2 . "/" . $dias);
    }

    // método responsável por executar a requisição na API de Economia do Awesome
    public function get($resource){
        // endpoint
        $endpoint = self::BASE_URL . $resource;

        // inicia o cURL
        $curl = curl_init();

        // configurações do curl
        curl_setopt_array($curl, [
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        // response
        $response = curl_exec($curl);

        // fecha a conexão do curl
        curl_close($curl);

        // retorna o resultado em array
        return json_decode($response, true);

    }

}
