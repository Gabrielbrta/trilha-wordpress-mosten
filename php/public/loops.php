<?php 
echo "<pre>";

$names = ["gabriel", "Pedrinho", "juninho"];
echo "<ul>";
for($i = 0; $i < count($names); $i ++) {
    echo "<li>" . $names[$i]. "</li>";
}
echo "</ul>";