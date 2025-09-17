<?php 


// função anonima ou closure
$person = function($name) {
    return $name;
}; // precisa colocar ; no final da função

var_dump($person("Gabriel")); // quando uma variável recebe uma função anonima, ela se torna um objeto com a propriedade invoke, que significa que vc precisa invocar a variavel com parenteses no final

function teste($n1, $n2) {
    // para passar parametros para a closure dentro de uma função
    // é necessario usar o "use" e passar os argumentos;

    $soma = function() use ($n1, $n2){
        return $n1 + $n2;
    };
    return $soma;
}

var_dump(teste(32, 45)());