<?php 
    require_once '../../php/connection.php';
    require_once '../../php/getReceitas.php';
    require_once '../../php/getIngredientes.php';
    require_once '../../php/getModoPreparo.php';
    $conn = null;
    $stmt = null;
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    
    <!-- Fonts awasome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/receitas/receitas.css">
    <title><?php echo $nome ?? $nome ?></title>
</head>
<body>
    <header>
        <nav class="header-container">
            <div class="logo"><a href="#"><i class="fa-solid fa-utensils"></i> Mosten<span class="orange">Food</span></a></div>

            <div class="menu-actions">
                <i class="fa-solid fa-xmark close"></i>
                <i class="fa-solid fa-bars open active"></i> 
            </div> 
            <div class="menu closed">
                <ul>
                    <li><a href="../../index.html">Início</a></li>
                    <li><a href="#receitas">Receitas</a></li>
                    <li><a href="#">Favoritas</a></li>
                    <li><a href="#">Sobre</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <nav class="voltar">
        <a href="../../index.html" class="light">
            <i class="fa-solid fa-arrow-left-long"></i> Voltar às receitas
        </a>
    </nav>
    <main id="receita-container">
        <section class="receita-instrucoes">
            <div class="banner">
                <?php echo "<img src='$foto' alt='foto de uma $nome'>"; ?>
                <section class="descricao">
                    <div>
                        <div class="actions">
                            <div>
                                <h1><?php echo $nome;?></h1>
                                <p class="light"><?php echo $descricao;?></p>
                            </div>
                            <button class="curtir" data-btn-id="<?php echo $id;?>" ><i class="fa-solid fa-thumbs-up" data-btn-id="<?php echo $id;?>"></i> <span data-btn-id="<?php echo $id;?>" class="contador"><?php echo $curtidas;?></span></button>
                        </div>
                    </div>

                    <div class="estatisticas">
                        <div class="card">
                            <div class="icon"><i class="fa-regular fa-clock"></i></div>
                            <div>
                                <h2>Tempo</h2>
                                <p class="light"><?php echo $tempo;?></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="icon"><i class="fa-solid fa-user-group"></i></div>
                            <div>
                                <h2>Porções</h2>
                                <p class="light"><?php echo $porcao;?> pessoas</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="icon"><i class="fa-solid fa-utensils"></i></div>
                            <div>
                                <h2>Dificuldade</h2>
                                <p class="light"><?php echo $dificuldade;?></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="ingredientes">
                <h2>Ingredientes</h2>
                <ul>
                   <?php 
                    foreach($ingredientes as $ingrediente) {
                       echo "<li>";
                            echo strlen($ingrediente['unidade']) == 1 ? $ingrediente['quantidade'] : $ingrediente['quantidade']. " ";
                            echo isset($ingrediente['unidade']) ? $ingrediente['unidade'] . " de " : "";
                            echo $ingrediente['nome'];
                        echo "</li>";
                    }
                   ?>
                </ul>
            </div>
            <div class="modo-preparo">
                <h2>Modo de Preparo</h2>
                <ol>
                    <?php 
                        foreach($modo_preparo as $item_preparo) {
                            echo "<li>" . $item_preparo['nome'] . "</li>";
                        }
                    ?>
                </ol>
            </div>
        </section>
        <aside class="receita-feedback">
            <div class="avaliacao">
                <h3>Avaliar Receita</h3>
                <p class="media_avaliacao">Média de avaliações: </p>
                <p><span class="stars"></span> <span class="light">Avalie para comentar</span></p>
            </div>
    
            <div class="fomulario-comentarios">
                <form action="">
                    <h3><i class="fa-regular fa-comment-dots"></i> Comentários</h3>
                    <textarea name="comentario" id="comentario" class="entrada-comentario" rows="5"></textarea>
                    <button type="button" id="<?php echo $id; ?>" class="btn enviar"><i class="fa-regular fa-paper-plane"></i> Enviar Comentário</button>
                </form>
                <ul class="ultimos-comentarios">
                </ul>
            </div>
        </aside>
    </main>
    <footer id="footer" class="footer-container">
        <div class="footer-content">
            <div class="redes-sociais">
                <p><i class="fa-solid fa-utensils"></i> Mosten<span class="orange">Food</span></p>
                <p class="light">Descubra sabores incríveis com nossas receitas cuidadosamente selecionadas. Transforme sua cozinha em um espaço de criatividade e sabor.</p>
                <div>
                    <a href="#"><img src="../../imgs/basil_facebook-outline.svg" alt="logo do facebook"></a>
                    <a href="#"><img src="../../imgs/mdi_instagram.svg" alt="logo do instagram"></a>
                    <a href="#"><img src="../../imgs/iconoir_twitter.svg" alt="logo do twitter"></a>
                    <a href="#"><img src="../../imgs/iconoir_youtube.svg" alt="logo do youtube"></a>
                </div>
            </div>
            <div class="footer-receitas">
                <h2>Receitas</h2>
                <ul>
                    <li><a href="#">Pratos Principais</a></li>
                    <li><a href="#">Sobremesas</a></li>
                    <li><a href="#">Aperitivos</a></li>
                    <li><a href="#">Bebidas</a></li>
                </ul>
            </div>
            <div class="footer-sobre">
                <h2>Sobre</h2>
                <ul>
                    <li><a href="#">Nossa História</a></li>
                    <li><a href="#">Chefs</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-institucional">
                <h2>Legal</h2>
                <ul>
                    <li><a href="#">Termos de Uso</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Direitos Autorais</a></li>
                </ul>
            </div>
        </div>
        <div class="rights light">
            <p>&copy;  2025 MostenFood. Todos os direitos reservados.</p>
        </div>
    </footer>
    <script type="module" src="../../js/app.js"></script>
</body>
</html>