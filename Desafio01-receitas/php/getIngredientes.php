<?php 

if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id']) && is_numeric($_GET['id'])) {
   $id = $_GET['id'];
   try {
    // pegar todos os ingredientes
        $stmt = $conn->prepare("SELECT * FROM ingredientes WHERE id_receita = :id");
        $stmt->execute(array('id' => $id));
        $ingredientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(count($ingredientes) > 0) {
            return $ingredientes;
        } else {
            die();
        }

   } catch(PDOException $e) {
        json_encode(['erro' => "Erro na requisição da receita"]);
   }
} else {
    header("Location: ./404.php");
}