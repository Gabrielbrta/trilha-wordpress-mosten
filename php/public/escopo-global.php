<?php 
echo "<pre>";

// global ------------------------------------

$nome = "Gabriel";
// local ------------------------------------

// para conseguir enxergar a variavel do escopo global é necessario usar a palavra reservada 'global' para isso.

function local() { // oq está dentro de chaves é escopo local
    global $nome;
    // também da pra usar o $GLOBALS['nome'];
    echo $GLOBALS['nome'];
    echo '<br>';
    echo $nome;
}

local();