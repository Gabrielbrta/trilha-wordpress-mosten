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

if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id']) && is_numeric($_GET['id'])) {
   $id = $_GET['id'];
   try {
    // pegar todos os ingredientes
        $stmt = $conn->prepare("SELECT * FROM comentarios WHERE id_receita = :id");
        $stmt->execute(array('id' => $id));
        $comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(count($comentarios) > 0) {
            http_response_code(200);
            echo json_encode($comentarios);
        } else {
            http_response_code(404);
        }
        
    } catch(PDOException $e) {
       $conn = null;
        echo json_encode(['erro' => "Erro na requisição da receita"]);
        die();
    }
}