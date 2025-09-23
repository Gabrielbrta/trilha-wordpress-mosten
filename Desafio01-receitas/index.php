<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site de receitas e dicas de culinária">
    <!-- Google fonts Cabin-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    
    <!-- Fonts awasome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./src/css/style.css">
    
    <title>Mosten Food</title>
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
                    <li><a href="#">Início</a></li>
                    <li><a href="#receitas">Receitas</a></li>
                    <li><a href="#">Favoritas</a></li>
                    <li><a href="#">Sobre</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main id="home">
        <!--Banner home-->
        <section class="banner">
            <div class="content">
                <h1>Descubra Sabores <br> <span class="orange">Incríveis</span></h1>
                <p>Explore nossa coleção de receitas deliciosas, desde pratos tradicionais até criações modernas. Transforme sua cozinha em um espaço de criatividade.</p>
                <a class="btn btn-banner" href="#receitas">Ver Receitas</a>
            </div>
        </section>
        <!-- estatisticas-->
        <section class="stats">
            <div class="stats-item">
                <div class="icon"><i class="fa-solid fa-arrow-trend-up"></i></div>
                <p><strong>500+</strong></p>
                <p class="light">Receitas populares</p>
            </div>
            <div class="stats-item">
                <div class="icon"><i class="fa-regular fa-clock"></i></div>
                <p><strong>30min</strong></p>
                <p class="light">Tempo Médio</p>
            </div>
            <div class="stats-item">
                <div class="icon"><i class="fa-solid fa-user-group"></i></div>
                <p><strong>50+</strong></p>
                <p class="light">Chefs Parceiros</p>
            </div>
        </section>
        <!-- Receitas -->
         <section  id="receitas" class="receitas-container">
            <div class="receitas-content">
                <h2>Receitas em Destaque</h2>
                <p class="light">Nossas receitas mais populares e bem avaliadas pelos nossos chefs e comunidade.</p>

                <div class="cards-container"></div>
            </div>
         </section>
    </main>
    <footer id="footer" class="footer-container">
        <div class="footer-content">
            <div class="redes-sociais">
                <p><i class="fa-solid fa-utensils"></i> Mosten<span class="orange">Food</span></p>
                <p class="light">Descubra sabores incríveis com nossas receitas cuidadosamente selecionadas. Transforme sua cozinha em um espaço de criatividade e sabor.</p>
                <div>
                    <a href="#"><img src="./imgs/basil_facebook-outline.svg" alt="logo do facebook"></a>
                    <a href="#"><img src="./imgs/mdi_instagram.svg" alt="logo do instagram"></a>
                    <a href="#"><img src="./imgs/iconoir_twitter.svg" alt="logo do twitter"></a>
                    <a href="#"><img src="./imgs/iconoir_youtube.svg" alt="logo do youtube"></a>
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
    <script type="module" src="./js/app.js"></script>
</body>
</html>