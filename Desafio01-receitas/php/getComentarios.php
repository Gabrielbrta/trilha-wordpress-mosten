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
   $id = strip_tags($_GET['id']);
   try {
    // pegar todos os ingredientes
        $stmt = $conn->prepare("SELECT comentarios.*,
                                (SELECT avg(avaliacao) FROM comentarios WHERE id_receita = :id) AS media_avaliacao
                                FROM comentarios
                                WHERE id_receita = :id;");
        $stmt->execute(array('id' => $id));
        $comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(count($comentarios) > 0) {
            echo json_encode($comentarios);
            http_response_code(200);
        }
        
    } catch(PDOException $e) {
        $conn = null;
        http_response_code(500);
        die();
    }
}