<?php 
echo "<pre>";

$names = ["gabriel", "Pedrinho", "juninho"];
echo "<ul>";
for($i = 0; $i < count($names); $i ++) {
    echo "<li>" . $names[$i]. "</li>";
}
echo "</ul>";

// while
echo "<br>While --------------------------------<br>";
$a = 0;
while($a < count($names)) {
    echo $names[$a];
    echo "<br>";
    $a++;
}

// do while
$a = 0;
echo "<br>Do While --------------------------------<br>";
do {
    echo $names[$a];
    $a++;
    echo "<br>";
}while($a < count($names));

echo "<br>foreach ----------------------------------<br>";
// Foreach
foreach($names as $key => $name) { // foreach($names as $name) tambem funciona sem a key(indice dos objetos)
    echo "$name <br>";
} 


echo "<br>pular elementos em um loop / continue ----------------------------------<br>";
// pular elementos em um loop / continue e break
for($i = 0; $i < count($names); $i++) {
    // aqui ele pula o pedrinho
    if($i == 1) {
        continue;
    }
    echo $names[$i] . "<br>";
}
echo "<br>Também funciona no foreach(continue) <br>";
foreach($names as $key => $name) {
    if($key == 1) {
        continue;
    }
    echo $name . "<br>";
}


echo "<br>pular elementos em um loop / break ----------------------------------<br>";

for($i = 0; $i < count($names); $i++) {
    // aqui ele para no pedrinho
    echo $names[$i] . "<br>";
    if($i == 1) {
        break;
    }
}

echo "<br>Também funciona no foreach(break) <br>";
foreach($names as $key => $name) {
    echo $name . "<br>";
    if($key == 1) {
        break;
    }
}