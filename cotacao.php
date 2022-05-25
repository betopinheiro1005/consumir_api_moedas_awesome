<?php

require __DIR__ . '/vendor/autoload.php';

// dependências
use \App\Awesome\Economia;

// instância da classe de API
$obEconomia = new Economia;

// verifica os argumentos
if(!isset($argv[2])){
    die('É necessário enviar duas moedas');
}

// moedas
$moeda1 = $argv[1];
$moeda2 = $argv[2];

// executa a requisição na API
$dadosCotacao = $obEconomia -> consultarCotacao($moeda1, $moeda2);

// ajusta o response dos dados
$dadosCotacao = $dadosCotacao[$moeda1.$moeda2] ?? [];

// imprime o retorno da cotação
echo "Moedas " . $moeda1 . " => " . $moeda2 . "\n";
echo "Compra: " . ($dadosCotacao['bid'] ?? 'Desconhecido') . "\n";
echo "Venda: " . ($dadosCotacao['ask'] ?? 'Desconhecido') . "\n";
