<?php 
// (string)
// (boolean)
// (float)
// (integer)
// (double)
// (object)
// (array)
// intVal
// floatVal
// doubleVal
// strVal
// boolVal
echo "<pre>";


// string preenchida é truty então na coerção vira true, se for string vazia é falsy e vira false;
$name = "Gabriel";
// coerção de dados
$change = (boolean) $name; 
$change = boolval($name); // outra forma de alterar e mais fácil 
var_dump($change);

// qualquer numero diferente de 0 é truty e se torna true
// caso contrario é falsy, 0 e se torna false
$number = 0;
$change = (boolean) $number; 
$change = boolval($number); 
var_dump($change);

// transformar numero em string
// ele transforma o número em string
$number = '432';
$change = (string) $number; 
$change = strval($number); // outra forma de converter e mais fácil 
var_dump($change);

// transformar valor em float / double, se for string e não for possivel converter, ele mesmo assim converte e transforma o valor em 0.
$number = 'asdasasd'; // vai dar 0 se for uma string verdadeira
$number = '12'; // vai converter normalmente
$number = 12; // vai converter normalmente
$change = doubleval($number); 
var_dump($change); 


//transformar float/ double em integer
$number = 12.32;
$change = (integer) $number;
$change = intval($number);
var_dump($change);

// transformar arrays em objetos
// somente possivel com arrays com chaves nominadas
$nomes = ['nome1' => "Gabriel", 'nome2' => "Pedrinho", 'nome3' => "Juninho"];
$arrayConvertido = (object) $nomes;
var_dump($arrayConvertido->nome1);



