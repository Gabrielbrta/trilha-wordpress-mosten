<?php 


if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id']) && is_numeric($_GET['id'])) {
   $id = $_GET['id'];
   try {
    // pegar todas as receitas
        $stmt = $conn->prepare("SELECT * FROM receitas WHERE id = :id");
        $stmt->execute(array('id' => $id));
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(count($dados) > 0) {
            $id = $dados["0"]["id"];
            $foto = $dados["0"]["foto"]; 
            $nome = $dados["0"]["nome"]; 
            $descricao = $dados["0"]["descricao"]; 
            $tempo = $dados["0"]["tempo"]; 
            $porcao = $dados["0"]["porcao"];
            $dificuldade = $dados["0"]["dificuldade"];
            $curtidas = $dados["0"]["curtidas"];
        } else {
            header("Location: ./404.php");
            die();
        }
        
        
   } catch(PDOException $e) {
       json_encode(['erro' => "Erro na requisição da receita"]);
       header("Location: ./404.php");
       die();
    }
} else {
    header("Location: ./404.php");
    die();
}

?>