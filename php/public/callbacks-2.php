<?php 
 // ---- Caso usar call_user_func($callback) dentro de uma função que recebe um callback como parâmetro ----
function teste($nome, $idade) {
    return "Meu nome é {$nome} e tenho {$idade} anos";
}

function teste2($callback, $nome, $idade) {
 if( is_callable($callback)) {
        return call_user_func($callback, $nome, $idade);
    }
}

$teste = 'teste';

echo teste2($teste, "Gabriel", 25);

echo "<br>";

// __invoke pode ser passado como callback
class User {
    public function __invoke() 
    {
       return 'teste'; 
    }
}

$user = new User;

function teste3($callback) {
    return call_user_func($callback);
}

echo teste3($user);
echo "<br>";
// call user func array ---------------------------------------
function teste4($name, $age) {
    return "Olá meu nome é $name, e minha idade é $age";
}
// é a mesma coisa que o call_user_func só que você passar os parâmetros dentro de um array
echo call_user_func_array('teste4', ['Gabriel', 25]);

// por ser uma closure e ter o invoke ele precisa ter parenteses no final
$user = function() {
    return 'teste';
};

function teste5($callback) {
    // aqui eu invoco o user como callback e uso os parenteses
    return call_user_func($callback, 'gabriel');
}

echo teste5($user);