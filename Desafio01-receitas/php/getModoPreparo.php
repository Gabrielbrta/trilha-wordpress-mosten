<?php 

if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id']) && is_numeric($_GET['id'])) {
   $id = $_GET['id'];
   try {
    // pegar a o modo de preparo baseado na ordem
        $stmt = $conn->prepare("SELECT * FROM modo_preparo WHERE id_receita = :id ORDER BY ordem");
        $stmt->execute(array('id' => $id));
        $modo_preparo = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(count($modo_preparo) > 0) {
            return $modo_preparo;
        } else {
            die();
        }
   } catch(PDOException $e) {
       echo json_encode(['erro' => "Erro na requisição da receita"]);
       header("Location: ./404.php");
       die();
   }
} else {
    header("Location: ./404.php");
    die();
}