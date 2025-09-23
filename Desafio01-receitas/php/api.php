<?php 

require_once './connection.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// cors não atrapalhar
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// pega todas as receitas
if($_SERVER['REQUEST_METHOD'] === "GET") {
    try {
        $stmt = $conn->prepare("SELECT * FROM receitas");
        $stmt->execute();

        $receitas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($receitas);
        $conn = null;
    }catch (PDOException $e) {
        echo json_encode(['erro' => "Erro na requisição do banco", 'exception' => $e]);
        $conn = null;
    }
}

