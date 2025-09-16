<?php 
// tudo que esta entre aspas duplas e aspas simples é uma string

$nome = "Gabriel";
$idade = 25;
// quando usar aspas duplas e simples?
// Aspas simples não tem interpolação de variaveis
echo 'Meu nome é $nome';
echo "<br>";

// Aspas duplas tem interpolação de variaveis
echo "Meu nome é $nome";
echo "<br>";

// Também é possível usar chaves para fazer operações na string com aspas duplas
$frase ="Meu nome é {$nome} e tenho {$idade} anos";
echo $frase; 
echo  "<br>";

// contar caracteres srtlen
$metade_frase = strlen($frase) / 2;
echo $metade_frase;
echo "<br>";

// corta a string, passa a variavel, o inicio e o fim
echo substr($frase, 0 , $metade_frase);
echo "<br>";

// verifico se existe determinado valor na string
echo str_contains($frase, "Gabriel");
echo "<br>";
