<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // tem que usar htmlspecialchars
        $nome = $_POST['nome']; 
        $email = $_POST['email']; 
        // previne codigo xss
        $secure_name = htmlspecialchars($nome, ENT_QUOTES, "UTF-8");
        echo "<br>";
        echo $secure_name;
        $secure_email = htmlspecialchars($email, ENT_QUOTES, "UTF-8");
        
        // verifica se é a variavel é valida, pode ser email, int, bool, float etc...
        $secure_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $email_valido = filter_var($secure_email, FILTER_VALIDATE_EMAIL);

        echo "<br>";
        if($email_valido) {
            echo "O e-mail $email_valido é válido";
        }else{
            echo "O e-mail $email_valido não é válido";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizadores</title>
</head>
<body>
    <form action="sanitizadores-validates.php" method="post">
        <label for="nome">nome</label><br>
        <input type="text" name="nome"><br>
        <label for="email">email</label><br>
        <input type="email" name="email">
        <button type="submit">enviar</button>
    </form>
</body>
</html>