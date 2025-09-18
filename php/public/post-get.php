<?php 
// Estudar sobre ENV
echo "<pre>";
var_dump($_ENV);
// pegar dados por query string
var_dump($_GET);
// pegar dados do formulário no header
var_dump($_POST['nome']);
// para pegar arquivos
var_dump($_FILES);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get e Post</title>
</head>
<body>
<!-- é preciso usar o enctype="multipart/form-data" para enviar arquivos-->
    <form action="index.php" method="post" enctype="multipart/form-data" >
        <input type="text" name="nome" id="nome">
        <label for="senha">senha</label>
        <input type="password" name="senha">
        <label for="senha">Enviar arquivo</label>
        <input type="file" name="file">
        <button>Enviar</button>
    </form>
</body>
</html>