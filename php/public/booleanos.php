<?php 
// Variável super global;
$_SESSION['logged'] = false;


$_SESSION['logged'] = true;

if($_SESSION['logged']) {
    echo "é verdadeiro!";
    echo "<br>";
}

// booleandos em laços de repetição
for($i = 0; $i <= 10; $i++) {
    echo $i;
}