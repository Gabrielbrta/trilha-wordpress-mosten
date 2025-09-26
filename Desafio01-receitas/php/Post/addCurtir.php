<?php 

require_once '../connection.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// cors não atrapalhar
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}


if($_SERVER['REQUEST_METHOD'] == "POST"){

    $json_curtidas = file_get_contents('php://input');
    $dados_curtida = json_decode($json_curtidas, true);
    if(json_last_error() === JSON_ERROR_NONE && is_array($dados_curtida)) {
        try {
            $id = strip_tags($dados_curtida['id']);
            $curtida = strip_tags($dados_curtida['curtida']);
            
         // inserir a curtida
             $stmt = $conn->prepare("UPDATE receitas SET curtidas = :curtida WHERE id = :id");
             $stmt->execute(array("id" => $id,"curtida" => $curtida));
             
            http_response_code(200);
                
        } catch(PDOException $e) {
             http_response_code(404);
            $conn = null;
             echo json_encode(['erro' => "Erro ao cadastrar o comentario"]);
             die();
         }
    }
}