<?php 

// &&(and), ||(OU/or), !(negação)
$canAccess = true;
$isOlder = false;

// os dois tem que ser verdadeiro para retornar true caso contrario retornara false
$result = $canAccess && $isOlder;
var_dump($result);
echo "<br>";

// Somente 1 tem que ser verdadeiro OU 1 ou outro OU os dois
$result = $canAccess || $isOlder;
var_dump($result);
echo "<br>";

// inverte o tipo do valor booleano, se for true fica false e se for false fica true;
$result = !$canAccess;
var_dump($result);
echo "<br>";