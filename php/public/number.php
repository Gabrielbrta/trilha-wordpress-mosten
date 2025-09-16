<?php 
// temos valores inteiros (int) e não inteiros(double)
// 12(inteiro)  
// 12,32 / 12.34(não inteiros, decimais ou com ponto flutuante)

// inteiro
echo gettype(12);
echo "<br>";

// double ou  float
echo gettype(12.32);
echo "<br>";

// ele vai somar mesmo que sejá uma string.
$number = '43';
echo $number + 56;
echo "<br>";

// ele vai dar erro "Non-numeric value"
// $number = 'Pedro';
// echo $number + 56;
// echo "<br>";

// Verificar se é número is_numeric
$number1 = 32;
$number2 = '20'; // também entende que é numerico
$number3 = '20asdasds'; //vai dar erro de non-numeric value

if(is_numeric($number1) && is_numeric($number2)) {
    echo "{$number1} e {$number2} são números";
} else {
    echo "Não é um número!";
}

echo "<br>";
// Arredondar numero para cima
$decimal = 32.65;
echo ceil($decimal);

// Arredondar numero para baixo
echo "<br>";
echo floor($decimal);
