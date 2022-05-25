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
$dadosFechamento = $obEconomia -> consultarUltimosFechamentos($moeda1, $moeda2, 15);


// imprime o retorno da cotação
echo "Moedas " . $moeda1 . " => " . $moeda2 . "\n";

// itera os dados dos fechamentos
foreach($dadosFechamento as $fechamento){
    //output
    $output = [
        date('Y-m-d',$fechamento['timestamp']),
        number_format($fechamento['bid'], 4, '.', ','),
        number_format($fechamento['ask'], 4, '.', ','),
    ];

    // imprime o resultado
    echo implode(' | ', $output) . "\n";
}

