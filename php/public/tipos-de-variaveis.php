<?php 
// string

//é qualquer valor entre aspas simples e duplas
echo gettype("testeString");
echo '<br>';

 // numbers - integers, float(double)
 echo gettype(20);
 echo '<br>';
 echo gettype(20.30);
 
 
 
 // booleans
 echo '<br>';
 echo gettype(false);
 echo '<br>';
 echo gettype(true);
 
 
 // arrays
echo '<br>';
echo gettype(["asdasdasd", 23]);

//objects
class Person{
    
}

echo gettype( new Person);


echo '<br>';
echo gettype(NULL);
//null