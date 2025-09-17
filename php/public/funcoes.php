<?php 

// só funciona se eu tiver um banco de dados

function connection() {
    $pdo = new PDO('mysql:host=localhost;dbname=books' , '');
    return $pdo;
}

function getData() {
    $connection = connection();
    $query = $connection->query("select * from users");
    $query->execute();
    return $query->fetchAll();
}

var_dump(getData());