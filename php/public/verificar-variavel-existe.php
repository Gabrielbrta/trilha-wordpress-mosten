<?php 
echo "<pre>";

$name = "gabriel";
var_dump(isset($name));
echo "<br>";
$name = null;

var_dump(isset($name)); // ele vai retornar vazio
echo "<br>";

// verificar se o indice de um array existe
$person = ["name" => 'Gabriel', "age" => 25];

var_dump(isset($person['name']));
echo "<br>";

// remover uma variável
unset($name);
var_dump($name);