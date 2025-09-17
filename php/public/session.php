<?php 
echo "<pre>";
//  é necessario iniciar a sessão para criar uma

session_start();
$_SESSION['name'] = "Gabriel";


//pegar o id da sessão
echo session_id();
echo "<br>";
unset($_SESSION['name']);

// posso resgatar em qualquer arquivo php do projeto
// porém é necessário iniciar a sessão e depois destruir

// o mais recomendado é iniciar a sessão no index php para utilizar nos outros arquivos e no final destruir.
// para não precisar ficar abrindo varias sessões
if(isset($_SESSION['name'])) {
    echo $_SESSION['name'];
}else {
    echo "sessão não existe";
}

// destroi a sessão
session_destroy();
unset($_SESSION['name']); // sessão especifica