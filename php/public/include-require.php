<?php 

// Include tenta importar o arquivo e não interrompe o programa
include './teste.php';

// Require tenta importar o arquivo e se não existir ele dá erro 
// e interrompe o programa
require './teste.php';
// Importa o arquivo somente uma vez e caso de erro, ele mostra só uma vez e continua executando o resto do programa
include_once('teste.php');

// importa o arquivo somente uma vez e caso de erro, ele interrompe o programa e mostra o erro só uma vez.
require_once('teste.php');
    echo $person;

