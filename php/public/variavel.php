<?php 

// cameCase
// snake_case
// php é case sensitive

// estou referenciando o $nome2 ao mesmo espaço da memória de $nome
// isso faz com que, quando eu altere o $nome, ele irá alterar p $nome2 também(ponteiros)
// $nome = &$nome2;

    echo "<br>";
    $nome = "Gabriel";
    echo "<br>";
    echo gettype($nome);


    // constantes
    define("NAME", "Gabriel");
    echo "<br>" .  NAME;


    // Constantes magicas
    // já pré definidas pelo php

    echo __DIR__;
    echo "<br>";

    // Verificar se uma constante existe ou já está definida

    if(defined("NAME")){
        echo "Foi definido";
    }

    // Pegar todas as constantes que o PHP tem
    $cons = get_defined_constants(true);
    // var_dump($cons);

    
?>