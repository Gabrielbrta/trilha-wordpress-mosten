<?php 


$nome = "Pedrinho";

//switch
switch ($nome) {
    case 'MarcinhoVP':
        echo $nome;
        echo "<br>";
    break;
    case "Marcelo":
        echo $nome;
        echo "<br>";
        break;
    default:
        echo "Não é o nome";
        echo "<br>";
    break;
}

$isAdmin = true;

// sujo
if($isAdmin) {
    echo "é admin";
} else {
    echo "Não é admin";
}
echo "<br>";

// menos sujo
if($isAdmin) {
    echo "É admin";
    return;
}

echo "não é admin";
echo "<br>";
// ternario - limpo
echo ($isAdmin) ? "É Admin" : "Não é Admin";
