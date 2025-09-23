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


if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $json_comentarios = file_get_contents('php://input');
    $dadosComentario = json_decode($json_comentarios, true);
    var_dump($dadosComentario);
    if(json_last_error() === JSON_ERROR_NONE && is_array($dadosComentario)) {
        try {
            $id = $dadosComentario['id'];
            $comentario = $dadosComentario['comentario'];
            $avaliacao = $dadosComentario['avaliacao'];
         // pegar todos os ingredientes
             $stmt = $conn->prepare("INSERT INTO comentarios (id_receita, comentario, avaliacao) VALUES(:id,:comentario, :avaliacao)");
             $stmt->execute(array("id" => $id,"comentario" => $comentario, "avaliacao" => $avaliacao));
             $resInsertComentario = json_encode(["status" => true]);
             if($resInsertComentario) {
                 http_response_code(200);
             } else {
                 http_response_code(404);
             }
             
         } catch(PDOException $e) {
            $conn = null;
             echo json_encode(['erro' => "Erro ao cadastrar o comentario"]);
             die();
         }
    }
}