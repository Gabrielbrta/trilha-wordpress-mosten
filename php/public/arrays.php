<?php 

$name  = "Gabriel";
$names = array("$name", "maria", "Pedro", true, "teste");

// mostrar dados do array print_r(array)
// os elementos true são transformados em '1' e o false é transformado em um elemento vazio
echo "<pre>";
print_r($names);

//para pegar todos os elementos deve-se usar var_dump(array ou dado);

var_dump($names[1]);

// Contar o número de elementos em um array --------------
$length = count($names);

//ultimo elemento do array----------------------
var_dump($names[$length - 1]);

//adicionar ao final -------------------------------
// $names[$length] = "Nome";
// var_dump($names);
// echo $length;

// Array push adicionar no final do array 2º metodo ---------------
array_push($names, "Barata");
var_dump($names);

// Adicionar elemento no inicio do array ----------------------
// $names[0] = "Inicio"; // não funciona, ele substitui o valor do inicio;
array_unshift($names, "Inicio"); // funciona
var_dump($names);


// Indices personalizados-------------------------------------------------
//  é possivel criar array dentro de arrays com indices personalizados ou não, não é possivel busca-los depois usando numero como indice, tem que chamar pelo nome do indice

$person = ['name' => 'Gabriel', 
'age' => 25, 
'documents' => ["cfp" => '123.123.123-09', "rg" => '43,213,421-3'],
'notas' => [8, 4, 6, 4, 3],
];
var_dump($person['name']);
var_dump($person['age']);
var_dump($person['documents']['cfp']);
var_dump($person['documents']['cfp']);

// array com indices padrões, numerados que já vem com o php
var_dump($person['notas']);