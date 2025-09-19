<?php 
$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6];
$array2 = [7, 8, 9, 10, 11, 12];
$arrayString = ["Aqui tem um texto", "Aqui tem outro texto", "Não tem texto"];

echo "<pre>";
function impar($valor) {
    return $valor % 2 == 1;
}

function par($valor) {
    return $valor % 2 == 0;
}

print_r(array_filter($array1, 'impar'));
print_r(array_filter($array2, 'par'));

$param = "Aqui";


$arrayFiltrado = array_filter($arrayString, function ($string) use ($param) {
    return str_contains($string, $param);
    
}); 

var_dump($arrayFiltrado);