<?php 
echo "<pre>";
// O que é um callback?
// Callbacks são funções passadas como parâmetro para outras funções

function teste($name) {
    return 'Ola, meu nome é ' . $name;
}

// se tiver parametro, tem que passar o valor na função que vai executar o callback

function teste2($callback, $nome) {

     // Verificar se é callback is_callable
    if(is_callable($callback)) {
        return $callback($nome);
    }
 }

 
 $user = 'teste'; // é possivel referenciar a função guardando a string dela em uma variavel

 // para passar uma função como callback, você precisa colocar o nome da função entre aspas
 echo teste2($user, "Gabriel");


 // método call_user_func('funcao callback', 'parametros');
 echo "<br>";
 echo call_user_func('teste', 'Gabriel');


 // chamar primeiro parâmetro com array caso for um objeto com método estático ou não e queira usar um método dele.
// para não precisar instanciar um objeto é só colocar static no método

 class User {
    public static function teste($name, $age) {

        return 'olá meu nome é ' . $name . " e tenho $age anos";
    }
 }

 
$user = new User; // por ter static, não precisa instanciar o Objeto
echo "<br>";

// passar um parametro para um metodo dentro de um objeto
// primeiro eu falo qual é o objeto instanciado e depois passo o método a ser utilizado, tudo dentro de um array.

// o segundo parâmetro é o que eu quero passar como parâmetro para o método selecionado

// só funciona se não tiver o static, assim tem que instanciar o objeto em uma variavel
//  echo call_user_func([$user, 'teste'], 'Gabriel', 25);


// caso tenha static é só colocar o nome do objeto entre aspas
 echo call_user_func(['User', 'teste'], 'Gabriel', 25);



