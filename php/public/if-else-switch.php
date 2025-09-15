<?php 

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


//switch
switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}