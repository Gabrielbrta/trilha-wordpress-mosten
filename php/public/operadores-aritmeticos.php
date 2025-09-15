<?php 
    // Operadores aritméticos
    $number1 = 20;
    $number2 = 5;
    
    echo "Numeros: " . $number1 . " e " . $number2;
    echo "<br>";
    // Soma
    echo "O resultado da soma: " . $number1 + $number2;
    echo "<br>";

    // Subtração
    echo "O resultado da subtração: " . $number1 - $number2;
    echo "<br>";
    // Multiplicação
    echo "O resultado da multiplicação: " . $number1 * $number2;
    echo "<br>";
    // Divisão
    echo "O resultado da divisão: " . $number1 / $number2;
    echo "<br>";
    // Resto
    echo "O resultado do resto da divisão: " . $number1 % $number2;
    echo "<br>";

    // ele segue a ordem de precedencia 5*5 + 20 = 45; para mudar tem que colocar parenteses
    $operacao = $number1 + $number2 * $number2;
    echo $operacao;
    echo "<br>";
    // o resultado será 125 porque eu alterei a ordem de precedencia com o parenteses
    $operacao = ($number1 + $number2) * $number2;
    echo $operacao;
    echo "<br>";