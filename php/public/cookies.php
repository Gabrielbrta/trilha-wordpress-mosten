<?php 
echo "<pre>";

// para criar um cookie é necessário usar a função setcookie()
// nome, valor, duração
setcookie("name", "Gabriel", strtotime('+5days'));

// verificar se existe o cookie
if(isset($_COOKIE['name'])) {
    var_dump($_COOKIE['name']);
    
    // é possivel pegar o valor do cookie em qualquer arquivo do projeto
    echo $_COOKIE['name'];
} else{
    echo "cookie não existe";
}

// excluir o cookie             // setar uma data vencida
setcookie("name", "", strtotime('-5days'));